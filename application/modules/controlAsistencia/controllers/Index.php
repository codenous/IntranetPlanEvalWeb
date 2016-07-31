<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
 
 public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 
 }

    public function aplicarAsistenciaDiaria()
    {
        $data = array (
            'titulo'            =>  'Asistencia Diaria',
            'tituloMantenedor'  =>  'Aplicar Asistencia Diaria'
        );
        $this -> templateEducadora ('asistenciaAplicarParvulo_view',$data);
    }
}