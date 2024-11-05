<?php


$url=DIR_SERV."/selectIntervencion";
    $datos["api_session"]=$_SESSION["key"]["api_session"];
    $datos["cod_intervencion"]= $_POST['btn_editar_intervencion'];
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
        
    }
    if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
        
    }
    $intervencion=$obj->intervencion;

$url=DIR_SERV."/selectAlumno";
    $datos["api_session"]=$_SESSION["key"]["api_session"];
    $datos["alumno"]= $intervencion->cod_alu;
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
        
    }
    if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
        
    }
    $alumno=$obj->Alumno;


    $url=DIR_SERV."/selectProfesor";
    $datos["api_session"]=$_SESSION["key"]["api_session"];
    $datos["profesor"]= $intervencion->cod_prof;
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
        
    }
    if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
        
    }
    $profesor=$obj->profesor;

?>

<h1 class="py-3 text-shadow section-title">
    Editar intervencion #<?= $_POST["btn_editar_intervencion"]?>
</h1>
<form action="index.php"
    method="post"
    class="row px-3">
    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Tutor:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $profesor->nombre." ".$profesor->apellido ?>
        </span>
        <input type="hidden" 
            name="profesor" 
            value="<?= $intervencion->cod_prof ?>">
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Unidad:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $intervencion->cod_grupo?>
        </span>
        <input type="hidden" 
            name="ud" 
            value="<?= $intervencion->cod_grupo?>">
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Fecha:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $intervencion->fecha ?>
        </span>
        <input type="hidden" 
            name="fecha" 
            value="<?= $intervencion->fecha ?>">
    </div>
    
    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Alumno/a:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $alumno->apellidos.", ".$alumno->nombre ?>
        </span>
        <input type="hidden" 
            name="alumno" 
            value="<?= $intervencion->cod_alu ?>">
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
            <?php foreach ($causas as $key => $item) { ?>
                <option value="<?= $item?>"
                    <?= $intervencion->causa == $item ? "selected" : "" ?>>
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
            <?php foreach ($tipos as $key => $item) { ?>
                <option value="<?= $item ?>"
                    <?= $intervencion->tipo == $item ? "selected" : "" ?>>
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
            required><?= $intervencion->descripcion ?></textarea>
    </div>

    <div class="col-12 justify-center my-4">
        <button type="submit" 
            name="btn_validar_editar_intervencion"
            value="<?= $_POST["btn_editar_intervencion"] ?>"
            class="btn btn-yellow btn-md col-sm-4">
            Validar
        </button>
    </div>
    <div class="col-12 justify-center">
        <button type="submit" 
            name="btn_detalles_intervencion"
            value="<?= $_POST["btn_editar_intervencion"] ?>"
            class="text-link">
            Volver
        </button>
    </div>
</form>