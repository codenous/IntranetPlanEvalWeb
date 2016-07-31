<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MY_Controller
{
 
 public function __construct()
 {
 
 parent::__construct();
 
    $this->load->model('Login_model','login');
 
 }
 
    public function index()
    {
        $user   =   $this -> input -> post('username');
        $clave  =   $this -> input -> post('password');
        
        $data = array(
            "user"  => $user,
            "clave" => $clave
        );
        
        if($data["user"]=="" and $data["clave"]==""){
            
            $this->session->set_flashdata('error', 'Campos Usuario y Contraseña están vacíos');
            redirect(base_url()."login/Index/LoginUsuarios");
            echo "demo.showNotification('top','right')";
            
        }else{
            $usuario = $this -> login -> getUser($data["user"]);
            if($usuario !== NULL){
                if($usuario -> clave_cuenta == $data["clave"]){
                    $data2 = array (
                        'user'  =>  $data["user"],
                        'id'    =>  0,
                        'login' => TRUE
                    );
                    $this -> session -> set_flashdata('campos',$data2);
                    redirect(base_url()."panelControl/Index");
                }else{
                    $this -> session -> set_flashdata('error', 'Contraseña erronea para este Usuario');
                    redirect(base_url()."login/Index/LoginUsuarios");
                }
            }else{
                $this -> session -> set_flashdata('error', 'Usuario no existe en los registros');
                redirect(base_url()."login/Index/LoginUsuarios");
            }            

        }
        //$this -> load -> view ("Login_view");
    }
    
    public function LoginUsuarios()
    {
        $data = array();
        $data['error'] = $this -> session -> flashdata('error');
        $this->load->view('login/Login_View',$data);
    }
    
    public function logout(){
        $this -> session -> sess_destroy();
        redirect("login/Index/LoginUsuarios");
    }
}