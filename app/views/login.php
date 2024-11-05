<h1 class="py-3 text-shadow section-title">
    Inicio de sesión
</h1>
<form action="index.php"
    method="post"
    id="form-login"
    class="col-12">
    <label for="user"
        class="label-form text-shadow text-lg">
        Usuario:
    </label>
    <input type="text" 
        name="usuario" 
        id="user" 
        class="input-text mb-2"
        placeholder="Usuario o email de Séneca"
        required>
    
    <label for="password"
        class="label-form text-shadow text-lg">
        Contraseña:
    </label>
    <input type="password" 
        name="clave" 
        id="password" 
        class="input-text mb-2"
        placeholder="Contraseña de Séneca"
        required>

    <div class="error-block py-2 mb-3">
        <small class="text-danger text-shadow">
            <?php
                if(isset($_SESSION["seguridad"])){
                    print $_SESSION["seguridad"];
                    unset($_SESSION["seguridad"]);
                }
                if(isset($_SESSION["mensaje"])){
                    print $_SESSION["mensaje"];
                    unset($_SESSION["mensaje"]);
                }
            ?>
        </small>
    </div>

    <div class="col-12 justify-center mb-2">
        <button type="submit" 
            name="btn_login"
            class="btn btn-yellow">
            Entrar
        </button>
    </div>
</form>
<small class="text-center col-12">
    ¿Problemas con el inicio de sesión?
    <br>
    <a href="index.php"
        class="text-link text-center">
            Click aquí
    </a>
</small>