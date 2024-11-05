<?php
header('Content-Type: text/html; charset=iso-8859-1');
require "src/bd_config.php";

function login($datos,$in_login=true)
{
    try
    {
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        try
        {
            $consulta="select * from JAVIERPARODI_profesores where (usuario=? or email=?) and clave=?";
            $sentencia=$conexion->prepare($consulta);
            $sentencia->execute($datos);
            if($sentencia->rowCount()>0)
            {
                $respuesta["usuario"]=$sentencia->fetch(PDO::FETCH_ASSOC);
                if($in_login)
                {
                    session_name("api_tienda_22_23");
                    session_start();
                    $_SESSION["cod_prof"]=$respuesta["usuario"]["cod_prof"];
                    $_SESSION["nombre"]=$respuesta["usuario"]["nombre"];
                    $_SESSION["apellido"]=$respuesta["usuario"]["apellido"];
                    $_SESSION["usuario"]=$respuesta["usuario"]["usuario"];
                    $_SESSION["clave"]=$datos[2];
                    $_SESSION["email"]=$respuesta["usuario"]["email"];
                    $_SESSION["is_jefatura"]=$respuesta["usuario"]["is_jefatura"];
                    $_SESSION["is_orientacion"]=$respuesta["usuario"]["is_orientacion"];
                    $_SESSION["is_tutor"]=$respuesta["usuario"]["is_tutor"];
                    $_SESSION["is_cotutor"]=$respuesta["usuario"]["is_cotutor"];
                    $respuesta["api_session"]=session_id();
                }
            }
            else
            {
                $respuesta["mensaje"]="Usuario no registrado en BD";
            }
        }
        catch(PDOException $e)
        {
        
            $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
        }

        $sentencia=null;
        $conexion=null; 
    }
    catch(PDOException $e)
    {
        $respuesta["mensaje_error"]="Imposible conectar. Error:".$e->getMessage();
    }

    
    return $respuesta;
}


function insertarGrupos($datos){
    try{
    $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));

    $fp = fopen($datos[0], "r");
    fgets($fp);
    while (!feof($fp)){ 
        $data  = explode(",", fgets($fp));
        for($i=0;$i<count($data);$i++){
            $data[$i]=str_replace("\"","",$data[$i]);
            $data[$i]= utf8_encode($data[$i]);
            $data[$i]=trim($data[$i]);
        }
        $consulta="INSERT INTO JAVIERPARODI_grupos (cod_grupo,denominacion) VALUES ";
        if( $data[4]!='\r\n'){
            $consulta.="('".$data[4]."','".$data[3]."')";
            try{
                $sentencia=$conexion->prepare($consulta);
                $sentencia->execute();
            }catch(Exception $e){
                $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
            }
        }
        $consulta="INSERT INTO JAVIERPARODI_alumnos(nombre,apellidos,cod_grupo) VALUES ";

        $consulta.="('".$data[2]."','".$data[0]." ".$data[1]."','".$data[4]."')";
            try{
                $sentencia=$conexion->prepare($consulta);
                $sentencia->execute();
                $insertado=true;
            }catch(Exception $e){
                $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
            }
    } 
    fclose($fp);
}catch(Exception $e){
    $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
}
if ($insertado) {
    $respuesta["mensaje"] = "Grupos y alumnos insertados con éxito";
} else {
    $respuesta["mensaje"] = "No se encontraron grupos para insertar";
}
return $respuesta;
}


function insertarProfesores($datos){
    try{
    $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));

    $fp = fopen($datos[0], "r");
    fgets($fp);
    while (!feof($fp)){ 
        $data  = explode(",", fgets($fp));
        for($i=0;$i<count($data);$i++){
            $data[$i]=str_replace("\"","",$data[$i]);
            $data[$i]= utf8_encode($data[$i]);
            $data[$i]=trim($data[$i]);
        }
        $consulta="INSERT INTO JAVIERPARODI_profesores (nombre,apellido,usuario,clave,email) VALUES ";
        
            $consulta.="('".$data[1]."','".$data[0]."','".$data[5]."','".md5($data[5])."','".$data[6]."')";
            try{
                $sentencia=$conexion->prepare($consulta);
                $sentencia->execute();
            }catch(Exception $e){
                $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
            }
    } 
    fclose($fp);
}catch(Exception $e){
    $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
}
$respuesta["mensaje"]="Grupos insertados con exito";
return $respuesta;
}

function insertarIntervencion($datos){
    try{
    $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="INSERT INTO JAVIERPARODI_intervenciones (cod_prof,cod_grupo,cod_alu,causa,tipo,fecha,descripcion) VALUES (?,?,?,?,?,?,?)";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Intervencion insertados con exito";
}catch(Exception $e){
    $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
}
return $respuesta;
}
function selectGrupos(){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_grupos";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute();
        $respuesta["grupos"]=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function selectProfesor($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_profesores where cod_prof=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["profesor"]=$sentencia->fetch(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function selectAlumno($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_alumnos where cod_alu=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["Alumno"]=$sentencia->fetch(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function selectAlumnos($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_alumnos where cod_grupo=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["Alumnos"]=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function selectAllAlumnos(){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_alumnos";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute();
        $respuesta["Alumnos"]=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}

function selectIntervenciones(){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_intervenciones order by fecha";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute();
        $respuesta["intervenciones"]=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function selectIntervencionesPropias($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_intervenciones where cod_prof=? order by fecha";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["intervenciones"]=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function selectIntervencionesGrupo($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_intervenciones where cod_grupo=? order by fecha";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["intervenciones"]=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}

function selectIntervencionesAlum($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_intervenciones where cod_alu=? order by fecha";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["intervenciones"]=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function selectIntervencion($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="select * from JAVIERPARODI_intervenciones where cod_intervencion=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["intervencion"]=$sentencia->fetch(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function deleteGrupo($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="delete from JAVIERPARODI_grupos where cod_grupo=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Grupo borrado con exito";
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function deletealumno($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="delete from JAVIERPARODI_alumnos where cod_alu=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Alumno borrado con exito";
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}

function deleteIntervencion($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="delete from JAVIERPARODI_intervenciones where cod_intervencion=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Intervencion borrada con exito";
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function deleteProfesor($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="delete from JAVIERPARODI_profesores where cod_prof=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Profesor borrado con exito";
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function updateGrupo($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="update JAVIERPARODI_grupos(cod_grupo,denominacion) values(?,?) where cod_grupo=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Grupo actualizado con exito";
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}


function updateAlumno($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="update JAVIERPARODI_alumnos(nombre,apellidos,cod_grupo) values(?,?,?) where cod_alu=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Alumno actualizado con exito";
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function updateIntervencion($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="update JAVIERPARODI_intervenciones SET cod_prof = ?, cod_grupo = ?, cod_alu = ?, causa = ?, tipo = ?, fecha = ?, descripcion = ? where cod_intervencion=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Intervencion actualizado con exito";
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}
function updateProfesor($datos){
    try{
        $conexion=new PDO("mysql:host=".SERVIDOR_BD.";dbname=".NOMBRE_BD,USUARIO_BD,CLAVE_BD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
        $consulta="update JAVIERPARODI_profesores(nombre,apellido,usuario,clave,email,is_jefatura,is_orientacion,is_tutor,is_cotutor,cod_grupo) values(?,?,?,?,?,?,?,?,?,?) where cod_prof=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->execute($datos);
        $respuesta["mensaje"]="Profesor actualizado con exito";
    }catch(Exception $e){
        $respuesta["mensaje_error"]="Imposible realizar la consulta. Error:".$e->getMessage();
    }
    return $respuesta;
}


?>