<?php

function getSideBarAdmin()
{
   $sidebarAdmin = 
    '<div class="sidebar" data-color="red" data-image="'.base_url().'assets/img/sidebar.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    PLANEVAL JARDIN
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="'.base_url().'jardines/Index/jardinesListado">
                        <i class="pe-7s-culture"></i>
                        <p>jardines infantiles</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>';
   return $sidebarAdmin;
}
function getSideBarDirectora()
{
   $sidebarAdmin = 
    '<div class="sidebar" data-color="purple" data-image="'.base_url().'assets/img/sidebar.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    PLANEVAL JARDIN
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="'.base_url().'funcionarios/Index/funcionariosListado">
                        <i class="pe-7s-users"></i>
                        <p>Funcionarios Jardín</p>
                    </a>
                </li>
                <li>
                    <a href="'.base_url().'cuentasUsuarios/Index/cuentaSesionCrear">
                        <i class="pe-7s-user"></i>
                        <p>Cuentas de Usuario</p>
                    </a>
                </li>
                <li>
                    <a href="'.base_url().'matriculas/Index/matriculaListado">
                        <i class="pe-7s-culture"></i>
                        <p>Matricula de Párvulos</p>
                    </a>
                </li>
                <li>
                    <a href="'.base_url().'nivelesJardin/Index/crearNivel">
                        <i class="pe-7s-menu"></i>
                        <p>Niveles Jardín</p>
                    </a>
                </li>
                <li>
                    <a href="'.base_url().'armarNivelesJardin/Index/armarNivel">
                        <i class="pe-7s-news-paper"></i>
                        <p>Armar Niveles Jardín</p>
                    </a>
                </li>
                <li>
                    <a href="'.base_url().'unidadesContenido/Index/unidadesContenidoListado">
                        <i class="pe-7s-network"></i>
                        <p>Unidades de Contenido</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-notebook"></i>
                        <p>Planificac. Educadora</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-display1"></i>
                        <p>Reportes de Gestión</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>';
   return $sidebarAdmin;
}

