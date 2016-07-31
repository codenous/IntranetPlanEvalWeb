<script>
$(document).ready(function(){
   $('#modificarNivel').appendTo("body");  
});

</script>
<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><?php echo $tituloMantenedor; ?></h4>
                    </div>
                    <hr>
                    <form>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12" style='margin-top:-20px'>
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
                            </div>
                            <div class="row">
                                <div class="col-md-9" style='margin-top:-20px'>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" placeholder="Grupo A" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3" style='margin-top:-20px'>
                                    <div class="form-group">
                                        <label>Periodo</label>
                                        <input type="text" placeholder="2016" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Crear Nivel</button>
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
                        <div class="col-md-6">
                            <div class="header">
                                <h4 class="title">Listado de Niveles Jardín Infantil</h4> 
                             </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <hr>
                <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th width='5%'>Id</th>
                                <th width='40%'>Nombre Nivel</th>
                                <th width='5%'>Periodo</th>
                                <th width='5%'>Estado</th>
                                <th width='5%'>Armado</th>
                                <th width='20%'>Rango</th>
                                <th width='5%'></th>
                                <th width='5%'></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nivel Sala Cuna Menor "Grupo A"</td>
                                    <td>
                                        <span class="label label-info">2016</span>
                                    </td>
                                    <td>
                                        <span class="label label-primary">activo</span>
                                    </td>
                                    <td>
                                        <span class="label label-danger">Sin Datos</span>
                                    </td>
                                    <td>
                                        3 meses a 18 meses (0 a 1 años)
                                    </td>
                                    <td class='text-center'>
                                        <a data-toggle="modal" data-target="#modificarNivel" href="#">
                                            <i class='pe-7s-note2' style='font-size:24pt'></i>
                                        </a>
                                    </td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'#'?>'>
                                            <i class='pe-7s-trash' style='font-size:28pt'></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nivel Sala Cuna Menor "Grupo B"</td>
                                    <td>
                                        <span class="label label-info">2016</span>
                                    </td>
                                    <td>
                                        <span class="label label-primary">activo</span>
                                    </td>
                                    <td>
                                        <span class="label label-warning">En Construcción</span>
                                    </td>
                                    <td>
                                        3 meses a 18 meses (0 a 1 años)
                                    </td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'matriculas/Index/matriculaModificar'?>'>
                                            <i class='pe-7s-note2' style='font-size:24pt'></i>
                                        </a>
                                    </td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'#'?>'>
                                            <i class='pe-7s-trash' style='font-size:28pt'></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nivel Medio Menor "Grupo A"</td>
                                    <td>
                                        <span class="label label-info">2016</span>
                                    </td>
                                    <td>
                                        <span class="label label-primary">activo</span>
                                    </td>
                                    <td>
                                        <span class="label label-success">Armado Ok</span>
                                    </td>
                                    <td>
                                        24 meses a 36 meses (2 a 3 años)
                                    </td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'matriculas/Index/matriculaModificar'?>'>
                                            <i class='pe-7s-note2' style='font-size:24pt'></i>
                                        </a>
                                    </td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'#'?>'>
                                            <i class='pe-7s-trash' style='font-size:28pt'></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <center>
                        <ul class="pagination pagination-md no-margin" id="pagination">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </center>
                </div>    
            </div>
        </div>
    </div>        
</div>



<div class="modal fade" id="modificarNivel" data-keyboard="false" data-backdrop="static" >
    <div class="modal-dialog modal-md" role="modal">
      <div class="modal-content card">
        <form>  
        <div class="modal-header">
          <h4 class="modal-title">Modificar Nivel</h4>
        </div>
        <div class="modal-body">
            <div class="" style="border:0px">
                <div class="row">
                    <div class="col-md-12">
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
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" placeholder="Grupo A" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Periodo</label>
                            <input type="text" placeholder="2016" class="form-control">
                        </div>
                    </div>  
                </div>     
            </div>    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Modificar Nivel</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
        </form>
      </div>
    </div>
</div>






