<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
    
 public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 }

    public function armarNivel()
    {
        $data = array (
            'titulo'            =>  'Armar Nivel',
            'tituloMantenedor'  =>  'Armar Nuevo Nivel'
        );
        
        $this -> template ('ArmarNivel_view',$data);
    }
}