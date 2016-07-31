<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><?php echo $tituloMantenedor; ?></h4>
                    </div>
                    <div class="text-center" style='background:#EFF8FB'>
                        <hr>
                            <h5 class="title">1. Datos Personales del Párvulo y sus Padres</h5>
                        <hr>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>rut párvulo</label>
                                    <input type="text" class="form-control" placeholder="11.222.333-4">
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-offset-7">
                                <div class="form-group">
                                    <label>nro. matrícula</label>
                                    <input type="text" class="form-control" value="1" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>primer nombre</label>
                                    <input type="text" class="form-control" placeholder="Rafael">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>segundo nombre</label>
                                    <input type="text" class="form-control" placeholder="Alejandro">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>apellido paterno</label>
                                    <input type="text" class="form-control" placeholder="Vega">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>apellido materno</label>
                                    <input type="text" class="form-control" placeholder="Matamala">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>fecha nacimiento</label>
                                    <input type="date" class="form-control" value="<?php echo date('Y-m-d')?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>edad</label>
                                    <input type="text" class="form-control" value="0 años, 0 meses" disabled>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Calle</label>
                                    <input type="text" class="form-control" placeholder="Paicaví">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label>Nro.</label>
                                    <input type="text" class="form-control" placeholder="4568">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Sector</label>
                                    <input type="text" class="form-control" placeholder="Concepción Centro">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Comuna</label>
                                    <select class="form-control">
                                        <option> Comunas</option>
                                        <option>------------------</option>
                                        <option> Talcahuano</option>
                                        <option> Concepción</option>
                                        <option> Chiguayante</option>
                                        <option> Tomé</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>rut padre</label>
                                    <input type="text" class="form-control" placeholder="11.222.333-4">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>primer nombre</label>
                                    <input type="text" class="form-control" placeholder="Rafael">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>segundo nombre</label>
                                    <input type="text" class="form-control" placeholder="Alejandro">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>apellido paterno</label>
                                    <input type="text" class="form-control" placeholder="Vega">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>apellido materno</label>
                                    <input type="text" class="form-control" placeholder="Castro">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>rut madre</label>
                                    <input type="text" class="form-control" placeholder="11.222.333-4">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>primer nombre</label>
                                    <input type="text" class="form-control" placeholder="Daniela">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>segundo nombre</label>
                                    <input type="text" class="form-control" placeholder="Elizabeth">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>apellido paterno</label>
                                    <input type="text" class="form-control" placeholder="Matamala">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>apellido materno</label>
                                    <input type="text" class="form-control" placeholder="Jofré">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label>lugar trabajo padre</label>
                                    <input type="text" class="form-control" placeholder="empresas x">
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label>lugar trabajo madre</label>
                                    <input type="text" class="form-control" placeholder="empresas y">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <div class="form-group">
                                    <label>En caso de emergencia avisar a 1</label>
                                    <input type="text" class="form-control" placeholder="mamá al fono 22334455">
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="form-group">
                                    <label>En caso de emergencia avisar a 2</label>
                                    <input type="text" class="form-control" placeholder="papá al fono 33445566">
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="form-group">
                                    <label>nombre pediatra</label>
                                    <input type="text" class="form-control" placeholder="Patricio Martinez">
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="form-group">
                                    <label>fono pediatra</label>
                                    <input type="text" class="form-control" placeholder="22334455">
                                </div>
                            </div>  
                        </div>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <label>persona o personas que pueden retirar al párvulo</label>
                                    <input type="text" class="form-control" placeholder="mamá, abuela, abuelo, papá">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style='background:#EFF8FB'>
                        <hr>
                            <h5 class="title">2. Antecedentes de Salud</h5>
                        <hr>
                    </div>
                    <div class='content'>
                        <div class="row">
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <label>Enfermedades que ha padecido el párvulo</label>
                                    <input type="text" class="form-control" placeholder="ninguna">
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <label>alergias que padece el párvulo</label>
                                    <input type="text" class="form-control" placeholder="ninguna">
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <label>alimentos que rechaza el párvulo</label>
                                    <input type="text" class="form-control" placeholder="ninguna">
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <label>rito para dormir</label>
                                    <input type="text" class="form-control" placeholder="ninguna">
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label>leche</label>
                                    <input type="text" class="form-control" placeholder="leche con nestúm">
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label>jugos</label>
                                    <input type="text" class="form-control" placeholder="si de todos los sabores">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style='background:#EFF8FB'>
                        <hr>
                            <h5 class="title">3. Datos Generales</h5>
                        <hr>
                    </div>
                    <div class='content'>
                        <div class="row">
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <label>nombre empresa</label>
                                    <input type="text" class="form-control" placeholder="empresa x123 concepción">
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="form-group">
                                    <label>fecha ingreso</label>
                                    <input type="date" class="form-control" value="<?php echo date('Y-m-d')?>">
                                </div>
                            </div>
                            <div class='col-md-5'>
                                <div class="form-group">
                                    <label>jornada</label>
                                    <select class="form-control">
                                        <option> Jornadas del Jardín</option>
                                        <option>------------------</option>
                                        <option> Media Jornada</option>
                                        <option> Media Jornada Especial</option>
                                        <option> Jornada Completa Jardín Infantil</option>
                                        <option> Jornada Completa Especial Sala Cuna</option>
                                        <option> Jornada Completa Especial con Sábados</option>
                                        <option> Jornada Completa Especial con Sábados, Domingos y Festivos</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-md-2'>
                                <div class="form-group">
                                    <label>horario</label>
                                    <input type="text" class="form-control" value="08:00 - 19:30" disabled>
                                </div>
                            </div>
                            <div class='col-md-2'>
                                <div class="form-group">
                                    <label>valor matricula</label>
                                    <input type="text" class="form-control" value="$ 250.000" disabled>
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <label>alimentación</label>
                                    <input type="text" class="form-control" value="Desayuno - Almuerzo - Once - Jugos - Leches" disabled>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                    <div class='content'>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size:14pt;"></i> Registrar Matricula</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        