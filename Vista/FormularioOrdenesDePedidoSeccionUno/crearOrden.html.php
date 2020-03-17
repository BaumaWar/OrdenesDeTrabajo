<!--Start CARDS-->
<?php date_default_timezone_set('America/Bogota'); $fecha_cre= date("Y-m-d");?>
<div class="container altura60px" id="SeccionUnoOcultar">
    <!--Id que es tomado de la seccion uno cuando se registra en la base de datos-->
    <input type="hidden" id="SeccionUnoGuardo" >
    <!--End id seccion uno-->
    <div class="card sombra borderGris">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active text-decoration-none text-dark" data-seccion="Recepcion" href="#">Recepción</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark" data-seccion="Ingreso/Salida" href="#">Ingreso/Salida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark" data-seccion="Materiales" href="#">Materiales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark" data-seccion="Observaciones" href="#">Observaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark" data-seccion="PruebaFinal" href="#">Prueba final</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none text-dark" data-seccion="Pago" href="#">Pago</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <!--Start ALERT-->
            <div class="alertSCUno"></div>
            <!--End ALERT-->
            <!--Start INFORMACION DEL VEHICULO-->
            <div class="container">
                <!--Start Contenido-->
                <div class="card font-md-size-tablets">
                    <h6 class="card-header font-md-size-title-tablets">INFORMACION VEHICULO</h6>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm ">
                                <span id="descripcionFecha">Fecha*</span><br>
                                <input readonly="" type="date" name="fecha" id="fechaSCUno" class="custom-select-sm form-control input-group" value="<?php echo $fecha_cre;?>"/>
                            </div>
                            <div class="col-sm " id="empresaSCUnoDIV">
                                <span id="descripcionEmpresa">Empresa*</span><br>
                                <select name="empresa" id="empresaSCUno" data-live-search="true" class="selectpicker bootstrap-select custom-select-sm form-control show-tick" data-size="4">
                                    <option value="#" class="options">Seleccion de empresa</option>
                                    <option value="0000-fusacatan" class="options">fusacatan</option>
                                    <option value="1111-motebello" class="options">motebello</option>
                                    <option value="2222-cootranshuila" class="options">cootranshuila</option>
                                    <option value="3333-flotahuila" class="options">flotahuila</option>
                                    <option value="4444-cootrasneiva" class="options">cootrasneiva</option>
                                    <option value="5555-lusitania" class="options">lusitania</option>
                                </select>
                            </div>
                            <div class="col-sm " id="placaSCUnoDIV">
                                <span id="descripcionPlaca">Placa - Numero interno*</span><br>
                                <select name="placaVehiculo" id="placaSCUno" data-live-search="true" class="selectpicker custom-select-sm form-control input-group" data-size="4" >
                                    <option value="#" class="options">Seleccion de placa</option>
                                    <option value="queso-0000-0" class="options">queso-0000</option>
                                    <option value="queso-1111-1" class="options">queso-1111</option>
                                    <option value="queso-2222-2" class="options">queso-2222</option>
                                    <option value="queso-3333-3" class="options">queso-3333</option>
                                    <option value="queso-4444-4" class="options">queso-4444</option>
                                    <option value="queso-5555-5" class="options">queso-5555</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm " id="nombreCompletoVehiculoSCUnoDIV">
                                <span id="descripcionNombreCompletoVehiculo">Nombre completo*</span><br>
                                <input type="text" name="nombreCompleto" id="nombreCompletoVehiculoSCUno" class="custom-select-sm form-control input-group" />
                            </div>
                            <div class="col-sm " id="numeroCelularVehiculoSCUnoDIV">
                                <span id="descripcionNumeroCelularVehiculo">Numero de celular</span><br>
                                <input type="text" name="numeroCelular" id="numeroCelularVehiculoSCUno" class="custom-select-sm form-control input-group" />
                            </div>
                            <div class="col-sm-3" id="versionSCUnoDIV">
                                <span id="descripcionVersion">Version*</span><br>
                                <select name="version" id="versionSCUno" data-live-search="true" class="selectpicker custom-select-sm form-control input-group" data-size="4" >
                                    <option value="#" class="options">Seleccion de version</option>
                                    <option value="0000" class="options">0000</option>
                                    <option value="1111" class="options">1111</option>
                                    <option value="2222" class="options">2222</option>
                                    <option value="3333" class="options">3333</option>
                                    <option value="4444" class="options">4444</option>
                                    <option value="5555" class="options">5555</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Contenido-->
            </div>
            <!--End INFORMACION DEL VEHICULO-->
            <!--Start INFORMACION PROPIETARIO-->
            <div class="container pt-1">
                <div class="card font-md-size-tablets">
                    <h5 class="card-header font-md-size-title-tablets">INFORMACION PROPIETARIO</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8" id="nombreCompletoPropietarioSCUnoDIV">
                                <span id="descripcionNombreCompletoPropietario">Nombre completo*</span><br>
                                <input type="text" name="nombrePropietario" id="nombreCompletoPropietarioSCUno" class="custom-select-sm form-control input-group" />
                            </div>
                            <div class="col-sm " id="numeroCelularPropietarioSCUnoDIV">
                                <span id="descripcionNumeroCelularPropietario">Numero de celular*</span><br>
                                <input type="text" name="numeroCelularPropietario" id="numeroCelularPropietarioSCUno" class="custom-select-sm form-control input-group" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End INFORMACION PROPIETARIO-->
            <!--Start Botones-->
            <div class="row container">
                <div class="col-sm-3" id="saveSeccionUnoDIV">
                    <button type="button" id="saveSeccionUno" class="btn btn-azul btn-block ml-0 mt-2 font-size-14px " >Guardar</button>
                </div>
                <div class="col-sm-3" id="editPostSaveSeccionUnoDIV" >
                    <button type="button" id="editPostSaveSeccionUno" class="btn btn-azul btn-block ml-0 mt-2 font-size-14px ocultarDisplayNone" >Editar</button>
                </div>
                <div class="col-sm-2">
                    
                </div>
                <div class="col-sm-2 pt-2 flex-row-reverse">
                    
                </div>
                <div class="col-sm-2 pt-2 flex-row-reverse">
                    <img src="../Vista/StyleIMG/Iconos/next_icon.png" class="img-fluid float-right flechaSeccion OrdenDeTrabajoUno ocultarDisplayNone" id="siguienteSeccion2" data-seccion="Ingreso/Salida" title="Siguiente" >
                </div>
                    
            </div>
            <!--End Botones-->
        </div>
    </div>
</div>
<!--End CARDS-->
<div class="p-5" style="display: none;">
                
</div>
