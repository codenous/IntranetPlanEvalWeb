<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{ 
    public function getUser($user='')
    {
        $this -> db -> select ('*');
        $this -> db -> from ('cuentas_sesion');
        $this -> db -> where ('rut_empleado', $user);
        $datos = $this -> db -> get();
        
        if($datos -> num_rows() == 1){
            return $datos -> row();
        }else{
            return NULL;
        }
    }
    
}
