<?php
    setlocale(LC_TIME, 'es_ES');
    session_name("app_alboran");
    session_start();
    require "src/ctes_funciones.php";
    if(isset($_POST["btnCerrarSesion"]))
    {
        session_destroy();
        header("Location:index.php");
        exit;
    }
    if(isset($_SESSION["usuario"])){
        require "src/seguridad.php";
    }
    if(isset($_POST["btn_login"]))
    {
        $error_usuario=$_POST["usuario"]=="";
        $error_clave=$_POST["clave"]=="";
        $error_form=$error_usuario||$error_clave;
        if(!$error_form)
        {
            $url=DIR_SERV."/login";
            $datos["usuario"]=$_POST["usuario"];
            $datos["clave"]=md5($_POST["clave"]);
            $respuesta=consumir_servicios_REST($url,"POST",$datos);
            $obj=json_decode($respuesta);
            if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;

            }
                if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
            }
            if(isset($obj->mensaje))
            {
                $error_usuario=true;
                $_SESSION["mensaje"]="Usuario o contraseña incorrecta";
            }
            else
            {
    
                $_SESSION["usuario"]=$datos["usuario"];
                $_SESSION["clave"]=$datos["clave"];
                $_SESSION["ultimo_acceso"]=time();
                $_SESSION["key"]["api_session"]=$obj->api_session;
    
                header("Location:index.php");
                exit();
            }
        }
    }

    if(isset($_POST["btn_registrar_intervencion"])){
        unset($_POST["filtra_grupo_nueva"]);
    }
    $causas=Array("Estado General","Evolución académica","Faltas de asistencia","Problemas de convivencia","Llamada por enfermedad","Hurto o robo","Otras");
$tipos=Array("Entrevista telefónica","Entrevista personal","Entrevista con la familia","Comunicación por escrito","Tutoria grupal","Otras");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/bootstrap-grid.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../public/img/logo_trans.gif">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="../public/js/jquery-3.6.3.js" type="text/javascript"></script>
    <script src="../public/js/scripts.js" type="text/javascript"></script>
    <script src="../public/js/filters.js" type="text/javascript"></script>
    <title>IES Mar de Alborán</title>
</head>

<body>
    <div class="content">
        <header id="header">
            
            <?php require "views/menu_lateral.php"; ?>
            
        </header>
        <main id="main">
            <div id="main-frame"
                class="row">
                <div id="frame-content"
                    class="col-12 col-md-10 col-lg-8">
                    
                    <?php 
                    if(isset($logged_in)&& $logged_in){

                        //seguridad

                        // la seguridad no puede ir aqui porque la logica anterior de logged_in no estaria actualizada.
                        
                        if (isset($_POST["btn_gestion_intervenciones"])){

                            require("views/intervenciones/menu.php");

                        } else if (isset($_POST["btn_registro_intervenciones"]) || isset($_POST["filtra_grupo_nueva"])){

                            require("views/intervenciones/nueva.php");

                        } else if (isset($_POST["btn_registrar_intervencion"]) || isset($_POST["btn_confirmar_nueva_intervencion"])){

                            require("views/intervenciones/confirmar_nueva.php");

                        } else if (isset($_POST["btn_listado_intervenciones"]) || isset($_POST["filtra_grupo_listado"]) || isset($_POST["btn_confirmar_borrar_intervencion"])){

                            require("views/intervenciones/listado.php");

                        } else if (isset($_POST["btn_detalles_intervencion"]) || isset($_POST["btn_borrar_intervencion"])){

                            require("views/intervenciones/detalles_intervencion.php");

                        } else if (isset($_POST["btn_editar_intervencion"])){

                            require("views/intervenciones/editar_intervencion.php");

                        } else if (isset($_POST["btn_validar_editar_intervencion"]) || isset($_POST["btn_confirmar_editar_intervencion"])){

                            require("views/intervenciones/confirmar_editar.php");

                        } else if (isset($_POST["btn_importar_csv"]) || isset($_POST["btn_enviar_csv"])){

                            require("views/intervenciones/importar_csv.php");

                        } else {

                           require("views/acciones.php"); 

                        }


                    } else {
                        require("views/login.php");
                    }
                    

                    

                    ?>

                </div>
            </div>
        </main>
        <footer id="footer"
            class="justify-center">
            <span class="text-white text-sm p-2">
                Desrrollado por Miguel Martín Fernández y Javier Parodi Piñero </span>
        </footer>
    </div>
</body>

</html>