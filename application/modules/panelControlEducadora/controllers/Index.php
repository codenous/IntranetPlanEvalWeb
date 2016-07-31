<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
 
 public function __construct()
 {
 
 parent::__construct();
 
 
 }
 
    public function Home()
    {
        $data = array (
            'titulo'            =>  'Panel de Control ',
            'tituloMantenedor'  =>  'Panel de Control Educadora'
        );
        $this -> templateEducadora ('PanelControl_view',$data);
    }
}