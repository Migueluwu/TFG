<?php
if(isset($_POST["btn_borrar_intervencion"])){
    $cod_intervencion = $_POST["btn_borrar_intervencion"];
} else {
    $cod_intervencion = $_POST["btn_detalles_intervencion"];
}
$url=DIR_SERV."/selectIntervencion";
$datos["api_session"]=$_SESSION["key"]["api_session"];
$datos["cod_intervencion"]= $cod_intervencion;
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

if(isset($_POST["btn_borrar_intervencion"])){ ?>
    <div id="atenua"></div>
    <div class="emergente row">
        <h1 class="mb-4 col-12 text-white section-title">
            ¿Seguro que desea borrar la intervención #<?= $cod_intervencion ?>?
        </h1>
        <p class="mt-3 text-white text-md text-center fw-bold">
            Esta accion es irrreversible, por lo que la intervención no podrá ser recuperada
        </p>
        <form action="index.php"
            method="post"
            class="row my-3">
            <div class="col-6 justify-center my-4">
                <button type="submit" 
                    name="btn_detalles_intervencion"
                    class="btn btn-md btn-yellow col-10 col-sm-8" value="<?= $cod_intervencion?>" >
                    Atrás
                </button>
            </div>
            <div class="col-6 justify-center my-4">
                <button type="submit" 
                    name="btn_confirmar_borrar_intervencion"
                    class="btn btn-md btn-yellow col-10 col-sm-8" value="<?= $cod_intervencion?>">
                    Borrar
                </button>
            </div>
        </form>
    </div>

<?php }?>

<h1 class="py-3 text-shadow section-title">
    Intervencion #<?= $cod_intervencion?>
</h1>
<form action="index.php"
    method="post"
    class="row px-2">
    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Tutor:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $profesor->nombre." ".$profesor->apellido ?>
        </span>

    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Unidad:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $intervencion->cod_grupo?>
        </span>
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Fecha:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $intervencion->fecha ?>
        </span>
        
    </div>
    
    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Alumno/a:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $alumno->apellidos.", ".$alumno->nombre ?>
        </span>
        
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Causa:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $intervencion->causa?>
        </span>
        
    </div>

    <div class="col-12 p-0 mb-1">
        <label class="label-form text-shadow p-0 col-12 col-sm-4">
            Tipo:
        </label>
        <span class="col-12 col-sm-8 text-blue">
            <?= $intervencion->tipo?>
        </span>

    </div>

    <div class="col-12 p-0 mb-1 mt-3">
        <label class="label-form text-shadow p-0 col-12">
            Intervención realizada:
        </label>
        <p class="col-12 text-blue text-break">
            <?= $intervencion->descripcion?>
        </p>
        
    </div>

    <div class="col-6 justify-center my-4">
        <button type="submit" 
            name="btn_borrar_intervencion"
            value="<?= $cod_intervencion ?>"
            class="btn btn-yellow btn-md col-sm-8">
            Borrar
        </button>
    </div>
    <div class="col-6 justify-center my-4">
        <button type="submit" 
            name="btn_editar_intervencion"
            value="<?= $cod_intervencion ?>"
            class="btn btn-yellow btn-md col-sm-8">
            Editar
        </button>
    </div>
    <div class="col-12 justify-center">
        <button type="submit" 
            name="btn_listado_intervenciones"
            class="text-link">
            Volver
        </button>
    </div>
</form>