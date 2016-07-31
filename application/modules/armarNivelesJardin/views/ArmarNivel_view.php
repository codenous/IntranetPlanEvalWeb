<script>
$(document).ready(function(){
   $('#agregarEducadora').appendTo("body");  
   $('#agregarAsistente').appendTo("body");  
   $('#agregarParvulo').appendTo("body"); 
});
</script>

<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><?php echo $tituloMantenedor; ?></h4>
                    </div>
                    <hr>
                    <form>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6" style='margin-top:-20px'>
                                    <div class="form-group">
                                        <label>Nivel Jardín</label>
                                        <select class="form-control">
                                            <option>Niveles</option>
                                            <option>----------------------</option>
                                            <option>Nivel Sala Cuna Menor</option>
                                            <option>Nivel Sala Cuna Mayor</option>
                                            <option>Nivel Medio Menor</option>
                                            <option>Nivel Medio Mayor</option>
                                            <option>Nivel Transición I</option>
                                            <option>Nivel Transición II</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6" style='margin-top:-20px'>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <select class="form-control">
                                            <option>Grupos</option>
                                            <option>----------------------</option>
                                            <option>Grupo A</option>
                                            <option>Grupo B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3" style='margin-top:-20px'>
                                    <div class="form-group">
                                        <label>Periodo</label>
                                        <input type="text" value="<?php echo date('Y') ?>" class="form-control">
                                    </div>
                                    
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        <a class="btn btn-success" data-toggle="modal" data-target="#agregarEducadora" href="#">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            Educadora
                                        </a>
                                        <a class="btn btn-warning" data-toggle="modal" data-target="#agregarAsistente" >
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            Asistente
                                        </a>
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#agregarParvulo">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            Párvulo
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Guardar Nivel</button>
                                </div>
                            </div>
                        </div>   
                    </form>
                </div>
            </div>    
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="header">
                                <h4 class="title text-center">Nivel Sala Cuna Menor "A"</h4><hr>
                                <p style="font-size:10pt" class="text-justify">
                                    La sala cuna es un apoyo muy útil y necesario para los padres 
                                    y madres, pero no reemplazan el cuidado y cariño familiar. 
                                    Son instancias complementarias en las cuales es muy  
                                    importante que los padres y madres también se involucren y
                                    participen.
                                </p>
                                <span class="label label-info">Primer Ciclo</span>
                                <span class="label label-warning">3 meses a 2 años</span>
                                <span class="label label-success">1 Educadora</span>
                                <span class="label label-primary">3 Asistentes</span>
                                <span class="label label-danger">24 Párvulos</span>
                                <hr>
                                <br><br>
                                <h5 class="title text-center"><u>Educadoras de Párvulos</u></h5>
                                <div class="content table-responsive table-full-width">
                                <table class="table table-bordered tabla_lista_info">
                                    <thead>
                                        <th width='15%' class="text-center">Foto</th>
                                        <th width='50%' class="text-center">Educadora</th>
                                        <th width='30%' class="text-center">Registro</th>
                                    </thead>
                                    <tbody class="">
                                        <tr class="success">
                                            <td>
                                                <img class="img-responsive img-circle" width="48px" src="<?php echo base_url().'assets/img/face-6.jpg'?>">
                                            </td>
                                            <td>Tía Marcela Rodriguez Díaz</td>
                                            
                                            <td>10-02-2015</td>
                                        </tr>
                                    </tbody>  
                                </table>
                                </div>
                                <br>
                                <h5 class="title text-center"><u>Asistentes de Párvulos</u></h5>
                                <div class="content table-responsive table-full-width">
                                <table class="table table-bordered tabla_lista_info">
                                    <thead>
                                        <th width='15%' class="text-center">Foto</th>
                                        <th width='50%' class="text-center">Asistente</th>
                                        <th width='30%' class="text-center">Registro</th>
                                    </thead>
                                    <tbody class="">
                                        <tr class="success">
                                            <td>
                                                <img class="img-responsive img-circle" width="48px" src="<?php echo base_url().'assets/img/face-6.jpg'?>">
                                            </td>
                                            <td>Tía Marcela Rodriguez Díaz</td>
                                            
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>
                                                <img class="img-responsive img-circle" width="48px" src="<?php echo base_url().'assets/img/face-6.jpg'?>">
                                            </td>
                                            <td>Tía Marcela Rodriguez Díaz</td>
                                            
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>
                                                <img class="img-responsive img-circle" width="48px" src="<?php echo base_url().'assets/img/face-6.jpg'?>">
                                            </td>
                                            <td>Tía Marcela Rodriguez Díaz</td>
                                            
                                            <td>10-02-2015</td>
                                        </tr>
                                    </tbody>  
                                </table>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="header">
                                <h4 class="title text-center">Lista de Párvulos</h4><hr>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bordered tabla_lista_info">
                                    <thead>
                                        <th width='10%' class="text-center">Matrícula</th>
                                        <th width='40%' class="text-center">Nombre Párvulo</th>
                                        <th width='30%' class="text-center">Edad</th>
                                        <th width='20%' class="text-center">Registro</th>
                                    </thead>
                                    <tbody class="">
                                        <tr class="success">
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr>
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="info">
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr>
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr>
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr>
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="success">
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr>
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="info">
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr>
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr>
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                        <tr>
                                            <td>1122334455</td>
                                            <td>Marcela Rodriguez Díaz</td>
                                            <td>3 años, 11 meses</td>
                                            <td>10-02-2015</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>      
</div>




<!-- MODAL ASOCIAR EDUCADORA DE PÁRVULOS -->
<div class="modal fade" id="agregarEducadora" data-keyboard="false" data-backdrop="static" >
    <div class="modal-dialog modal-lg" role="modal">
      <div class="modal-content card">
        <form>  
        <div class="modal-header">
          <h4 class="modal-title">Asociar Educadoras a Nivel</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h5 class="title">Educadoras de Párvulos</h5><hr>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th width="5%">
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                        </label>
                                    </th>
                                    <th width='5%'>Id</th>
                                    <th width='90%'>Nombre Educadora</th>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>1</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>2</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>3</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <br><br><br><br><br><br>
                    <div class="text-center">
                        <button class="btn btn-adn">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-adn">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h5 class="title">Educadoras Nivel Sala Cuna "A"</h5><hr> 
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th width="5%">
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                        </label>
                                    </th>
                                    <th width='5%'>Id</th>
                                    <th width='60%'>Nombre Educadora</th>
                                    <th width='30%'>F. Registro</th>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>1</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>10-02-2015</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>2</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>10-02-2015</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>3</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>10-02-2015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar y Continuar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
        </form>
      </div>
    </div>
</div>

<!-- MODAL ASOCIAR ASISTENTES DE PÁRVULOS -->
<div class="modal fade" id="agregarAsistente" data-keyboard="false" data-backdrop="static" >
    <div class="modal-dialog modal-lg" role="modal">
      <div class="modal-content card">
        <form>  
        <div class="modal-header">
          <h4 class="modal-title">Asociar Asistentes a Nivel</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h5 class="title">Asistentes de Párvulos</h5><hr> 
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th width="5%">
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                        </label>
                                    </th>
                                    <th width='5%'>Id</th>
                                    <th width='90%'>Nombre Asistente</th>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>1</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>2</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>3</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <br><br><br><br><br><br>
                    <div class="text-center">
                        <button class="btn btn-adn">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-adn">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h5 class="title">Asistentes Nivel Sala Cuna "A"</h5><hr> 
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th width="5%">
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                        </label>
                                    </th>
                                    <th width='5%'>Id</th>
                                    <th width='60%'>Nombre Educadora</th>
                                    <th width='30%'>F. Registro</th>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>1</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>10-02-2015</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>2</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>10-02-2015</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>3</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>10-02-2015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar y Continuar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
        </form>
      </div>
    </div>
</div>

<!-- MODAL ASOCIAR PÁRVULOS A NIVEL -->
<div class="modal fade" id="agregarParvulo" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="modal" style='width:90%'>
      <div class="modal-content card">
        <form>  
        <div class="modal-header">
          <h4 class="modal-title">Asociar Párvulos a Nivel</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="header">
                            <h5 class="title">Lista de Párvulos</h5><hr>
                            <p style='font-size:10pt'>Ciclo: <label style='text-transform: lowercase'>Primer y Segundo Ciclo</label></p>
                            <p style='font-size:10pt'>Rango: <label style='text-transform: lowercase'>3 meses a 6 años</label></p>
                            <p style='font-size:10pt'>Total: <label style='text-transform: lowercase'>40 Párvulos</label></p> 
                            <hr>
                        </div>
                    
                        <div class="content table-responsive table-full-width">
                            
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th width="5%">
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                        </label>
                                    </th>
                                    <th width='5%'>Matrícula</th>
                                    <th width='40%'>Nombre Párvulo</th>
                                    <th width='40'>Edad</th>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>1122334455</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>2 años, 11 meses</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>2</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>2 años, 11 meses</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>3</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>2 años, 11 meses</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="text-center">
                        <button class="btn btn-adn">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-adn">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h5 class="title text-center">Párvulos Nivel Sala Cuna "A"</h5><hr>
                            <p style='font-size:10pt'>Ciclo: <label style='text-transform: lowercase'>Primer Ciclo</label></p>
                            <p style='font-size:10pt'>Rango: <label style='text-transform: lowercase'>3 meses a 2 años</label></p>
                            <p style='font-size:10pt'>Total: <label style='text-transform: lowercase'>24 Párvulos</label></p>
                            <hr>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th width="5%">
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                        </label>
                                    </th>
                                    <th width='5%'>Matrícula</th>
                                    <th width='40%'>Nombre Párvulo</th>
                                    <th width='30%'>Edad</th>
                                    <th width='20%'>F. Registro</th>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>1122334455</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>3 años, 11 meses</td>
                                    <td>10-02-2015</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>2</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>3 años, 11 meses</td>
                                    <td>10-02-2015</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                        </label>
                                    </td>
                                    <td>3</td>
                                    <td>Marcela Rodriguez Díaz</td>
                                    <td>3 años, 11 meses</td>
                                    <td>10-02-2015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar y Continuar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
        </form>
      </div>
    </div>
</div>