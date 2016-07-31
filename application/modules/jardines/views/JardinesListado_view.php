<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="title"><?php echo $tituloMantenedor?></h4> 
                            </div>
                        </div>     
                    </div>
                    <hr>
                    <div class='col-lg-12'>
                        <div class='pull-right'>
                            <a href="<?php echo base_url().'jardines/Index/jardinesIngresar'?>">
                            <button class="btn btn-warning pull-right btn-naranjo">Registro Jardín</button>
                            </a>
                            <hr>
                        </div>
                    </div>
                    <div class="header">
                        <br><br>
                    </div>
                    <div class="content table-responsive table-full-width">
                        
                        <table class="table table-hover table-striped">
                            <thead>
                                <th width='10%'>id jardín</th>
                                <th width='35%'>nombre jardín</th>
                                <th width='20%'>comuna</th>
                                <th width='20%'>fecha registro</th>
                                <th width='5%'></th>
                                <th width='5%'></th>
                                <th width='5%'></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Jardín Infantil El Principito</td>
                                    <td>Concepción</td>
                                    <td>10 de Noviembre de 2016</td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'jardines/Index/jardinPerfil'?>'>
                                            <i class='pe-7s-id' style='font-size:28pt'></i>
                                        </a>
                                    </td>
                                    <td class='text-center'>
                                        <a href='<?php echo base_url().'jardines/Index/jardinesModificar'?>'>
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
        