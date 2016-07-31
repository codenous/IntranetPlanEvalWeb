<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
 
 public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 
 }
 
    public function jardinesListado()
    {
        $data = array (
            'titulo'            =>  'Listado Jardines',
            'tituloMantenedor'  =>  'Listado de Jardines Infantiles'
        );
        $this -> templateAdmin ("JardinesListado_view",$data);
    }
    public function jardinesIngresar()
    {
        $data = array (
            'titulo'            =>  'Ingreso Jardín',
            'tituloMantenedor'  =>  'Registro de Jardín Infantil'
        );
        $this -> templateAdmin ('JardinesIngresar_view',$data);
    }
    public function jardinesModificar()
    {
        $data = array (
            'titulo'            =>  'Modificar Jardín',
            'tituloMantenedor'  =>  'Modificación de Datos del Jardín Infantil'
        );
        $this -> templateAdmin ("JardinesModificar_view",$data);
        
    }
    public function jardinPerfil()
    {
        $data = array (
            'titulo'            =>  'Datos del Jardín Infantil',
        );
        $this -> templateAdmin('JardinesPerfil_view',$data);
    }
 
}