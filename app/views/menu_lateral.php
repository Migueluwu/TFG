<nav id="menu-hamburguesa"
    class="<?= ($logged_in ? 'visible' : 'invisible') ?>">
    <div for="cb-hamburguesa" 
        id="hamb-icon">
        <span class="hamburguer-line"></span>
        <span class="hamburguer-line"></span>
        <span class="hamburguer-line"></span>
    </div>
    <span class="etiqueta-icono-header">
        Menú
    </span>
    <div id="menu-desplegable">
        <div id="menu-principal">
            <nav id="opt-menu">
                <a href="index.php"
                    class="drop-menu-option drop-menu-main-option">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentColor)"
                            d="M469.666,216.45,271.078,33.749a34,34,0,0,0-47.062.98L41.373,217.373,32,226.745V496H208V328h96V496H480V225.958ZM248.038,56.771c.282,0,.108.061-.013.18C247.9,56.832,247.756,56.771,248.038,56.771ZM448,464H336V328a32,32,0,0,0-32-32H208a32,32,0,0,0-32,32V464H64V240L248.038,57.356c.013-.012.014-.023.024-.035L448,240Z"
                            class="ci-primary" />
                    </svg>
                    <span class="ps-3 text-shadow">
                        INICIO
                    </span>
                </a>

                <form action="index.php" 
                    method="post"
                    class="mt-2">
                    <button type="submit" 
                        name="btn_gestion_intervenciones"
                        class="drop-menu-option drop-menu-main-option ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="var(--ci-primary-color, currentColor)" d="M496,144.768V111.232H456.768V42a25,25,0,0,0-25.179-24.768H80.411A25,25,0,0,0,55.232,42V472a25,25,0,0,0,25.179,24.768H431.589A25,25,0,0,0,456.768,472V400.768H496V367.232H456.768V272.768H496V239.232H456.768V144.768Zm-72.768,94.464H376v33.536h47.232v94.464H376v33.536h47.232v62.464H88.768V50.768H423.232v60.464H376v33.536h47.232Z" class="ci-primary"/>
                            <path fill="var(--ci-primary-color, currentColor)" d="M313.639,306.925h0l-28.745-18.685,13.82-33.655V201.714a65.714,65.714,0,1,0-131.428,0v52.557l12.721,34.684-27.646,17.97A48.972,48.972,0,0,0,130,348.129V400H336V348.129A48.972,48.972,0,0,0,313.639,306.925ZM304,368H162V348.129a17.084,17.084,0,0,1,7.8-14.373l49.033-31.872-19.547-53.3V201.714a33.714,33.714,0,0,1,67.428,0v46.557l-21.5,52.347L296.2,333.756h0a17.084,17.084,0,0,1,7.8,14.373Z" class="ci-primary"/>
                        </svg>
                        <span class="ps-3 text-shadow">
                            INTERVENCIONES
                        </span>
                    </button>

                    <button type="submit" 
                        name="btn_registro_intervenciones"
                        class="drop-menu-option ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <polygon fill="var(--ci-primary-color, currentColor)" points="440 240 272 240 272 72 240 72 240 240 72 240 72 272 240 272 240 440 272 440 272 272 440 272 440 240" class="ci-primary"/>
                        </svg>
                        <span class="ps-3 text-shadow">
                            Registrar intervención
                        </span>
                    </button>
                    <button type="submit" 
                        name="btn_listado_intervenciones"
                        class="drop-menu-option ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="var(--ci-primary-color, currentColor)" d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z" class="ci-primary"/>
                        </svg>
                        <span class="ps-3 text-shadow">
                            Consultar intervención
                        </span>
                    </button>
                    <button type="submit" 
                        name="btn_listado_intervenciones"
                        class="drop-menu-option ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="var(--ci-primary-color, currentColor)" d="M29.663,482.25l.087.087a24.847,24.847,0,0,0,17.612,7.342,25.178,25.178,0,0,0,8.1-1.345l142.006-48.172,272.5-272.5A88.832,88.832,0,0,0,344.334,42.039l-272.5,272.5L23.666,456.541A24.844,24.844,0,0,0,29.663,482.25Zm337.3-417.584a56.832,56.832,0,0,1,80.371,80.373L411.5,180.873,331.127,100.5ZM99.744,331.884,308.5,123.127,388.873,203.5,180.116,412.256,58.482,453.518Z" class="ci-primary"/>
                        </svg>
                        <span class="ps-3 text-shadow">
                            Editar intervención
                        </span>
                    </button>
                    <button type="submit" 
                        name="btn_listado_intervenciones"
                        class="drop-menu-option ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="var(--ci-primary-color, currentColor)" d="M96,472a23.82,23.82,0,0,0,23.579,24H392.421A23.82,23.82,0,0,0,416,472V152H96Zm32-288H384V464H128Z" class="ci-primary"/>
                            <rect width="32" height="200" x="168" y="216" fill="var(--ci-primary-color, currentColor)" class="ci-primary"/>
                            <rect width="32" height="200" x="240" y="216" fill="var(--ci-primary-color, currentColor)" class="ci-primary"/>
                            <rect width="32" height="200" x="312" y="216" fill="var(--ci-primary-color, currentColor)" class="ci-primary"/>
                            <path fill="var(--ci-primary-color, currentColor)" d="M328,88V40c0-13.458-9.488-24-21.6-24H205.6C193.488,16,184,26.542,184,40V88H64v32H448V88ZM216,48h80V88H216Z" class="ci-primary"/>
                        </svg>

                        <span class="ps-3 text-shadow">
                            Borrar intervención
                        </span>
                    </button>
                    <?php if($datos_usuario->is_jefatura){ ?>
                        <button name="btn_importar_csv"
                            class="drop-menu-option ps-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="var(--ci-primary-color, currentColor)" d="M256.2,16,56,215.993v38.632H176v144H336v-144H456V216ZM304,222.625v144H208v-144H94.639L256.174,61.254l161.21,161.371Z" class="ci-primary"/>
                                <rect width="400" height="32" x="56" y="462.625" fill="var(--ci-primary-color, currentColor)" class="ci-primary"/>
                            </svg>

                            <span class="ps-3 text-shadow">
                                Importar CSV
                            </span>
                        </button>       
                    <?php } ?>


                    <button type="submit" 
                        name="btn_gestion_aulas"
                        class="drop-menu-option drop-menu-main-option ps-0 mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="var(--ci-primary-color, currentColor)" d="M440,424V88H352V13.005L88,58.522V424H16v32h86.9L352,490.358V120h56V456h88V424ZM320,453.642,120,426.056V85.478L320,51Z" class="ci-primary"/>
                            <rect width="32" height="64" x="256" y="232" fill="var(--ci-primary-color, currentColor)" class="ci-primary"/>
                        </svg>
                        <span class="ps-3 text-shadow">
                            AULAS
                        </span>
                    </button>

                    <button type="submit" 
                        name="btn_gestion_aulas"
                        class="drop-menu-option ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <polygon fill="var(--ci-primary-color, currentColor)" points="440 240 272 240 272 72 240 72 240 240 72 240 72 272 240 272 240 440 272 440 272 272 440 272 440 240" class="ci-primary"/>
                        </svg>
                        <span class="ps-3 text-shadow">
                            Nueva reserva
                        </span>
                    </button>
                    <button type="submit" 
                        name="btn_gestion_aulas"
                        class="drop-menu-option ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="var(--ci-primary-color, currentColor)" d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z" class="ci-primary"/>
                        </svg>
                        <span class="ps-3 text-shadow">
                            Consultar reserva
                        </span>
                    </button>
                </form>                       
            </nav>
        </div>
    </div>
</nav>

<a href="index.php">
    <img class="header-logo"
        src="../public/img/logo_trans.gif" 
        alt="Logo IES Mar de Alaboran">
</a>

<button id="user-header"
    class="<?= ($logged_in ? 'visible' : 'invisible') ?>">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="var(--ci-primary-color, currentColor)" stroke="#2267A1" stroke-width="10" d="M411.6,343.656l-72.823-47.334,27.455-50.334A80.23,80.23,0,0,0,376,207.681V128a112,112,0,0,0-224,0v79.681a80.236,80.236,0,0,0,9.768,38.308l27.455,50.333L116.4,343.656A79.725,79.725,0,0,0,80,410.732V496H448V410.732A79.727,79.727,0,0,0,411.6,343.656ZM416,464H112V410.732a47.836,47.836,0,0,1,21.841-40.246l97.66-63.479-41.64-76.341A48.146,48.146,0,0,1,184,207.681V128a80,80,0,0,1,160,0v79.681a48.146,48.146,0,0,1-5.861,22.985L296.5,307.007l97.662,63.479h0A47.836,47.836,0,0,1,416,410.732Z" class="ci-primary"/>
    </svg>
    <span class="etiqueta-icono-header">
        Entrar/Registro
    </span>
    
</button>

<div id="datos-user"
    class="invisible p-2">
    <form action="index.php" method="post">
        <span class="fw-bold pe-2">
            <?= $datos_usuario->nombre." ".$datos_usuario->apellido?>
        </span>
        -
        <button name="btnCerrarSesion"
            class="text-link">
            Cerrar sesión
        </button>
    </form>
</div>