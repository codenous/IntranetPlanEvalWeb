<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="header">
                                <h4 class="title"><?php echo $tituloMantenedor?></h4> 
                             </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header pull-right">
                                <a href='<?php echo base_url().'nivelesJardin/Index/crearNivel'?>'>
                                <button class='btn bg-aqua'><i class="fa fa-child" aria-hidden="true"></i> Armar Nivel</button>
                                </a>
                             </div>
                        </div>
                    </div>
                    <hr>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th width='10%'>Foto</th>
                                <th width='10%'>Matricula</th>
                                <th width='20%'>Nombre Párvulo</th>
                                <th width='15%'>Nivel</th>
                                <th width='10%'>Estado</th>
                                <th width='20%'>F. Matricula</th>
                                <th width='5%'></th>
                                <th width='5%'></th>
                                <th width='5%'></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src='<?php echo base_url().'assets/img/face-6.jpg'?>' class='img-responsive img-circle' style='width:48px'></td>
                                    <td>112223334</td>
                                    <td>Marcela Durán Rojas</td>
                                    <td>Nivel Transición I</td>                                 
                                    <td><span class="label label-success">Matriculado 2017</span></td>
                                    <td>10 de Noviembre de 2016</td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'matriculas/Index/matriculaPerfil'?>'>
                                            <i class='pe-7s-id' style='font-size:28pt'></i>
                                        </a>
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
                                    <td><img src='<?php echo base_url().'assets/img/face-6.jpg'?>' class='img-responsive img-circle' style='width:48px'></td>
                                    <td>112223334</td>
                                    <td>Marcela Durán Rojas</td>
                                    <td>Nivel Sala Cuna Menor</td>                                 
                                    <td><span class="label label-success">Matriculado 2017</span></td>
                                    <td>10 de Noviembre de 2016</td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'funcionarios/Index/funcionariosPerfil'?>'>
                                            <i class='pe-7s-id' style='font-size:28pt'></i>
                                        </a>
                                    </td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'funcionarios/Index/funcionariosModificar'?>'>
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
                                    <td><img src='<?php echo base_url().'assets/img/face-6.jpg'?>' class='img-responsive img-circle' style='width:48px'></td>
                                    <td>112223334</td>
                                    <td>Marcela Durán Rojas</td>
                                    <td>Nivel Transición II</td>                                 
                                    <td><span class="label label-danger">Sin Matricula</span></td>
                                    <td>10 de Noviembre de 2016</td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'funcionarios/Index/funcionariosPerfil'?>'>
                                            <i class='pe-7s-id' style='font-size:28pt'></i>
                                        </a>
                                    </td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'funcionarios/Index/funcionariosModificar'?>'>
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
