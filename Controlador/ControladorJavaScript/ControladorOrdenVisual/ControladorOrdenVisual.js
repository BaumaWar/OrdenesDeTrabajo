$(document).ready(function(){
    /*Start Controlador Visual Seccion Uno*/
    $(document).on("click",".OrdenDeTrabajoUno",function(){
        var seccion= $(this).attr('data-seccion');
        
        if(seccion=="Ingreso/Salida"){
            $('#SeccionUnoOcultar').addClass('ocultarDisplayNone');
            $('#SeccionDosOcultar').removeClass('ocultarDisplayNone');
        }
        
    });
    /*End Controlador Visual Seccion Uno*/
    /*-----------------------------------*/
    /*Start Controlador Visual Seccion Dos*/
    $(document).on("click",".OrdenDeTrabajoDos",function(){
        var seccion= $(this).attr('data-seccion');
        
        if(seccion=="Recepcion"){
            $('#SeccionUnoOcultar').removeClass('ocultarDisplayNone');
            $('#SeccionDosOcultar').addClass('ocultarDisplayNone');
        }
    
    });
    /*End Controlador Visual Seccion Dos*/
});


