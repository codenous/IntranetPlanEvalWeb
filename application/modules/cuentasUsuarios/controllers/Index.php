<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
 
 public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 
 }
 
    public function cuentaSesionCrear()
    {
        $data = array (
            'titulo'            =>  'Crear cuentas de sesión',
            'tituloMantenedor'  =>  'Cuentas de Usuarios'
        );
        $this -> template ('CuentasSesionCrear_view',$data);
    }
}