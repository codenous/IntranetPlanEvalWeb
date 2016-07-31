<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
    
 public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 }

    public function crearNivel()
    {
        $data = array (
            'titulo'            =>  'Crear Nivel',
            'tituloMantenedor'  =>  'Crear Nuevo Nivel'
        );
        $this -> template ('CrearNivel_view',$data);
    }
}