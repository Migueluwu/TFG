<?php
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

    if(isset($_POST["filtra_grupo_nueva"])){ //Si ya ha elegido un grupo en el select
        //Obtiene alumnos del grupo elegido
        $url=DIR_SERV."/selectAlumnos";
        $datos["api_session"]=$_SESSION["key"]["api_session"];
        $datos["grupo"]=$_POST["ud"];
        $respuesta=consumir_servicios_REST($url,"POST",$datos);
        $obj=json_decode($respuesta);
        if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
            
        }
        if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
            
        }
        $alumnos=$obj->Alumnos;
        
    } else {
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
    }

}else{
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
}

?>

<h1 class="py-3 text-shadow section-title">
    Nueva intervención
</h1>

<form action="index.php"
    method="post"
    class="row px-2"
    id="form_nueva_intervencion">
    <input type="hidden" name="filtra_grupo_nueva">
    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12">
            Tutor:
        </label>
        <input class="input-text input-disabled mb-2 col-12" 
            value="<?= $datos_usuario->nombre." ".$datos_usuario->apellido ?>"
            disabled> 
        <input type="hidden" 
            name="profesor" 
            value="<?= $datos_usuario->cod_prof ?>">
    </div>

    <div class="col-6 ps-0">
        <label for="ud_nueva_intervencion"
            class="label-form text-shadow p-0 col-12">
            Unidad:
        </label>
        <select name="ud" 
            id="ud_nueva_intervencion"
            class="input-text p-1 mb-2 col-12"
            required>
            <?php if(!$datos_usuario->is_jefatura && !$datos_usuario->is_orientacion && !$datos_usuario->is_cotutor){ ?>
                <option value = "<?= $datos_usuario->cod_grupo ?>"
                    selected>
                    <?= $datos_usuario->cod_grupo ?>
                </option>
            <?php }else{ ?>
                <option value=""
                        selected
                        disabled>
                        Unidad
                </option>
                <?php foreach ($grupos as $key => $item ) { ?>
                    <?php if ($item->cod_grupo !== "" && $item->cod_grupo !== null) {?>
                        <option value="<?= $item->cod_grupo ?>"
                            <?= (isset($_POST["ud"]) && $_POST["ud"] == $item->cod_grupo ? "selected" : "") ?>>
                            <?= $item->cod_grupo ?>
                        </option>
                    <?php } ?>
                <?php } ?>
            <?php } ?>   
        </select>
    </div>

    <div class="col-6 pe-0">
        <label for="fecha"
            class="label-form text-shadow p-0 col-12">
            Fecha:
        </label>
        <input type="date"
            id="fecha"
            name="fecha"
            class="input-text mb-2 col-12"
            value="<?= (isset($_POST["fecha"]) ? $_POST["fecha"] : date('Y-m-d')) ?>">
    </div>
    
    <div class="col-12 p-0">
        <label for="alumno"
            class="label-form text-shadow p-0 col-12">
            Alumno/a:
        </label>
        <select name="alumno" 
            id="alumno"
            class="input-text p-1 mb-2 col-12"
            required>
            <option value=""
                selected
                disabled>
                Alumno/a
            </option>
            <?php foreach ($alumnos as $key => $item) { ?>
                <option value="<?= $item->cod_alu ?>"
                <?= (isset($_POST["alumno"]) && $_POST["alumno"] == $item->cod_alu ? "selected" : "") ?>>
                    <?= $item->apellidos.", ".$item->nombre?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-12 p-0">
        <label for="causa"
            class="label-form text-shadow p-0 col-12">
            Causa:
        </label>
        <select name="causa" 
            id="causa"
            class="input-text p-1 mb-2 col-12"
            required>
            <option value=""
                selected
                disabled>
                Causa de la interevención
            </option>
            <?php foreach ($causas as $item) { ?>
                <option value="<?= $item?>"
                    <?= (isset($_POST["causa"]) && $_POST["causa"] == $item ? "selected" : "") ?>>
                    <?= $item ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-12 p-0">
        <label for="tipo"
            class="label-form text-shadow p-0 col-12">
            Tipo:
        </label>
        <select name="tipo" 
            id="tipo"
            class="input-text p-1 mb-2 col-12"
            required>
            <option value=""
                selected
                disabled>
                Tipo de intervención
            </option>
            <?php foreach ($tipos as $item) { ?>
                <option value="<?= $item ?>"
                <?= (isset($_POST["tipo"]) && $_POST["tipo"] == $item ? "selected" : "") ?>>
                    <?= $item ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-12 p-0">
        <label for="descripcion"
            class="label-form text-shadow p-0 col-12">
            Intervención realizada:
        </label>
        <textarea name="descripcion" 
            id="descripcion"
            placeholder="Introduzca los detalles de la intervención"
            class="p2 mb-2 col-12"
            rows="6"
            maxlength="300"
            required><?= (isset($_POST["descripcion"]) ? $_POST["descripcion"] : "") ?></textarea>
    </div>

    <div class="py-2 mb-3">
        <small class="fw-bold <?= ($error ? 'd-none' : 'd-block') ?>">* Todos los campos son obligatorios</small>
        <small class="text-danger fw-bold text-shadow <?= ($error ? 'd-block' : 'd-none') ?>">
            ** Campos vacíos
        </small>
    </div>

    <div class="col-12 justify-center mb-4">
        <button type="submit" 
            name="btn_registrar_intervencion"
            class="btn btn-md btn-yellow btn-md col-sm-4">
            Registrar
        </button>
    </div>
</form>
<form action="index.php"
    method="post">
    <div class="col-12 justify-center mb-4">
        <button type="submit" 
            name="btn_gestion_intervenciones"
            class="text-link">
            Volver
        </button>
    </div>
</form>
    