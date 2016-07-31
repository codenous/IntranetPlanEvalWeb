<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="header">
                                <h4 class="title"><?php echo $tituloMantenedor?></h4> 
                             </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header pull-right">
                                <a href='<?php echo base_url().'unidadesContenido/Index/unidadesContenidoIngresar'?>'>
                                    <button class='btn bg-aqua'><i class="fa fa-file-text" aria-hidden="true"></i> Nueva Unidad</button>
                                    </a>
                             </div>
                        </div>
                    </div>
                    <hr>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th width='5%'>id</th>
                                <th width='35%'>nombre unidad</th>
                                <th width='15'>nivel</th>
                                <th width='15%'>mes</th>
                                <th width='15%'>duración semanas</th>
                                <th width='5%'></th>
                                <th width='5%'></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bienvenido al Jardín</td>
                                    <td>Niveles Medios</td>
                                    <td>Marzo</td> 
                                    <td>2 semanas</td>                          
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'unidadesContenido/Index/unidadesContenidoModificar'?>'>
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
                                    <td>La Familia</td>
                                    <td>Todos</td>
                                    <td>Marzo</td> 
                                    <td>2 semanas</td>                          
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
