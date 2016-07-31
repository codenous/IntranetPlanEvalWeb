<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
 
 public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 
 }
 
    public function funcionariosListado()
    {
        $data = array (
            'titulo'            =>  'Listado Funcionarios',
            'tituloMantenedor'  =>  'Listado de Funcionarios'
        );
        $this -> template ("FuncionariosJardinListado_view",$data);
    }
    public function funcionariosIngresar()
    {
        $data = array (
            'titulo'            =>  'Ingreso Funcionario',
            'tituloMantenedor'  =>  'Registro de Funcionario'
        );
        $this -> template ('FuncionariosJardinIngresar_view',$data);
    }
    public function funcionariosModificar()
    {
        $data = array (
            'titulo'            =>  'Modificar Funcionario',
            'tituloMantenedor'  =>  'Modificación de Funcionario'
        );
        $this -> template ("FuncionariosJardinModificar_view",$data);
        
    }
    public function funcionariosPerfil()
    {
        $data = array (
            'titulo'            =>  'Perfil Funcionario',
        );
        $this -> template('FuncionariosJardinPerfil_view',$data);
    }
 
}