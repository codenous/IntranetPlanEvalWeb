<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller 
{
    public function template ($view, $data = array())
    {
        $this -> load -> view ('templateDirectora/header',$data);
        $this -> load -> view ($view, $data);
        $this -> load -> view ('templateDirectora/footer');
    }
    
    public function templateAdmin ($view, $data = array())
    {
        $this -> load -> view ('templateAdmin/header',$data);
        $this -> load -> view ($view, $data);
        $this -> load -> view ('templateAdmin/footer');
    }
    
    public function templateEducadora ($view, $data = array())
    {
        $this -> load -> view ('templateEducadora/header_view',$data);
        $this -> load -> view ('templateEducadora/sidebar_view');
        $this -> load -> view ('templateEducadora/topbar_view');
        $this -> load -> view ($view, $data);
        $this -> load -> view ('templateEducadora/footer_view');
    }
    
}

