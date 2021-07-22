<body>
    <?php $url = "http://".$_SERVER['HTTP_HOST']."/login-php" ?>
    <nav>
        <h1 id="toogle">Administrador</h1>
        <ul class="navBar" id="menu">
            <li><a href="<?php echo $url?>/admin/inicio.php">Inicio</a></li>
            <li><a href="<?php echo $url?>/admin/section/gestion-pub.php">Gestionar Publicidad</a></li>
            <li><a href="<?php echo $url?>/admin/section/gestion-libros.php">Gestionar Libros</a></li>
            <li><a href="<?php echo $url?>" target="blank">Ver Sitio Web</a></li>
        </ul>
        <a href="#">Cerrar Sesión <i class="fas fa-sign-out-alt"></i></a>
    </nav>
    <script src="../admin.js"></script>
    <script src="admin.js"></script>