<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            Login de Usuarios
        </title>
          <?php echo getLinkCssJs(); ?>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500);
body {
    /*background: -webkit-linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    background: -moz-linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    background: -ms-linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    background: -o-linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    background: linear-gradient(90deg, #FF512F 10%, #DD2476 90%);*/
    background:#2b82ad;
    padding-top: 100px;
    font-family: 'Roboto', sans-serif;
    font-weight:400;
}
.divPanel{
    border-radius:5px;
    background:#fff;
    padding:10px;
}
.divPanelTitulo, .divPanelCuerpo, .divPanelFooter{
    padding-left:20px;
    padding-right:20px;
    padding-bottom:20px;
}
.divPanel label{
    color:#6a737b;
}
.divPanelTitulo h3{
    font-family: 'Roboto', sans-serif;
    color:#4d4f53;
}
input[type="text"], input[type="password"]{
    padding-top:10px;
    padding-bottom:10px;
    height:50px;
}


.btn-login {
  background-color: #2D3B55;
  outline: none;
  color: #FFF;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border: none;
  border-radius: 0px;
  box-shadow: none;
}
.btn-login:hover,
.btn-login:focus {
  color: #fff;
  background-color: #2D3B55;
}



        </style>        
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form id="login-form" action="<?= base_url().'login/Index' ?>" method="post" role="form" style="display: block;">
                <div class="divPanel">
                    <div class="divPanelTitulo text-center">
                        <h3>Login de Usuarios</h3>
                        <hr>
                    </div>
                    <div class="divPanelCuerpo">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="username" id="username"  class="form-control" placeholder="nombre usuario">
                        </div>
                        <div class="form-group">
                            <label>Clave</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="clave usuario">
                        </div>
                        <hr>
                    </div>
                    <div class="divPanelFooter">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Ingresar">
                    </div>
                </div>
                </form>    
            </div>
            
                <div class="col-lg-6 col-lg-offset-3">
                    <?php if ($error){
                        
                    }?>
                    
                   
                </div>
        </div>
    </div>


</body>   
</html>


