$(document).ready(function(){
    /*
     JQuery Guardar Toma los datos de la seccion uno y envia al controladorPHP OrdenSeccionUno.Los datos son guardados en la base de datos.
    */
    $(document).on("click","#saveSeccionUno",function(){
        /*Start capturar datos de los input*/
        var fecha= $('#fechaSCUno').val();
        var empresa= $('#empresaSCUno').val();
        var placa= $('#placaSCUno').val();
        var nombreCompletoVehiculo= $('#nombreCompletoVehiculoSCUno').val();
        var numeroCelularVehiculo= $('#numeroCelularVehiculoSCUno').val();
        var version= $('#versionSCUno').val();
        var nombreCompletoPropietario= $('#nombreCompletoPropietarioSCUno').val();
        var numeroCelularPropietario= $('#numeroCelularPropietarioSCUno').val();
        var urlDestino="ajax.php?carpeta=ControladorPHP&modulo=OrdenSeccionUno&controlador=OrdenSeccionUno&funcion=crearPostInsert";
        /*End capturar datos de los input*/
        /*Start Expresiones irregulares*/
        var patt1 = new RegExp(/^[\S][A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/g);
        var patt2 = new RegExp(/^[\S][A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/g);
        var patt3 = new RegExp(/^[\S][0-9\s]+$/g);
        var patt4 = new RegExp(/^[\S][0-9\s]+$/g);
        
        var nombreCompletoVehiculoPCRE= patt1.test(nombreCompletoVehiculo);
        var nombreCompletoPropietarioPCRE= patt2.test(nombreCompletoPropietario);
        var numeroCelularVehiculoPCRE= patt3.test(numeroCelularVehiculo);
        var numeroCelularPropietarioPCRE= patt4.test(numeroCelularPropietario);
        /*End Expresiones irregulares*/
        if((empresa!=="#")&&(placa!=="#")&&(nombreCompletoPropietario)&&(nombreCompletoVehiculo)&&(numeroCelularPropietario)&&(numeroCelularVehiculo)&&(version!=="#")&&(fecha!=="#")){
            if((nombreCompletoPropietarioPCRE)&&(nombreCompletoVehiculoPCRE)&&(numeroCelularPropietarioPCRE)&&(numeroCelularVehiculoPCRE)){

                $.ajax({
                    url:urlDestino,
                    data:"fecha="+fecha+"&empresa="+empresa+"&placa="+placa+"&nombreCompletoVehiculo="+nombreCompletoVehiculo+"&numeroCelularVehiculo="
                            +numeroCelularVehiculo+"&version="+version+"&nombreCompletoPropietario="+nombreCompletoPropietario+"&numeroCelularPropietario="+numeroCelularPropietario,
                    type:"POST",
                    success: function(ultimoIDArrayAsociativo){
                        
                        var arrayAsociativo= JSON.parse(ultimoIDArrayAsociativo);
                        var idUltimo= arrayAsociativo['ultimoID'];
                        
                        if(idUltimo){
                            
                            $('#SeccionUnoGuardo').val(idUltimo);
                            console.log("El ID al guardar la seccion uno es : "+idUltimo);

                            $('#descripcionNombreCompletoPropietario').removeClass('tomatoColor');
                            $('#descripcionNombreCompletoVehiculo').removeClass('tomatoColor');
                            $('#descripcionFecha').removeClass('tomatoColor');
                            $('#descripcionEmpresa').removeClass('tomatoColor');
                            $('#descripcionPlaca').removeClass('tomatoColor');
                            $('#descripcionNumeroCelularVehiculo').removeClass('tomatoColor');
                            $('#descripcionVersion').removeClass('tomatoColor');
                            $('#descripcionNumeroCelularPropietario').removeClass('tomatoColor');

                            /*Star Ocultar se remueve de la flecha de siquiguiente (IngresoSalida)*/
                            $('#siguienteSeccion2').removeClass('ocultarDisplayNone');
                            /*End (IngresoSalida)*/
                            /*Star ¡IMPORTANTE! input ReadOnly seccion uno*/
                            
                            $('#empresaSCUnoDIV').replaceWith('<div class="col-sm" id="empresaSCUnoDIV">\n\
                                                            <span id="descripcionEmpresa">Empresa*</span><br>\n\
                                                            <input value="'+arrayAsociativo['empresa']+'" readonly type="text" class="custom-select-sm form-control input-group" />\n\
                                                            </div>');
                            $('#placaSCUnoDIV').replaceWith('<div class="col-sm" id="placaSCUnoDIV">\n\
                                                            <span id="descripcionEmpresa">placa*</span><br>\n\
                                                            <input value="'+arrayAsociativo['placa']+'" readonly type="text" class="custom-select-sm form-control input-group" />\n\
                                                            </div>');
                            $('#versionSCUnoDIV').replaceWith('<div class="col-sm" id="versionSCUnoDIV">\n\
                                                            <span id="descripcionEmpresa">Version*</span><br>\n\
                                                            <input value="'+arrayAsociativo['version']+'" readonly type="text" class="custom-select-sm form-control input-group" />\n\
                                                            </div>');
                            $('#nombreCompletoVehiculoSCUnoDIV').replaceWith('<div class="col-sm" id="nombreCompletoVehiculoSCUnoDIV">\n\
                                                            <span id="descripcionNombreCompletoVehiculo">Nombre completo*</span><br>\n\
                                                            <input value="'+arrayAsociativo['nombreVehiculo']+'" readonly type="text" name="nombreCompleto" id="nombreCompletoVehiculoSCUno" class="custom-select-sm form-control input-group" />\n\
                                                            </div>');
                            $('#numeroCelularVehiculoSCUnoDIV').replaceWith('<div class="col-sm " id="numeroCelularVehiculoSCUnoDIV">\n\
                                                            <span id="descripcionNumeroCelularVehiculo">Numero de celular*</span><br>\n\
                                                            <input value="'+arrayAsociativo['numeroCeularVehiculo']+'" readonly type="text" name="numeroCelular" id="numeroCelularVehiculoSCUno" class="custom-select-sm form-control input-group" />\n\
                                                            </div>');
                            $('#nombreCompletoPropietarioSCUnoDIV').replaceWith('<div class="col-sm-8" id="nombreCompletoPropietarioSCUnoDIV">\n\
                                                            <span id="descripcionNombreCompletoPropietario">Nombre completo*</span><br>\n\
                                                            <input value="'+arrayAsociativo['nombrePropietario']+'" readonly type="text" name="nombrePropietario" id="nombreCompletoPropietarioSCUno" class="custom-select-sm form-control input-group" />\n\
                                                            </div>');
                            $('#numeroCelularPropietarioSCUnoDIV').replaceWith('<div class="col-sm " id="numeroCelularPropietarioSCUnoDIV">\n\
                                                            <span id="descripcionNumeroCelularPropietario">Numero de celular*</span><br>\n\
                                                            <input value="'+arrayAsociativo['numeroCelularVehiculo']+'" readonly type="text" name="numeroCelularPropietario" id="numeroCelularPropietarioSCUno" class="custom-select-sm form-control input-group" />\n\
                                                            </div>');
                            
                            /*End ReadOnly*/
                            /*Star ¡IMPORTANTE! Se remplaza el boton de guardar por un div similar pero inactivo */
                            $('#saveSeccionUnoDIV').replaceWith('<div class="col-sm-3" id="saveSeccionUnoDIV">\n\
                                                            <div class="btn btn-segundo btn-block ml-0 mt-2 font-size-14px" >Guardar</div>\n\
                                                            </div>');
                            /*End Boton de edicion*/
                            /*Start ¡IMPORTANTE! mostrar boton de editar */
                            $('#editPostSaveSeccionUno').removeClass('ocultarDisplayNone');
                            /*End mostrar boton de editar */
                            /*Start Alert temporizado*/
                            $('.alertSCUno').html('<div class="alert eliminarEn5s alert-success alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                                        Registro Exitoso\n\
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                            <span aria-hidden="true">&times;\n\
                                                            </span>\n\
                                                        </button>\n\
                                                    </div>');
                            setTimeout(function(){$('.eliminarEn5s').slideUp('slow', function(){$(this).remove();})},5000);
                            /*End Alert temporizado*/
                        }else{
                            /*Start Alert temporizado*/
                            $('.alertSCUno').html('<div class="alert eliminarEn10s alert-danger alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                                        Ha ocurrido un error Fatal!.\n\
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                            <span aria-hidden="true">&times;\n\
                                                            </span>\n\
                                                        </button>\n\
                                                    </div>');
                            setTimeout(function(){$('.eliminarEn10s').slideUp('slow', function(){$(this).remove();})},10000);
                            /*End Alert temporizado*/
                        }
                        
                    }
                });

            }else{
                /*Start Alert temporizado*/
                $('.alertSCUno').html('<div class="alert eliminarEn5s alert-info alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                            Los datos que ingreso no corresponden al formato que le es solicitado.\n\
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                <span aria-hidden="true">&times;\n\
                                                </span>\n\
                                            </button>\n\
                                        </div>');
                /*End Alert temporizado*/
                /*Start removeClass TOMATOCOLOR*/
                $('#descripcionVersion').removeClass('tomatoColor');
                $('#descripcionPlaca').removeClass('tomatoColor');
                $('#descripcionFecha').removeClass('tomatoColor');
                $('#descripcionEmpresa').removeClass('tomatoColor');
                /*End removeClass TOMATOCOLOR*/
                if(nombreCompletoPropietarioPCRE){
                    $('#descripcionNombreCompletoPropietario').removeClass('tomatoColor');
                }else{
                    $('#descripcionNombreCompletoPropietario').addClass('tomatoColor');
                }
                
                if(nombreCompletoVehiculoPCRE){
                    $('#descripcionNombreCompletoVehiculo').removeClass('tomatoColor');
                }else{
                    $('#descripcionNombreCompletoVehiculo').addClass('tomatoColor');
                }
                
                if(numeroCelularVehiculoPCRE){
                    $('#descripcionNumeroCelularVehiculo').removeClass('tomatoColor');
                }else{
                    $('#descripcionNumeroCelularVehiculo').addClass('tomatoColor');
                }
                
                if(numeroCelularPropietarioPCRE){
                    $('#descripcionNumeroCelularPropietario').removeClass('tomatoColor');
                }else{
                    $('#descripcionNumeroCelularPropietario').addClass('tomatoColor');
                }
                /*Start Alert temporizado*/
                setTimeout(function(){$('.eliminarEn5s').slideUp('slow', function(){$(this).remove();})},8000);
                /*End Alert temporizado*/
            }
        }else{
            /*Start Alert temporizado*/
            $('.alertSCUno').html('<div class="alert eliminarEn5s alert-info alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                            Todos los campos con * son obligatorios.\n\
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                <span aria-hidden="true">&times;\n\
                                                </span>\n\
                                            </button>\n\
                                        </div>');
            setTimeout(function(){$('.eliminarEn5s').slideUp('slow', function(){$(this).remove();})},8000);
            /*End Alert temporizado*/
            if(nombreCompletoPropietario){
                $('#descripcionNombreCompletoPropietario').removeClass('tomatoColor');
            }else{
                $('#descripcionNombreCompletoPropietario').addClass('tomatoColor');
            }
            if(nombreCompletoVehiculo){
                $('#descripcionNombreCompletoVehiculo').removeClass('tomatoColor');
            }else{
                $('#descripcionNombreCompletoVehiculo').addClass('tomatoColor');
            }
            if(fecha){
                $('#descripcionFecha').removeClass('tomatoColor');
            }else{
                $('#descripcionFecha').addClass('tomatoColor');
            }
            if(empresa!=="#"){
                $('#descripcionEmpresa').removeClass('tomatoColor');
            }else{
                $('#descripcionEmpresa').addClass('tomatoColor');
            }
            if(placa!=="#"){
                $('#descripcionPlaca').removeClass('tomatoColor');
            }else{
                $('#descripcionPlaca').addClass('tomatoColor');
            }
            if(numeroCelularVehiculo){
                $('#descripcionNumeroCelularVehiculo').removeClass('tomatoColor');
            }else{
                $('#descripcionNumeroCelularVehiculo').addClass('tomatoColor');
            }
            if(version!=="#"){
                $('#descripcionVersion').removeClass('tomatoColor');
            }else{
                $('#descripcionVersion').addClass('tomatoColor');
            }
            if(numeroCelularPropietario){
                $('#descripcionNumeroCelularPropietario').removeClass('tomatoColor');
            }else{
                $('#descripcionNumeroCelularPropietario').addClass('tomatoColor');
            }
            
        }
        
    });
    /*
     JQuery Editar despues de Guardar Toma los datos de la seccion uno y envia al controladorPHP OrdenSeccionUno. Proceso previo a la edccion del formulario.
    */
    $(document).on("click","#editPostSaveSeccionUno",function(){
        /*Start Se quita la propieda readonly de las caja de texto bloquedas*/
        $('#nombreCompletoVehiculoSCUno').removeAttr('readonly');
        $('#numeroCelularVehiculoSCUno').removeAttr('readonly');
        $('#nombreCompletoPropietarioSCUno').removeAttr('readonly');
        $('#numeroCelularPropietarioSCUno').removeAttr('readonly');
        /*End*/
        /*Start ¡IMPORTANTE! Boton bloqueado es removido por un boton activo*/
        $('#saveSeccionUnoDIV').replaceWith('<div class="col-sm-3" id="savePostEditPostSaveSeccionUnoDIV">\n\
                                            <button type="button" id="savePostEditPostSaveSeccionUno" class="btn btn-azul btn-block ml-0 mt-2 font-size-14px" >Guardar</button>\n\
                                            </div>');
        /*End*/
        /*Start ¡IMPORTANTE! cambia el boton de editar por uno desactivado*/
        //$('#editPostSaveSeccionUno').removeClass('btn-azul').addClass('btn-segundo').removeAttr('id');
        $('#editPostSaveSeccionUnoDIV').replaceWith('<div class="col-sm-3" id="editPostSaveSeccionUnoDIV" >\n\
                                            <div class="btn btn-segundo btn-block ml-0 mt-2 font-size-14px" >Editar</div>\n\
                                            </div>');
        /*End*/
        /*Start ¡IMPORTANTE!*/
        $('#siguienteSeccion2').addClass('ocultarDisplayNone');
        /*End*/
    });
    /*
     JQuery Editar despues de Guardar Toma los datos de la seccion uno y envia al controladorPHP OrdenSeccionUno. los datos son actualizados en la base de datos.
    */
    $(document).on("click","#savePostEditPostSaveSeccionUno",function(){
        var idSeccionUno= $('#SeccionUnoGuardo').val();
        var nombreCompletoVehiculo= $('#nombreCompletoVehiculoSCUno').val();
        var numeroCelularVehiculo= $('#numeroCelularVehiculoSCUno').val();
        var nombreCompletoPropietario= $('#nombreCompletoPropietarioSCUno').val();
        var numeroCelularPropietario= $('#numeroCelularPropietarioSCUno').val();
        var urlDestino="ajax.php?carpeta=ControladorPHP&modulo=OrdenSeccionUno&controlador=OrdenSeccionUno&funcion=editarPostInsert";
        //alert("Los datos que llegaron son : "+nombreVehiculo+" "+celularVehiculo+" "+nombrePropietario+" "+celularPropietario+"");
        /*Start Expresiones irregulares*/
        var patt1 = new RegExp(/^[\S][A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/g);
        var patt2 = new RegExp(/^[\S][A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/g);
        var patt3 = new RegExp(/^[\S][0-9\s]+$/g);
        var patt4 = new RegExp(/^[\S][0-9\s]+$/g);
        
        var nombreCompletoVehiculoPCRE= patt1.test(nombreCompletoVehiculo);
        var nombreCompletoPropietarioPCRE= patt2.test(nombreCompletoPropietario);
        var numeroCelularVehiculoPCRE= patt3.test(numeroCelularVehiculo);
        var numeroCelularPropietarioPCRE= patt4.test(numeroCelularPropietario);
        /*End Expresiones irregulares*/
        
        if( (nombreCompletoVehiculo)&&(numeroCelularVehiculo)&&(nombreCompletoPropietario)&&(numeroCelularPropietario) ){
            
            if( (nombreCompletoVehiculoPCRE)&&(nombreCompletoPropietarioPCRE)&&(numeroCelularVehiculoPCRE)&&(numeroCelularPropietarioPCRE) ){
                
                if(idSeccionUno){
                    
                    $.ajax({
                        url:urlDestino,
                        data:"nombreCompletoVehiculo="+nombreCompletoVehiculo+"&numeroCelularVehiculo="+numeroCelularVehiculo+"&nombreCompletoPropietario="+nombreCompletoPropietario+"&numeroCelularPropietario="+numeroCelularPropietario+"&idSeccionUno="+idSeccionUno,
                        type:"POST",
                        success: function(){

                            /*Start Alert temporizado*/
                            $('.alertSCUno').html('<div class="alert eliminarEn8s alert-success alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                                            Ediccion exitosa.\n\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                                <span aria-hidden="true">&times;\n\
                                                                </span>\n\
                                                            </button>\n\
                                                        </div>');
                            setTimeout(function(){$('.eliminarEn8s').slideUp('slow', function(){$(this).remove();})},8000);
                            /*End Alert temporizado*/

                            /*Start !IMPORTANTE¡ Se rempaza el boton de guardar por un boton desativado*/
                            $('#savePostEditPostSaveSeccionUnoDIV').replaceWith('<div class="col-sm-3" id="saveSeccionUnoDIV">\n\
                                                                <div class="btn btn-segundo btn-block ml-0 mt-2 font-size-14px" >Guardar</div>\n\
                                                                </div>');
                            /*End !IMPORTANTE¡*/
                            /*Star !IMPORTANTE Se remplaza el botn de editar desativado por uno activado¡*/
                            $('#editPostSaveSeccionUnoDIV').replaceWith('<div class="col-sm-3" id="editPostSaveSeccionUnoDIV" >\n\
                                                                <button type="button" id="editPostSaveSeccionUno" class="btn btn-azul btn-block ml-0 mt-2 font-size-14px" >Editar</button>\n\
                                                                </div>');
                            /*End !IMPORTANTE¡*/
                            /*Start*/
                            $('#siguienteSeccion2').removeClass('ocultarDisplayNone');
                            /*End*/
                            
                        }
                    });
                    
                }else{
                    
                    /*Start Alert temporizado*/
                    $('.alertSCUno').html('<div class="alert eliminarEn10s alert-danger alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                                Ha ocurrido un error Fatal!.\n\
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                    <span aria-hidden="true">&times;\n\
                                                    </span>\n\
                                                </button>\n\
                                            </div>');
                    setTimeout(function(){$('.eliminarEn10s').slideUp('slow', function(){$(this).remove();})},10000);
                    /*End Alert temporizado*/
                    
                }
            }else{
                
                /*Start Alert temporizado*/
                $('.alertSCUno').html('<div class="alert eliminarEn8s alert-info alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                            Los datos que ingreso no corresponden al formato que le es solicitado.\n\
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                <span aria-hidden="true">&times;\n\
                                                </span>\n\
                                            </button>\n\
                                        </div>');
                /*End Alert temporizado*/
                
                if(nombreCompletoPropietarioPCRE){
                    $('#descripcionNombreCompletoPropietario').removeClass('tomatoColor');
                }else{
                    $('#descripcionNombreCompletoPropietario').addClass('tomatoColor');
                }
                
                if(nombreCompletoVehiculoPCRE){
                    $('#descripcionNombreCompletoVehiculo').removeClass('tomatoColor');
                }else{
                    $('#descripcionNombreCompletoVehiculo').addClass('tomatoColor');
                }
                
                if(numeroCelularVehiculoPCRE){
                    $('#descripcionNumeroCelularVehiculo').removeClass('tomatoColor');
                }else{
                    $('#descripcionNumeroCelularVehiculo').addClass('tomatoColor');
                }
                
                if(numeroCelularPropietarioPCRE){
                    $('#descripcionNumeroCelularPropietario').removeClass('tomatoColor');
                }else{
                    $('#descripcionNumeroCelularPropietario').addClass('tomatoColor');
                }
                /*Start Alert temporizado*/
                setTimeout(function(){$('.eliminarEn8s').slideUp('slow', function(){$(this).remove();})},8000);
                /*End Alert temporizado*/
                
            }
            
        }else{
            
            /*Start Alert temporizado*/
            $('.alertSCUno').html('<div class="alert eliminarEn8s alert-info alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                            Todos los campos con * son obligatorios.\n\
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                <span aria-hidden="true">&times;\n\
                                                </span>\n\
                                            </button>\n\
                                        </div>');
            setTimeout(function(){$('.eliminarEn8s').slideUp('slow', function(){$(this).remove();})},8000);
            /*End Alert temporizado*/
            
            if(nombreCompletoPropietario){
                $('#descripcionNombreCompletoPropietario').removeClass('tomatoColor');
            }else{
                $('#descripcionNombreCompletoPropietario').addClass('tomatoColor');
            }
            if(nombreCompletoVehiculo){
                $('#descripcionNombreCompletoVehiculo').removeClass('tomatoColor');
            }else{
                $('#descripcionNombreCompletoVehiculo').addClass('tomatoColor');
            }            
            if(numeroCelularVehiculo){
                $('#descripcionNumeroCelularVehiculo').removeClass('tomatoColor');
            }else{
                $('#descripcionNumeroCelularVehiculo').addClass('tomatoColor');
            }
            if(numeroCelularPropietario){
                $('#descripcionNumeroCelularPropietario').removeClass('tomatoColor');
            }else{
                $('#descripcionNumeroCelularPropietario').addClass('tomatoColor');
            }
            
        }
        
    });
    
});