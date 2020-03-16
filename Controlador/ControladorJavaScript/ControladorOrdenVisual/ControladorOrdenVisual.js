$(document).ready(function(){
    $(document).on("click",".OrdenDeTrabajoUno",function(){
        var seccion= $(this).attr('data-seccion');
        
        if(seccion=="Ingreso/Salida"){
            $('#SeccionUnoOcultar').addClass('ocultarDisplayNone');
            $('#SeccionDosOcultar').removeClass('ocultarDisplayNone');
        }
        
    });
    
    $(document).on("click",".OrdenDeTrabajoDos",function(){
        var seccion= $(this).attr('data-seccion');
        
        if(seccion=="Recepcion"){
            $('#SeccionUnoOcultar').removeClass('ocultarDisplayNone');
            $('#SeccionDosOcultar').addClass('ocultarDisplayNone');
        }
        
    });
    
});


