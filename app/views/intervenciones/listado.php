<?php
if(isset($_POST["ud_listado_intervenciones"])){
    $grupo_filtro=$_POST["ud_listado_intervenciones"];
}

if($datos_usuario->is_jefatura||$datos_usuario->is_orientacion||$datos_usuario->is_cotutor){
    //Obtiene todos los grupos
    $url=DIR_SERV."/selectGrupos";
    $datos["api_session"]=$_SESSION["key"]["api_session"];
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
        
    }
    if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
        
    }
    $grupos=$obj->grupos;

    if( isset($_POST["ud_listado_intervenciones"]) && $_POST["ud_listado_intervenciones"] !== ""){ 
        //Si ya ha elegido un grupo en el select
        //Obtiene alumnos del grupo elegido
        $grupo=$_POST["ud_listado_intervenciones"];

        $url=DIR_SERV."/selectAlumnos";
        $datos["api_session"]=$_SESSION["key"]["api_session"];
        $datos["grupo"]=$_POST["ud_listado_intervenciones"];
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
        $datos["grupo"]=$_POST["ud_listado_intervenciones"];
        $respuesta=consumir_servicios_REST($url,"POST",$datos);
        $obj=json_decode($respuesta);
        if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
            
        }
        if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
            
        }
        $intervenciones=$obj->intervenciones;
        
    } else {
        $grupo="-1";
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

}else{
    $grupo=$datos_usuario->cod_grupo;
    //Obtiene alumnos de su grupo
    $url=DIR_SERV."/selectAlumnos";
    $datos["api_session"]=$_SESSION["key"]["api_session"];
    $datos["grupo"]=$datos_usuario->cod_grupo;
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
    $datos["grupo"]=$datos_usuario->cod_grupo;
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

if(isset($_POST["btn_confirmar_borrar_intervencion"])){
    $url=DIR_SERV."/deleteIntervencion";
    $datos["api_session"]=$_SESSION["key"]["api_session"];
    $datos["cod_intervencion"]=$_POST["btn_confirmar_borrar_intervencion"];
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
        
    }
    if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
        
    }
    if(isset($obj->mensaje))
    $_SESSION["mensaje"]=$obj->mensaje;

    if(isset($_SESSION["mensaje"])){ ?>
        <div id="atenua"></div>
        <div class="emergente row">
            <h1 class="mb-4 col-12 text-white section-title">
                La intervención #<?= $_POST["btn_confirmar_borrar_intervencion"] ?> ha sido eliminada
            </h1>
            <form action="index.php"
                method="post"
                class="col-12 mt-4">
                <div class="col-12 justify-center my-4">
                    <button type="submit" 
                        name="btn_listado_intervenciones"
                        class="btn btn-md btn-yellow col-4">
                        Cerrar
                    </button>
                </div>
                <div class="col-12 justify-center mb-4">
                    <button type="submit" 
                        name="btn_gestion_intervenciones"
                        class="text-link text-white">
                        Volver al menú de intervenciones 
                    </button>
                </div>
            </form>
        </div>
<?php
        unset($_SESSION["mensaje"]);
    }
}

    /*if (isset($_POST["alumno_listado_intervenciones"]) && trim($_POST["alumno_listado_intervenciones"]) !== ""){
        $intervenciones_filtradas = [];

        foreach ($alumnos as $alumno) {
            if (str_contains(strtoupper($alumno->nombre), strtoupper($_POST["alumno_listado_intervenciones"])) 
                || str_contains(strtoupper($alumno->apellidos), strtoupper($_POST["alumno_listado_intervenciones"]))) {
                
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
                        if ($grupo == "-1" || $intervencion->cod_grupo == $grupo )
                            array_push($intervenciones_filtradas, $intervencion);
                    }
                }
                
                    
            }
        }

        $intervenciones= $intervenciones_filtradas;
    }*/
    
?>

<h1 class="py-3 text-shadow section-title">
    Intervenciones
</h1>
<div class="col-12">
    <div class="row mb-3 align-items-center">
        <label class="label-form pt-2 col-8 col-sm-4">
            Exportar CSV:
        </label>
        <div class="col-4">
            <form action="src/exportar_intervenciones.php" 
                method="post">
                <input type="hidden" 
                    name="filtro_grupo_csv" 
                    id="filtro_grupo_csv"
                    value="">
                    <input type="hidden" 
                    name="filtro_nombre_csv" 
                    id="filtro_nombre_csv"
                    value="">
                <button type="submit"
                    name="exportar"
                    id="btn_exportar"
                    class="btn-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentColor)" d="M336,176.005V16H176v160H56v38.623l199.8,200L456,214.637V176.005ZM255.826,369.376,94.616,208.005H208V48h96v160H417.361Z" class="ci-primary"/>
                        <rect width="400" height="32" x="56" y="464" fill="var(--ci-primary-color, currentColor)" class="ci-primary"/>
                    </svg>
                </button>
            </form>
        </div>           
    </div>
    <form id="form_listado_intervenciones" 
        action="index.php" 
        method="post"
        class="col-12">
        <div class="row">
            <label class="label-form col-12 col-sm-4">
                Filtrar por:
            </label>
            <div class="col-4 col-sm-3">
                <select name="ud_listado_intervenciones" 
                    id="ud_listado_intervenciones"
                    class="input-text p-1 mb-2">
                    <?php if(!$datos_usuario->is_jefatura && !$datos_usuario->is_orientacion && !$datos_usuario->is_cotutor){ ?>
                        <option value = "<?= $datos_usuario->cod_grupo ?>"
                            selected>
                            <?= $datos_usuario->cod_grupo ?>
                        </option>
                    <?php } else { ?>
                        <option value=""
                                selected
                                disabled>
                                Unidad
                        </option>
                        <option value=""
                            <?= (isset($_POST["ud_listado_intervenciones"]) && $_POST["ud_listado_intervenciones"] === "" ? "selected" : "") ?>>
                                TODOS
                        </option>
                        <?php foreach ($grupos as $key => $item ) { ?>
                            <?php if ($item->cod_grupo !== "" && $item->cod_grupo !== null) {?>
                                <option value="<?= $item->cod_grupo ?>"
                                    <?= (isset($_POST["ud_listado_intervenciones"]) && $_POST["ud_listado_intervenciones"] == $item->cod_grupo ? "selected" : "") ?> >
                                    <?= $item->cod_grupo ?>
                                </option>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>   
                </select>
            </div>
            <div class="col-8 col-sm-5">
                <input type="text" 
                    name="alumno_listado_intervenciones" 
                    id="alumno_listado_intervenciones"
                    class="input-text col-12"
                    placeholder="Nombre/apellido"
                    value="<?= isset($_POST["alumno_listado_intervenciones"]) ? $_POST["alumno_listado_intervenciones"] : "" ?>"/> 
            </div>
        </div>
        <table id="tabla_listado_intervenciones" 
            class="table my-4">
            <thead>
                <tr>
                    <th class="col-4">Fecha</th>
                    <th class="col-3">Grupo</th>
                    <th class="col-5 text-center">Alumno/a</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($intervenciones as $item) { 
                    $url=DIR_SERV."/selectAlumno";
                    $datos["api_session"]=$_SESSION["key"]["api_session"];
                    $datos["alumno"]= $item->cod_alu;
                    $respuesta=consumir_servicios_REST($url,"POST",$datos);
                    $obj=json_decode($respuesta);
                    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
                        
                    }
                    if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
                        
                    }
                    $alumno=$obj->Alumno;
                    ?>
                <tr>
                    <td class="col-4">
                        <button class="text-blue btn-none p-0" 
                                value="<?= $item->cod_intervencion ?>" 
                                name="btn_detalles_intervencion">
                            <?= $item->fecha ?>
                        </button>
                    </td>
                    <td class="col-3">
                        <button id="grupo_alumno_intervencion" 
                                class="text-blue btn-none p-0" 
                                value="<?= $item->cod_intervencion ?>" 
                                name="btn_detalles_intervencion">
                            <?= $item->cod_grupo ?>
                        </button>
                    </td>
                    <td class="col-5 text-center">
                        <button id="nombre_alumno_intervencion"
                                class="text-blue btn-none p-0" 
                                value="<?= $item->cod_intervencion ?>" 
                                name="btn_detalles_intervencion">
                            <?= $alumno->nombre." ".$alumno->apellidos  ?>
                        </button>
                    </td>
                </tr>           
                <?php } ?>
            </tbody>
        </table>
        
        <div class="col-12 justify-center mb-4">
            <button type="submit" 
                name="btn_gestion_intervenciones"
                class="text-link">
                Volver
            </button>
        </div>
    </form>
</div>

    