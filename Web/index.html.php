<!DOCTYPE html>
<html lang="en">
    <?php require_once '../Controlador/ControladorMasterHelper/ControladorMasterHelper.php';?>
    <?php require_once '../Vista/PartesLinkScript/Head.html.php';?>
    <body>
        <?php 
                
                require_once '../Vista/PartesLinkScript/BarraDeAccion.html.php';
  
                ControladorMasterHelper::getUrl();
                
        ?>
            
    </body>
    <?php require_once '../Vista/PartesLinkScript/Footer.html.php';?>
</html>