<?php require_once("vista/header.php");
?>
<body>
       <!-- mostrar la imagen con el fin de que sea dinamica la pagina -->
    <header>
    
    </header>

    <h1>Vista Principal para el cliente</h1>
    <div class="dropdown">
        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-list"></i> 
            
            <a><?php
                foreach($datosLogo as $key => $value) {
                    foreach($value as $va) {
                        echo "<td><img src='".$va['imagen']."' alt='imagen' heigt='50' width='100'></td>";
                    }
                }?>
            </a>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Imagen chedraui</a></li>
            <li><a class="dropdown-item" href="#">ingresa</a></li>
            <hr>
            <li><a class="dropdown-item" href="#">Folletos</a></li>
            <li><a class="dropdown-item" href="#">Recetas</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            <!-- lista de imagenes con direccion pero las direcciones seran dinamicas-->
             <li>
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="">5</a>
            </li>
            <hr>
            <h2>Departamentos</h2>
            <li><a class="dropdown-item" href="#">Supermercado</a></li>
            <li><a class="dropdown-item" href="#">Vinos y Licores</a></li>
            <li><a class="dropdown-item" href="#">Cuidado e higiene personal</a></li>
            <li><a class="dropdown-item" href="#">Farmacia</a></li>
            <li><a class="dropdown-item" href="#">Belleza</a></li>
            <li><a class="dropdown-item" href="#">Mascotas</a></li>
            <li><a class="dropdown-item" href="#">Bébes</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            <li><a class="dropdown-item" href="#">Ayuda</a></li>
            
        </ul>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            $index = 0;
            foreach($datos as $key => $value) {
                foreach($value as $va) {
                    $activeClass = ($index === 0) ? 'class="active" aria-current="true"' : '';
                    echo "<button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='{$index}' {$activeClass} aria-label='Slide ".($index + 1)."'></button>";
                    $index++;
                }
            }
            ?>
        </div>

        <div class="carousel-inner">
            <?php
            $index = 0;
            foreach($datos as $key => $value) {
                foreach($value as $va) {
                    $activeClass = ($index === 0) ? 'active' : '';
                    echo "<div class='carousel-item {$activeClass}'>";
                    echo "<img src='{$va['imagen']}' class='d-block w-100' alt='imagen' style='width:300px; height:200px; object-fit:cover'>";
                    echo "</div>";
                    $index++;
                }
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>