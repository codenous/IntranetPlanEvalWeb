<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><?php echo $tituloMantenedor; ?></h4>
                    </div>
                    <hr>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>nombre unidad</label>
                                        <input type="text" class="form-control" value="mes del mar">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>duración semanas</label>
                                        <input type="number" min="1" max="4" class="form-control" value="2">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>mes</label>
                                        <select class="form-control">
                                            <option>Mes</option>
                                            <option>------------------</option>
                                            <option>Enero</option>
                                            <option selected>Febrero</option>
                                            <option>Marzo</option>
                                            <option>Abril</option>
                                            <option>Mayo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción Unidad Contenido</label>
                                        <textarea class="form-control" rows="5" value="">descripción de la unidad de contenido</textarea>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <hr>
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size:14pt;"></i> Agregar Unidad</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
        