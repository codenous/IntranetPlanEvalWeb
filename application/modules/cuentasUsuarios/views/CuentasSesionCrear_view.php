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
                                        <label>Educadoras de Párvulos</label>
                                        <select class="form-control">
                                            <option>Educadoras de Párvulos</option>
                                            <option>----------------------</option>
                                            <option>Marcela Durán Rojas</option>
                                            <option>Marcela Durán Rojas</option>
                                            <option>Marcela Durán Rojas</option>
                                            <option>Marcela Durán Rojas</option>
                                            <option>Marcela Durán Rojas</option>
                                        </select>
                                    </div>
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Crear Cuenta</button>
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
                                <h4 class="title">Listado de Cuentas Educadoras del Jardín</h4> 
                             </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <hr>
                <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th width='15%'>Rut</th>
                                <th width='25%'>Nombres</th>
                                <th width='20%'>Inicio Laboral</th>
                                <th width='10%'>Clave</th>
                                <th width='5%'>Estado</th>
                                <th width='5%'>Hab./Deshab.</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>11.222.333-4</td>
                                    <td>Marcela Durán Rojas</td>
                                    <td>25 de noviembre de 2015</td>
                                    <td>
                                        <span class="label label-info">predeterminada</span>
                                    </td>
                                    <td>
                                        <span class="label label-primary">activo</span>
                                    </td>
                                    <td class='text-center'>
                                        <center>
                                            <div class="flipswitch">
                                                <input type="checkbox" name="flipswitch1" class="flipswitch-cb" id="fs" checked>
                                                <label class="flipswitch-label" for="fs">
                                                    <div class="flipswitch-inner"></div>
                                                    <div class="flipswitch-switch"></div>
                                                </label>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.222.333-4</td>
                                    <td>Marcela Durán Rojas</td>
                                    <td>25 de noviembre de 2015</td>
                                    <td>
                                        <span class="label label-info">predeterminada</span>
                                    </td>
                                    <td>
                                        <span class="label label-danger">desactivado</span>
                                    </td>
                                    <td class='text-center'>
                                        <center>
                                            <div class="flipswitch">
                                                <input type="checkbox" name="flipswitch2" class="flipswitch-cb" id="fs2">
                                                <label class="flipswitch-label" for="fs2">
                                                    <div class="flipswitch-inner"></div>
                                                    <div class="flipswitch-switch"></div>
                                                </label>
                                            </div>
                                        </center>
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