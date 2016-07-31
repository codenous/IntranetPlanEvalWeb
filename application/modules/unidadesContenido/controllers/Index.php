<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
 
 public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 
 }
 
    public function unidadesContenidoListado()
    {
        $data = array (
            'titulo'            =>  'Listado Unidades Contenido',
            'tituloMantenedor'  =>  'Listado de Unidades de Contenido'
        );
        $this -> template ("UnidadesContenidoListado_view",$data);
    }
    public function unidadesContenidoIngresar()
    {
        $data = array (
            'titulo'            =>  'Ingreso Unidad Contenido',
            'tituloMantenedor'  =>  'Registro de Unidades de Contenido'
        );
        $this -> template ('unidadesContenidoIngresar_view',$data);
    }
    public function unidadesContenidoModificar()
    {
        $data = array (
            'titulo'            =>  'Modificar Unidad Contenido',
            'tituloMantenedor'  =>  'Modificación de datos de Unidad de Contenido'
        );
        $this -> template ("UnidadesContenidoModificar_view",$data); 
    }
}