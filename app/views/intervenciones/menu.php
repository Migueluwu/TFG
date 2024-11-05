<h1 class="py-3 text-shadow section-title">
    Intervenciones
</h1>
<form action='index.php' method='post'>
    <button name="btn_registro_intervenciones"
        class="btn btn-lg btn-yellow my-3 col-12">
        Registrar intervención
    </button>
    <button name="btn_listado_intervenciones"
        class="btn btn-lg btn-yellow my-3 col-12">
        Consultar intervención
    </button>
    <button name="btn_listado_intervenciones"
        class="btn btn-lg btn-yellow my-3 col-12">
        Editar intervención
    </button>
    <button name="btn_listado_intervenciones"
        class="btn btn-lg btn-yellow my-3 col-12">
        Borrar intervención
    </button>
    <?php if($datos_usuario->is_jefatura){ ?>
        <button name="btn_importar_csv"
            class="btn btn-lg btn-yellow my-3 col-12">
            Importar CSV
        </button>       
    <?php } ?>
    <div class="text-center mt-4">
        <a href="index.php"
            class="text-link py-4 col-12">
            Volver al inicio
        </a>
    </div>
    
</form>   
