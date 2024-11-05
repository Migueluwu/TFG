<?php
session_name("app_alboran");
session_start();
require "src/ctes_funciones.php";
if(isset($_POST["btnCerrarSesion"]))
{
    session_destroy();
    header("Location:index.php");
    exit;
}

if(isset($_SESSION["usuario"]))
{
    require "src/seguridad.php";
    //if($datos_usuario_log->is_jefatura)
        require "vistas/vista_principal.php";

}
else
{
    //El usuario no se ha logueado aún
    require "vistas/vista_login.php";
}
