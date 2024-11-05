<?php
$url=DIR_SERV."/login";
$datos_login["usuario"]=$_SESSION["usuario"];
$datos_login["clave"]=$_SESSION["clave"];
$respuesta=consumir_servicios_REST($url,"POST",$datos_login);
$obj=json_decode($respuesta);

if(!$obj)
{
    session_destroy();
    $logged_in=false;
}
if(isset($obj->mensaje_error))
{
    session_destroy();
    $logged_in=false;
}

if(isset($obj->usuario))
{
    if(time()-$_SESSION["ultimo_acceso"]>MINUTOS*60)
    {
        session_unset();
        $_SESSION["seguridad"]="Su tiempo de sesión ha caducado. Vuelva a loguearse o registrarse";
        header("Location:index.php");
        $logged_in=false;
        exit;
    }
   
}
else
{
    session_unset();
    $_SESSION["seguridad"]="Zona restringida. Vuelva a loguearse o registrarse";
    header("Location:index.php");
    $logged_in=false;
    exit;
}

$_SESSION["ultimo_acceso"]=time();
$datos_usuario=$obj->usuario;
$logged_in=true;

?>