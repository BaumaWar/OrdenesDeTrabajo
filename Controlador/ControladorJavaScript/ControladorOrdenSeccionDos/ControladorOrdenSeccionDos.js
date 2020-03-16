$(document).ready(function(){
    /*
        JQuery Toma los datos de la seccion dos y envia al controladorPHP OrdenSeccionDos
    */
    $(document).on("click","#saveSeccionDos",function(){
        var horaDeEntrada= $('#horaDeEntradaSCDos').val();
        var horaDeSalida= $('#horaDeSalidaSCDos').val();
        var numeracion= $('#numeracionSCDos').val();
        var sello= $('#selloSCDos').val();
        
        /* ID de la seccion uno registrada */
        var seccionUnoId= $('#SeccionUnoGuardo').val();
        /* End */
        
        /*Datos de los checkbox*/
        var lucesInternas= 0;
        if($('#lucesInternasSCDos').is(':checked')){
            lucesInternas= 1;
        }
        var lucesExternas= 0;
        if($('#lucesExternasSCDos').is(':checked')){
            lucesExternas= 1;
        }
        var aperturaDePuerta= 0;
        if ($('#aperturaDePuertaSCDos').is(':checked')) {
            aperturaDePuerta= 1;
        }
        var pito= 0; 
        if($('#pitoSCDos').is(':checked')){
            pito= 1;
        }
        var golpes= 0;
        if($('#golpesSCDos').is(':checked')){
            golpes= 1;
        }
        var rayones= 0;
        if($('#rayonesSCDos').is(':checked')){
            rayones= 1;
        }
        
        var urlDestino= "ajax.php?carpeta=ControladorPHP&modulo=OrdenSeccionDos&controlador=OrdenSeccionDos&funcion=crearPostInsert";
        
        if ((horaDeEntrada)&&(horaDeSalida)&&(numeracion)&&(sello)) {
            
            var patt1 = new RegExp(/^[\S][0-9\s]+$/g);
            var patt2 = new RegExp(/^[\S][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ\s]+$/g);
            
            var numeracionPCRE= patt1.test(numeracion);
            var selloPCRE= patt2.test(sello);
            
            if ((numeracionPCRE)&&(selloPCRE)) {
                
                if(seccionUnoId){
                    
                    $.ajax({
                        url:urlDestino,
                        data:"horaDeEntrada="+horaDeEntrada+"&horaDeSalida="+horaDeSalida+"&numeracion="+numeracion+"&sello="+sello+"&lucesInternas="+lucesInternas+"&lucesExternas="+lucesExternas+"&aperturaDePuerta="+aperturaDePuerta+"&pito="+pito+"&golpes="+golpes+"&rayones="+rayones+"&seccionUnoId="+seccionUnoId,
                        type:"POST",
                        success: function(){

                            $('#descripcionHoraDeEntrada').removeClass('tomatoColor');
                            $('#descripcionHoraDeSalida').removeClass('tomatoColor');
                            $('#descripcionNumeracion').removeClass('tomatoColor');
                            $('#descripcionSello').removeClass('tomatoColor');

                            $('.alertSCDos').html('<div class="alert eliminarEn5s alert-success alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                                                Registro Exitoso\n\
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                                    <span aria-hidden="true">&times;\n\
                                                                    </span>\n\
                                                                </button>\n\
                                                            </div>');
                            setTimeout(function(){$('.eliminarEn5s').slideUp('slow', function(){$(this).remove();})},5000);

                        }
                    });
                    
                }else{
                    
                    $('.alertSCDos').html('<div class="alert eliminarEn10s alert-danger alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                                                Ha ocurrido un error FATAL!.\n\
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                                    <span aria-hidden="true">&times;\n\
                                                                    </span>\n\
                                                                </button>\n\
                                                            </div>');
                            setTimeout(function(){$('.eliminarEn10s').slideUp('slow', function(){$(this).remove();})},10000);
                    
                }
                
            } else {
                
                $('#descripcionHoraDeEntrada').removeClass('tomatoColor');
                $('#descripcionHoraDeSalida').removeClass('tomatoColor');
                
                if (numeracionPCRE){
                    $('#descripcionNumeracion').removeClass('tomatoColor');
                } else  {
                    $('#descripcionNumeracion').addClass('tomatoColor');
                }
                if (selloPCRE){
                    $('#descripcionSello').removeClass('tomatoColor');
                } else {
                    $('#descripcionSello').addClass('tomatoColor');
                }
                
                $('.alertSCDos').html('<div class="alert eliminarEn5s alert-info alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                                            Los datos que ingreso no corresponden al formato que le es solicitado.\n\
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                                <span aria-hidden="true">&times;\n\
                                                                </span>\n\
                                                            </button>\n\
                                                        </div>');
                setTimeout(function(){$('.eliminarEn5s').slideUp('slow', function(){$(this).remove();})},8000);
                
            }
            
        } else {
            
            if (horaDeEntrada) {
                $('#descripcionHoraDeEntrada').removeClass('tomatoColor');
            } else {
                $('#descripcionHoraDeEntrada').addClass('tomatoColor');
            }
            if (horaDeSalida) {
                $('#descripcionHoraDeSalida').removeClass('tomatoColor');
            } else {
                $('#descripcionHoraDeSalida').addClass('tomatoColor');
            }
            if (numeracion){
                $('#descripcionNumeracion').removeClass('tomatoColor');
            } else  {
                $('#descripcionNumeracion').addClass('tomatoColor');
            }
            if (sello){
                $('#descripcionSello').removeClass('tomatoColor');
            } else {
                $('#descripcionSello').addClass('tomatoColor');
            }
            
            $('.alertSCDos').html('<div class="alert eliminarEn5s alert-info alert-dismissible fade show text-center font-size-14px" role="alert">\n\
                                                        Todos los campos con * son obligatorios.\n\
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n\
                                                            <span aria-hidden="true">&times;\n\
                                                            </span>\n\
                                                        </button>\n\
                                                    </div>');
            setTimeout(function(){$('.eliminarEn5s').slideUp('slow', function(){$(this).remove();})},8000);
            
        }
        
    });
    
    
});

