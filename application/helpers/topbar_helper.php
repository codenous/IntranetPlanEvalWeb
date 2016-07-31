<?php

function getTopBarAdmin()
{
    $topBarAdmin =
    '<nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-globe"></i> Notificaciones
                            <b class="caret"></b>
                            <span class="notification">5</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Notification 1</a></li>
                            <li><a href="#">Notification 2</a></li>
                            <li><a href="#">Notification 3</a></li>
                            <li><a href="#">Notification 4</a></li>
                          </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Usuario
                            <b class="caret"></b>
                        </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Cambiar Clave</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Salir</a></li>
                          </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
    return $topBarAdmin;
}

