<?php

function getLinkCssJs()
{
    $link ='
    <link href="'.base_url().'assets/css/bootstrap.css" rel="stylesheet" />
    <link href="'.base_url().'assets/css/animate.min.css" rel="stylesheet"/>
    <link href="'.base_url().'assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="'.base_url().'assets/css/demo.css" rel="stylesheet" />
    <link href="'.base_url().'assets/css/timeline.css" rel="stylesheet" />
    <link href="'.base_url().'assets/css/estilos.css" rel="stylesheet" />
    <link href="'.base_url().'assets/css/plugins/flipswitch/flipswitch.css" rel="stylesheet" />
        
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="'.base_url().'assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
    <script src="'.base_url().'assets/js/jquery.js" type="text/javascript"></script>
    <script src="'.base_url().'assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="'.base_url().'assets/js/bootstrap-checkbox-radio-switch.js"></script>
    <script src="'.base_url().'assets/js/chartist.min.js"></script>
    <script src="'.base_url().'assets/js/bootstrap-notify.js"></script>
    <script src="'.base_url().'assets/js/light-bootstrap-dashboard.js"></script>
    <script src="'.base_url().'assets/js/demo.js"></script>   
    ';
    return $link;
}

