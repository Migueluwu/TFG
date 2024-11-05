<?php

require __DIR__ . '/Slim/autoload.php';

require "src/funciones.php";

$app= new \Slim\App;

$app->post('/salir',function($request){

    session_id($request->getParam('api_session'));
    session_start();
    session_destroy();
    echo json_encode(array("logout"=>"Fin de la session"));
    
});

$app->post('/logueado',function($request){

    session_id($request->getParam('api_session'));
    session_start();
    if(isset($_SESSION["usuario"]))
    {
        $datos[]=$_SESSION["usuario"];
        $datos[]=$_SESSION["usuario"];
        $datos[]=$_SESSION["clave"];
        echo json_encode(login($datos,false));
    }
    else
    {
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});

$app->post('/login',function($request){

    $datos[]=$request->getParam('usuario');
    $datos[]=$request->getParam('usuario');
    $datos[]=$request->getParam('clave');
    echo json_encode(login($datos));

});
$app->post('/insertarGruposCsv',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]){
        $datos[]=$request->getParam('datos');
        echo json_encode(insertarGrupos($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }

});
$app->post('/insertarProfesoresCsv',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]){
        $datos[]=$request->getParam('datos');
        echo json_encode(insertarProfesores($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }

});
$app->post('/insertarIntervencion',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$_SESSION["cod_prof"];
        $datos[]=$request->getParam('grupo');
        $datos[]=$request->getParam('alumno');
        $datos[]=$request->getParam('causa');
        $datos[]=$request->getParam('tipo');
        $datos[]=$request->getParam('fecha');
        $datos[]=$request->getParam('descripcion');
        echo json_encode(insertarIntervencion($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/selectGrupos',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]||$_SESSION["is_orientacion"]||$_SESSION["is_cotutor"]){
        echo json_encode(selectGrupos());
    
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/selectAlumno',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    $datos[]=$request->getParam('alumno');
    echo json_encode(selectAlumno($datos));
});
$app->post('/selectProfesor',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    $datos[]=$request->getParam('profesor');
    echo json_encode(selectProfesor($datos));
});
$app->post('/selectAlumnos',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$request->getParam('grupo');
        echo json_encode(selectAlumnos($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/selectAllAlumnos',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]||$_SESSION["is_orientacion"]||$_SESSION["is_cotutor"]){
        
        echo json_encode(selectAllAlumnos());
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});

$app->post('/selectIntervenciones',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]||$_SESSION["is_orientacion"]||$_SESSION["is_cotutor"]){
        echo json_encode(selectIntervenciones());
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/selectIntervencionesPropias',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$_SESSION["cod_prof"];
        echo json_encode(selectIntervencionesPropias($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/selectIntervencionesGrupo',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$request->getParam('grupo');
        echo json_encode(selectIntervencionesGrupo($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/selectIntervencionesAlum',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$request->getParam('cod_alu');
        echo json_encode(selectIntervencionesAlum($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/selectIntervencion',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$request->getParam('cod_intervencion');
        echo json_encode(selectIntervencion($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});

$app->post('/deleteGrupo',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]){
        $datos[]=$request->getParam('cod_grupo');
        echo json_encode(deleteGrupo($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/deleteAlumno',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]){
        $datos[]=$request->getParam('cod_alu');
        echo json_encode(deleteAlumno($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/deleteIntervencion',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$request->getParam('cod_intervencion');
        echo json_encode(deleteIntervencion($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/deleteProfesor',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]){
        $datos[]=$request->getParam('cod_prof');
        echo json_encode(deleteProfesor($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/updateGrupo',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]){
        $datos[]=$request->getParam('cod_grupo');
        $datos[]=$request->getParam('denominacion');
        $datos[]=$request->getParam('cod_grupo');
        echo json_encode(updateGrupo($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});
$app->post('/updateAlumno',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$request->getParam('nombre');
        $datos[]=$request->getParam('apellidos');
        $datos[]=$request->getParam('cod_grupo');
        $datos[]=$request->getParam('cod_alu');
        echo json_encode(updateAlumno($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});

$app->post('/updateIntervencion',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["nombre"]){
        $datos[]=$request->getParam('profesor');
        $datos[]=$request->getParam('grupo');
        $datos[]=$request->getParam('alumno');
        $datos[]=$request->getParam('causa');
        $datos[]=$request->getParam('tipo');
        $datos[]=$request->getParam('fecha');
        $datos[]=$request->getParam('descripcion');
        $datos[]=$request->getParam('cod_intervencion');
        echo json_encode(updateIntervencion($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tienes permisos usar este servicio"));
    }
});
$app->post('/updateProfesor',function($request){
    session_id($request->getParam('api_session'));
    session_start();
    if($_SESSION["is_jefatura"]){
        $datos[]=$request->getParam('nombre');
        $datos[]=$request->getParam('apellido');
        $datos[]=$request->getParam('usuario');
        $datos[]=$request->getParam('clave');
        $datos[]=$request->getParam('email');
        $datos[]=$request->getParam('is_jefatura');
        $datos[]=$request->getParam('is_orientacion');
        $datos[]=$request->getParam('is_tutor');
        $datos[]=$request->getParam('is_cotutor');
        $datos[]=$request->getParam('cod_grupo');
        $datos[]=$request->getParam('cod_prof');
        echo json_encode(updateProfesor($datos));
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }
});

$app->post('/exportarCSV',function($request){
    /*session_id($request->getParam('api_session'));
    session_start();
    if(isset($_SESSION["nombre"])){
        echo json_encode($request->getParam('intervenciones'));
        //echo json_encode(exportarCSV($request->getParam('intervenciones')));
        header("Content-disposition: attachment; filename=exportacion.csv");
        header("Content-type: text/csv");
    }else{
        session_destroy();
        echo json_encode(array("no_login"=>"Usted no tiene permisos usar este servicio"));
    }*/
    $filename = 'archivo.csv';

// Contenido del archivo CSV (puedes obtenerlo de una base de datos u otra fuente)
$csvContent = "Nombre,Apellido,Correo\nJohn,Doe,john@example.com\nJane,Smith,jane@example.com";

// Configuración de encabezados HTTP para descargar el archivo
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=".$filename);

// Imprime el contenido del archivo CSV
echo $csvContent;
});
// Una vez creado servicios los pongo a disposición
$app->run();
?>