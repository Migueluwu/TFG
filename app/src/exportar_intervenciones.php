<?php
session_name("app_alboran");
session_start();
require "ctes_funciones.php";
if(isset($_POST["exportar"])){
        if(isset($_POST["filtro_grupo_csv"])&& $_POST["filtro_grupo_csv"]!=""){


            $url=DIR_SERV."/selectAlumnos";
            $datos["api_session"]=$_SESSION["key"]["api_session"];
            $datos["grupo"]=$_POST["filtro_grupo_csv"];
            $respuesta=consumir_servicios_REST($url,"POST",$datos);
            $obj=json_decode($respuesta);
            if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
                
            }
            if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
                
            }
            $alumnos=$obj->Alumnos;

            //Obtiene intervenciones de su grupo
            $url=DIR_SERV."/selectIntervencionesGrupo";
            $datos["api_session"]=$_SESSION["key"]["api_session"];
            $datos["grupo"]=$_POST["filtro_grupo_csv"];
            $respuesta=consumir_servicios_REST($url,"POST",$datos);
            $obj=json_decode($respuesta);
            if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
                
            }
            if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
                
            }
            $intervenciones=$obj->intervenciones;
        }else{
            $grupo="";
            //Obtiene todos los alumnos
            $url=DIR_SERV."/selectAllAlumnos";
            $datos["api_session"]=$_SESSION["key"]["api_session"];
            $respuesta=consumir_servicios_REST($url,"POST",$datos);
            $obj=json_decode($respuesta);
            if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
                
            }
            if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
                
            }
            $alumnos=$obj->Alumnos;

            //Obtiene todas intervenciones
            $url=DIR_SERV."/selectIntervenciones";
            $datos["api_session"]=$_SESSION["key"]["api_session"];
            $respuesta=consumir_servicios_REST($url,"POST",$datos);
            $obj=json_decode($respuesta);
            if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
                
            }
            if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
                
            }
            $intervenciones=$obj->intervenciones;

        }
        if (isset($_POST["filtro_nombre_csv"]) && trim($_POST["filtro_nombre_csv"]) !== ""){
            $intervenciones_filtradas = [];
    
            foreach ($alumnos as $alumno) {
                if (str_contains(strtoupper($alumno->nombre), strtoupper($_POST["filtro_nombre_csv"]))||
                     str_contains(strtoupper($alumno->apellidos), strtoupper($_POST["filtro_nombre_csv"]))) {
    
                    //Obtiene intervenciones del alumno
                    $url=DIR_SERV."/selectIntervencionesAlum";
                    $datos["api_session"]=$_SESSION["key"]["api_session"];
                    $datos["cod_alu"]=$alumno->cod_alu;
                    $respuesta=consumir_servicios_REST($url,"POST",$datos);
                    $obj=json_decode($respuesta);
                    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
                        
                    }
                    if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
    
                    }
                    if(!empty($obj->intervenciones)){
                        foreach ($obj->intervenciones as $intervencion) {
                            if ($_POST["filtro_grupo_csv"]== "" || $intervencion->cod_grupo == $_POST["filtro_grupo_csv"] )
                                array_push($intervenciones_filtradas, $intervencion);
                        }
                    }
    
    
                }
            }
            $intervenciones= $intervenciones_filtradas;
        }
    
            
        $exportar="Código intervencion,Profesor,Grupo,Alumno,Causa,Tipo,Fecha,Descripción\n";
        
        
        foreach ($intervenciones as $key => $item){
            $url=DIR_SERV."/selectAlumno";
            $datos["alumno"]=$item->cod_alu;
            $respuesta=consumir_servicios_REST($url,"POST",$datos);
            $obj=json_decode($respuesta);
            $alumno=$obj->Alumno->nombre." ".$obj->Alumno->apellidos;

            $url=DIR_SERV."/selectProfesor";
            $datos["profesor"]=$item->cod_prof;
            $respuesta=consumir_servicios_REST($url,"POST",$datos);
            $obj=json_decode($respuesta);
            
            $profesor=$obj->profesor->nombre." ".$obj->profesor->apellido;
            $exportar.=$item->cod_intervencion.",".$profesor.",".$item->cod_grupo.",".$alumno.",".$item->causa.",".$item->tipo.",".$item->fecha.",".$item->descripcion."\n";
        }
        print($exportar);
        header("Content-disposition: attachment; filename=intervenciones".date("d-m-Y").".csv");
        header("Content-type: text/csv");
        
    }
?>