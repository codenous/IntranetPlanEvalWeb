<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
 
 public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 
 }
 
    public function matriculaIngresar()
    {
        $data = array (
            'titulo'            =>  'Registro Matricula',
            'tituloMantenedor'  =>  'Registro de Matrícula de Párvulo'
        );
        $this -> template ('MatriculaIngresar_view',$data);
    }
    
    public function matriculaModificar()
    {
        $data = array (
            'titulo'            =>  'Modificar Matricula',
            'tituloMantenedor'  =>  'Modificación de Datos de Matrícula de Párvulo'
        );
        $this -> template ('MatriculaModificar_view',$data);
    }
    public function matriculaListado()
    {
        $data = array (
            'titulo'            =>  'Listado Matriculas',
            'tituloMantenedor'  =>  'Listado de Matrícula de Párvulo'
        );
        $this -> template ('MatriculaListado_view',$data);
    }
    public function matriculaPerfil()
    {
        $data = array (
            'titulo'            =>  'Perfil Matricula',
            'tituloMantenedor'  =>  'Perfil de Matrícula de Párvulo'
        );
        $this -> template ('MatriculaPerfil_view',$data);
    }
 
}