<?php
//Obtiene datos del alumno
$url=DIR_SERV."/selectAlumno";
    $datos["api_session"]=$_SESSION["key"]["api_session"];
    $datos["alumno"]= $_POST['alumno'];
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
        
    }
    if(isset($obj->mensaje_error)){
            $_SESSION["mensaje_error"]="Error estableciendo conexion con la base de datos. ".$obj->mensaje_error;
        
    }
    $alumno=$obj->Alumno;


if(isset($_POST["btn_confirmar_editar_intervencion"])){
    $url=DIR_SERV."/updateIntervencion";
    $datos["api_session"]=$_SESSION["key"]["api_session"];
    $datos["profesor"]=$_POST['profesor'];
    $datos["grupo"]=$_POST['ud'];
    $datos["alumno"]=$_POST['alumno'];
    $datos["causa"]=$_POST['causa'];
    $datos["tipo"]=$_POST['tipo'];
    $datos["fecha"]=$_POST['fecha'];
    $datos["descripcion"]=$_POST['descripcion'];
    $datos["cod_intervencion"]=$_POST['btn_confirmar_editar_intervencion'];
    $respuesta=consumir_servicios_REST($url,"POST",$datos);
    $obj=json_decode($respuesta);
    if(!$obj){
                $_SESSION["mensaje_error"]="Error consumiendo el servicio ".$url;
        
    }
    if(isset($obj->mensaje_error)){
        
    }
    if(isset($obj->mensaje)){
        $intervencion_editada=true;
    }
}
if(isset($intervencion_editada) && $intervencion_editada){?>

    <div id="atenua"></div>
    <div class="emergente row">
        <h1 class="mb-4 col-12 text-white section-title">
            Intervención editada
        </h1>
        <form action="index.php"
            method="post"
            class="col-12 mt-4">
            <div class="col-12 justify-center my-4">
                <button type="submit" 
                    value="<?= $_POST['btn_confirmar_editar_intervencion'] ?>"
                    name="btn_detalles_intervencion"
                    class="btn btn-md btn-yellow">
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

<?php } ?>

<h1 class="py-3 text-shadow section-title">
    Confirmar edición
</h1>
<form action="index.php"
    method="post"
    class="row px-2">
    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Tutor:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $datos_usuario->nombre." ".$datos_usuario->apellido ?>
        </span>
        <input type="hidden" 
            name="profesor" 
            value="<?= $_POST["profesor"] ?>">
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Unidad:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $_POST['ud']?>
        </span>
        <input type="hidden" 
            name="ud" 
            value="<?= $_POST['ud'] ?>">
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Fecha:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $_POST['fecha'] ?>
        </span>
        <input type="hidden" 
            name="fecha" 
            value="<?= $_POST['fecha'] ?>">
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
            value="<?= $_POST['alumno'] ?>">
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Causa:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $_POST['causa']?>
        </span>
        <input type="hidden" 
            name="causa" 
            value="<?= $_POST['causa'] ?>">
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Tipo:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $_POST['tipo']?>
        </span>
        <input type="hidden" 
            name="tipo" 
            value="<?= $_POST['tipo'] ?>">
    </div>

    <div class="col-12 p-0 mb-1 mt-3">
        <label class="label-form text-shadow p-0 col-12">
            Intervención realizada:
        </label>
        <p class="col-12 text-blue text-break">
            <?= $_POST['descripcion']?>
        </p>
        <input type="hidden" 
            name="descripcion" 
            value="<?= $_POST['descripcion'] ?>">
    </div>

    <div class="col-12 justify-center my-4">
        <button type="submit" 
            name="btn_confirmar_editar_intervencion"
            class="btn btn-yellow btn-md col-4"
            value="<?= isset($_POST['btn_validar_editar_intervencion']) ? $_POST['btn_validar_editar_intervencion'] :  "" ?>">
            Confirmar
        </button>
    </div>
    <div class="col-12 justify-center">
        <button type="submit" 
            name="btn_editar_intervencion"
            value="<?= isset($_POST['btn_validar_editar_intervencion']) ? $_POST['btn_validar_editar_intervencion'] :  "" ?>"
            class="text-link">
            Volver
        </button>
    </div>
</form>