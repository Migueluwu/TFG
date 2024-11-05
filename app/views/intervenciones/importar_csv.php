<?php
$mensaje = "";

if(isset($_POST["btn_enviar_csv"])){

    if(isset($_FILES["csv_grupos_alumnos"]) && $_FILES["csv_grupos_alumnos"]["name"] != ""){

        $url=DIR_SERV."/insertarGruposCsv";
        $datos["api_session"]=$_SESSION["key"]["api_session"];
        $datos["datos"]=$_FILES["csv_grupos_alumnos"]["tmp_name"];
        $respuesta=consumir_servicios_REST($url,"POST",$datos);
        $obj=json_decode($respuesta);
        if(!$obj){
                //$_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
        }
        if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;

        }
        if(isset($obj->mensaje)){
            $_SESSION["mensaje"] = $obj->mensaje;
        }
    }
    
    if(isset($_FILES["csv_profesores"]) && $_FILES["csv_profesores"]["name"] != ""){
        $url=DIR_SERV."/insertarProfesoresCsv";
        $datos["api_session"]=$_SESSION["key"]["api_session"];
        $datos["datos"]=$_FILES["csv_profesores"]["tmp_name"];
        $respuesta=consumir_servicios_REST($url,"POST",$datos);
        $obj=json_decode($respuesta);
        if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;

        }
        if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;

        }
        if(isset($obj->mensaje)){
            $_SESSION["mensaje"] = $obj->mensaje;
        }
    }
    unset($_POST["csv_grupos_alumnos"]);
}
?>

<h1 class="py-3 text-shadow section-title">
    Importar CSV
</h1>
<form action="index.php" 
    method="post" 
    enctype="multipart/form-data"
    accept=".csv">

    <div class="py-2">
        <label for="csv_grupos_alumnos"
            class="label-form text-lg col-12 mb-3">
            Grupos y alumnos
        </label>
        <div class="text-center">
            <input type="file" 
                name="csv_grupos_alumnos"
                class="col-10 input-file"
                id="input_file_csv_grupos_alumnos">
        </div>
        <div class="line-info justify-content-center">
            <span id="file_name_grupos_alumnos" 
                class="fw-bold text-sm">
                Seleccione el archivo CSV
            </span>
        </div>
    </div>
    <hr>
    <div class="py-2">
        <label for="csv_profesores"
            class="label-form text-lg col-12 mb-3">
            Profesores
        </label>
        <div class="text-center">
            <input type="file" 
                name="csv_profesores"
                class="col-10 input-file"
                id="input_file_csv_profesores">
        </div>
        <div class="line-info justify-content-center">
            <span id="file_name_profesores"
                class="fw-bold text-sm">
                Seleccione el archivo CSV
            </span>
        </div>
        
    </div>
    <hr class="mb-2">
    <div class="line-info ">
        <span class="text-blue fw-bold text-center">
            <?php
            if(isset($_SESSION["mensaje"])){
                print($_SESSION["mensaje"]);
                unset($_SESSION["mensaje"]);
            }
            ?>
        </span>
    </div>
    <div class="col-12 justify-center mb-4 mt-2">
        <button type="submit"
            class="btn btn-yellow btn-md col-sm-4" 
            name="btn_enviar_csv">
            Importar
        </button>
    </div>
    
    <div class="col-12 justify-center">
        <button type="submit" 
            name="btn_gestion_intervenciones"
            class="text-link">
            Volver
        </button>
    </div>
</form> 
