

<?php include 'includes/templates/header.php' ?>

<div class="container slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <!-- <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-100" alt="">
        </div> -->
        <div class="carousel-item active">
        <img src="img/slide2.jpg" class="d-block w-100" alt="">
        </div>
        <!-- <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
        </div> -->
        <div class="carousel-item">
        <img src="img/slide4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>

<section class="container principal my-5">

    <div class="parr-1">
        <h2>¿Por qué es Medik8 diferente?</h2>
        <p>Creemos que todos merecen una Piel Bella de por Vida. Esta es nuestra misión. Y es simple.<br>
            Todo lo que necesita hacer es seguir nuestra clara filosofía principal de CSA: vitamina C más protector solar por la mañana, vitamina A por la noche.
            Haga esto a los 30 y creemos que puede tener el aspecto de 40 años cuando tenga 50. Nunca es demasiado tarde para actualizar su cuidado de la piel.
            Si es nuevo en Medik8, solo necesita 2 productos para comenzar...</p>

            <a href="" class="boton-link">Descubre más</a>
    </div>

    <div class="categorias-link">
        <h2>¿Cuál es su preocupación?</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="lista.php?categoria=1" class="botones-second text-center">Envejecimiento de la piel</a>
            </div>
            <div class="col-md-4">
                <a href="lista.php?categoria=4" class="botones-second text-center">Pigmentación</a>
            </div>
            <div class="col-md-4">
                <a href="lista.php?categoria=2" class="botones-second text-center">Imperfecciones</a>
            </div>
            <div class="col-md-4">
                <a href="lista.php?categoria=3" class="botones-second text-center">Recuperación</a>
            </div>
            <div class="col-md-4">
                <a href="lista.php?categoria=6" class="botones-second text-center">Rojeces</a>
            </div>
            <!-- <div class="col-md-4">
                <a href="" class="botones-second text-center">Poros Dilatados</a>
            </div> -->
        </div>
    </div>

    <div class="carousel-productos">
        <h2>Los Más Populares</h2>
        <div class="articulos">
        <div class="owl-carousel productos-car">
            <?php 
            require 'includes/funciones/conexion.php';
                
                // echo $categoria;    
                $reque = "SELECT * FROM productos";
                $reque .= " INNER JOIN categoria ";
                $reque .= " ON productos.id_cat=categoria.id_categoria ";
                $reque .= " LIMIT 7";
                // echo $reque;
                // echo $reque;
                $p = $conn->query($reque);

                
            ?>
        <?php while($sli = $p->fetch_assoc()): 
        // var_dump($sli);
        $imagen = json_decode($sli['url_imagenes']);
        ?>
            <div class="item">
            
                    
                <div class="card">
                    <a href="productos.php?id=<?php echo $sli['id_producto'] ?>">
                        <img src="img/productos/<?php echo $imagen[0] ?>" alt="">
                        <span class="color-producto" style="background-color:<?php echo $sli['color'] ?>"></span>
                        <div class="card-body">
                            <h4><?php echo $sli['titulo_producto'] ?></h4>
                            <p><?php echo $sli['precio'] ?></p>
                        </div>
                        </a>
                </div>
                
            </div>
            <?php endwhile ?>
        </div>
    </div>

    </div>

    <div class="final-index">
        <h2>Libérese. Elija Limpio.</h2>
        <p>Existimos con un solo propósito, liberarle de la elección entre "resultados o experiencia". Hay tantas marcas de cuidado de la piel para elegir. Parece que le ofrecen una agradable experiencia de mimos, pero sin resultados, o una promesa de resultados, pero con envases, texturas y fragancias decepcionantes. Del mismo modo, tradicionalmente debía elegir entre cuidado de la piel 'limpio' y resultados. Si desea evitar todos los "productos químicos" que preocupan a las personas, debe ser ultra natural y renunciar a los resultados que sabemos que desea.</p>
        <p>Con Medik8, no necesita elegir porque puede tener ambos.</p>
    </div>

</section>


















<?php include 'includes/templates/footer.php' ?>