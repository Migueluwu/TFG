<?php
// prueba de insertar intervenciones/////////////////////////////////////////////////////////////////////////////////////////////
/*$url=DIR_SERV."/insertarIntervencion";
$datos["api_session"]=$_SESSION["key"]["api_session"];
$datos["grupo"]="1ESOA";
$datos["alumno"]="768";
$datos["causa"]="causa";
$datos["tipo"]="tipo";
$datos["fecha"]="1994/12/22";
$datos["descripcion"]="descripcion";
$respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
        if(!$obj){
            die(error_page("Examen Librería","Librería","<p>".$respuesta."</p>"));
        }
        if(isset($obj->error)){
            die(error_page("Examen Librería","Librería","<p>".$obj->error."</p>"));
        }
unset($datos);*/
//prueba select
$url=DIR_SERV."/selectIntervencionesAlum";
$datos["api_session"]=$_SESSION["key"]["api_session"];
$datos["cod_alu"]="768";
$respuesta=consumir_servicios_REST($url,"POST",$datos);
$obj=json_decode($respuesta);
if(!$obj){
    //die(error_page("Examen Librería","Librería","<p>".$respuesta."</p>"));
}
if(isset($obj->error)){
    //die(error_page("Examen Librería","Librería","<p>".$obj->error."</p>"));
}


if(isset($_POST["enviarGrupos"])){
    $url=DIR_SERV."/insertarGruposCsv";
    $datos["datos"]=$_FILES["archivo"]["tmp_name"];
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
        if(!$obj){
            //die(error_page("Examen Librería","Librería","<p>".$respuesta."</p>"));
        }
        if(isset($obj->error)){
            //die(error_page("Examen Librería","Librería","<p>".$obj->error."</p>"));
        }
}
if(isset($_POST["enviarProfesores"])){
    $url=DIR_SERV."/insertarProfesoresCsv";
    $datos["datos"]=$_FILES["archivo1"]["tmp_name"];
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
        if(!$obj){
            //die(error_page("Examen Librería","Librería","<p>".$respuesta."</p>"));
        }
        if(isset($obj->error)){
            //die(error_page("Examen Librería","Librería","<p>".$obj->error."</p>"));
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        print_r($obj);
        //print_r($datos_usuario_log);
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <button type="submit" name="enviarGrupos">enviar</button>
    </form>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo1">
        <button type="submit" name="enviarProfesores">enviar</button>
    </form>
    <?php
        print "<p>".$_SESSION["mensaje"]."</p>";
            print_r($obj);
        //print_r($datos_usuario_log);
    ?>
</body>
</html>