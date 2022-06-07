<?php

namespace App\Http\Livewire;
use App\Models\estudiante;
use Livewire\Component;
class Estudiantes extends Component
{   
    //definimos variables
    public $estudiante, $nombre,$apellido,$edad,$sexo;
    public $modal = false;
    public function render()
    {
        $this->estudiantes = estudiante::all();
        return view('livewire.estudiantes');
    }
    //seccion de las funciones:
    public function  crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal(){
        $this->modal = true;
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->id_estudiante='';
        $this->nombre = '';
        $this->apellido = '';
        $this->edad = '';
        $this->sexo = '';
    }
    public function editar($id)
    {
        $estudiantes = estudiante::findOrFail($id);
        $this->id_estudiante=$id;
        $this->nombre = $estudiantes->nombre;
        $this->apellido = $estudiantes->apellido; 
        $this->edad = $estudiantes->edad;
        $this->sexo = $estudiantes->sexo;
        $this->abrirModal();
    }
    public function eliminar($id)
    {
        estudiante::find($id)->delete();
    }
    public function guardar()
    {
        estudiante::updateOrCreate(['id'=>$this->id_estudiante],
            [
            'nombre' => $this->nombre ,
            'apellido' =>$this->apellido , 
            'edad' =>$this->edad ,
            'sexo' =>$this->sexo 
            ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }  
}
