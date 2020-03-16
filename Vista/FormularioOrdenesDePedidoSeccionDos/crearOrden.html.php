<!-- Start CARDS -->
<div class="container altura60px ocultarDisplayNone" id="SeccionDosOcultar" >
    <div class="card sombra borderGris">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <!--Color azul bonito #71DDFF-->
                    <a class="nav-link text-decoration-none text-dark" data-seccion="Recepcion" href="#" style="background-color: #BEEBC9 ; color: white;">Recepción</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-decoration-none text-dark" data-seccion="Ingreso/Salida" href="#">Ingreso/Salida</a>
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
            <div class="alertSCDos"></div>
            <!--End ALERT-->
            <!--Start INFORMACION INGRESO/SALIDA-->
            <div class="container">
                <div class="card font-md-size-tablets">
                    <h5 class="card-header font-md-size-title-tablets">INFORMACION INGRESO/SALIDA</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm ">
                                <span id="descripcionHoraDeEntrada">Hora de entrada*</span><br>
                                <input type="time" id="horaDeEntradaSCDos" name="horaDeEntradaSCDos" class="custom-select-sm form-control input-group" />
                            </div>
                            <div class="col-sm ">
                                <span id="descripcionHoraDeSalida">Hora de salida*</span><br>
                                <input type="time" id="horaDeSalidaSCDos" name="horaDeSalidaSCDos" class="custom-select-sm form-control input-group" />
                            </div>
                            <div class="col-sm ">
                                <span id="descripcionNumeracion">Numeracion*</span><br>
                                <input type="text" id="numeracionSCDos" name="numeracionSCDos" class="custom-select-sm form-control input-group" />
                            </div>
                            <div class="col-sm ">
                                <span id="descripcionSello">Sello*</span><br>
                                <input type="text" id="selloSCDos" name="selloSCDos" class="custom-select-sm form-control input-group" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 ">
                                <br>
                                <img src="../Vista/StyleIMG/passenger-1420429_960_720.png" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm ">
                                <br>
                                <div class="input-group mb-3">
                                    <div class="border form-control font-md-size-tablets">Luces internas</div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" value="1" id="lucesInternasSCDos" aria-label="Checkbox for following text input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="border form-control font-md-size-tablets">Luces externas</div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="lucesExternasSCDos" aria-label="Checkbox for following text input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="border form-control font-md-size-tablets">Apertura de puerta</div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="aperturaDePuertaSCDos" aria-label="Checkbox for following text input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="border form-control font-md-size-tablets">Pito</div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="pitoSCDos" aria-label="Checkbox for following text input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="border form-control font-md-size-tablets">Golpes</div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="golpesSCDos" aria-label="Checkbox for following text input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="border form-control font-md-size-tablets">Rayones</div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="rayonesSCDos" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---End INFORMACION INGRESO/SALIDA-->
            <!--Start Botones-->
            <div class="row container">
                <div class="col-sm-3">
                    <button type="button" id="saveSeccionDos" class="btn btn-azul btn-block ml-0 mt-2 font-size-14px">Guardar</button>
                </div>
                <div class="col-sm-5">
                    
                </div>
                <div class="col-sm-2 pt-2 flex-row-reverse">
                    <img src="../Vista/StyleIMG/Iconos/prev_previous.png" class="img-fluid float-right flechaSeccion OrdenDeTrabajoDos " id="AnteriorSeccion2" data-seccion="Recepcion" title="Anterior" >
                </div>
                <div class="col-sm-2 pt-2 flex-row-reverse">
                    <img src="../Vista/StyleIMG/Iconos/next_icon.png" class="img-fluid float-right flechaSeccion OrdenDeTrabajoDos ocultarDisplayNone" id="siguienteSeccion3" data-seccion="Materiales" title="Siguiente" >
                </div>
            </div>
            <!--End Botones-->
        </div>
    </div>
</div>
<div class="p-5" style="display: none" >
                
</div>
<!-- Start CARDS -->