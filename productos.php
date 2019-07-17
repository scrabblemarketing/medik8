

<?php include 'includes/templates/header.php' ?>
<?php

    $id = $_GET['id'];
        require_once 'includes/funciones/conexion.php';
        $sql = "SELECT * FROM productos ";
        $sql .= " INNER JOIN categoria ";
        $sql .= " ON productos.id_cat=categoria.id_categoria ";
        $sql .= " WHERE id_producto = $id";
        $respuesta = $conn->query($sql);

        $producto = $respuesta->fetch_assoc();
?>

<div class="barra-seccion">

    <ul class="container nav justify-content-start">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Página de inicio ></a>
        </li>
        <li class="nav-item">
            <a href="index.php" class="nav-link">Tienda ></a>
        </li>
        <li class="nav-item">
            <a href="index.php" class="nav-link"><?php echo ($producto['titulo_producto'])?> </a>
        </li>
    </ul>

</div>


<section class="container">

   


    <div class="contenido-principal row">
        <div class="col-md-6">
            <div data-ride="carousel" id="carouselProducto" class="carousel slide">

                <?php
                    $imagenes = json_decode($producto['url_imagenes']);
                    $ind = 0;
                    foreach($imagenes as $imagen):
                        
                ?>
                
                <div class="carousel-item <?php echo ($ind == 0) ? 'active' : ''?> ">
                    <img src="img/productos/<?php echo $imagen ?>" class="d-block w-100 img-fluid" alt="">
                </div>
                <?php
                    $ind++;
                    endforeach; ?>
                <!-- <div class="carousel-item">
                    <img src="img/producto1-1.jpg" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/producto1-2.jpg" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/producto1-3.jpg" class="d-block w-100 img-fluid" alt="">
                </div> -->


                <a class="carousel-control-prev" href="#carouselProducto" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselProducto" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                    
               
               
                    
                    
                
            </div>
            <img src="img/producto1.jpg" class="img-fluid" alt="">
            <div class="owl-carousel">
                <?php foreach($imagenes as $imagen): ?>
                <div class="item">
                    <img src="img/productos/<?php echo $imagen ?>" class="img-fluid" alt="">
                </div>
                <?php endforeach ?>
                
                <!-- <div class="item">
                    <img src="img/producto1-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="img/producto1-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="img/producto1-3.jpg" class="img-fluid" alt="">
                </div> -->
                
            </div>  
        </div>
        <div class="col-md-6 mt-2">
            <h1><?php echo ($producto['titulo_producto']) ?></h1>
            <div class="frase">
            <?php echo ($producto['frase_producto']) ?>
            </div>
           

            <span class="color-producto" style="background-color:<?php echo $producto['color'] ?>"></span>
            <p class="precio"><?php echo utf8_encode($producto['precio']) ?></p>
            <table class="table-datos">
                <?php
                $puntos = json_decode($producto['seleccion']);

                $puntos_pos = array(1,2,3,4,5,6,7,8);
                
                foreach($puntos_pos as $pos){
                    if(array_search($pos, $puntos)){                        
                            $verificar[]=true;
                    }else{
                        $verificar[]=false;
                    }
                }
               ?>
               <tr>
                    <td><i class="fas <?php echo ($verificar[0]) ? 'fa-check' : 'fa-times'?>"></i> Sin Color Sintético </td>
                    <td><i class="fas <?php echo ($verificar[1]) ? 'fa-check' : 'fa-times'?>"></i> Sin Fragancias Artificiales </td>
                </tr>
                <tr>
                    <td><i class="fas <?php echo ($verificar[2]) ? 'fa-check' : 'fa-times'?>"></i> Sin Parabenos  </td>
                    <td><i class="fas <?php echo ($verificar[3]) ? 'fa-check' : 'fa-times'?>"></i> Sin Ftalatos  </td>
                </tr>
                <tr>
                    <td><i class="fas <?php echo ($verificar[4]) ? 'fa-check' : 'fa-times'?>"></i>  Donación de Zipper </td>
                    <td><i class="fas <?php echo ($verificar[5]) ? 'fa-check' : 'fa-times'?>"></i>  Sin Alcohol </td>
                </tr>
                <tr>
                    <td><i class="fas <?php echo ($verificar[6]) ? 'fa-check' : 'fa-times'?>"></i>  No Testado en Animales  </td>
                    <td><i class="fas <?php echo ($verificar[7]) ? 'fa-check' : 'fa-times'?>"></i> Apto para Veganos </td>
                </tr>
            </table>
            <div class="resumen-description">
            <?php echo ($producto['texto_descripcion']) ?>
            </div>
            
            <div class="row agregar">
                <div class="col-3">
                    <ul class="nav box-sb justify-content-center">
                        <li class="nav-item">
                            <a href="" class="boton-sb-b">
                                <span>-</span>
                            </a></li>
                        <li class="nav-item">
                         <span class="number">1</span>
                        </li>
                        <li class="nav-item">
                            <a href="" class="boton-sb-s">
                                <span>+</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-5">
                    <a href="#" class="boton-agregar" data-id="2">Añadir al carrito</a>
                </div>
                <div class="col-4">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="" class="nav-link boton-extra"><i class="fas fa-heart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link boton-extra"><i class="far fa-chart-bar"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link boton-extra"><i class="far fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-12 mt-5">
            <a href="" class="text-center">Envío & Devolución</a>
                <p class="disponibilidad">Disponibilidad: Disponible</p>
            </div>
            
        </div>
            </div>

    </div>

    <div class="row descripcion-producto">
        <div class="col-12">
            <ul class="nav justify-content-center menu-caracteristicas">
                <li class="nav-item">
                    <a href="#beneficios" class="nav-link active">Beneficios</a>
                </li>
                <li class="nav-item">
                    <a href="#ingredientes" class="nav-link">Ingredientes</a>
                </li>
                <li class="nav-item">
                    <a href="#modoUso" class="nav-link">Modo de Uso</a>
                </li>
            </ul>
            <div class="box-descripcion active" id="beneficios">
            <?php echo $producto['beneficios'] ?>
            </div>
            <div class="box-descripcion" id="ingredientes">
                <?php echo $producto['ingredientes'] ?>
            </div>
            <div class="box-descripcion" id="modoUso">
                <?php echo $producto['modo_uso'] ?>
            </div>
        </div>
        
        <div class="col-md-4 mt-5">
            <?php echo $producto['texto_barra'] ?>
            <img src="img/productos/<?php echo $producto['url_barra'] ?>" class="img-fluid" alt="">
            <a href="#" class="boton-link">LINK</a>
        </div>
        <div class="col-md-8 mt-5">
        <?php echo $producto['texto_principal'] ?>
        </div>
    </div>



    <div class="articulos">
        <h2 class="text-center text-uppercase">Artículos relacionados</h2>
        <div class="owl-carousel productos-car pro-int">
            <?php 
                $categoria = $producto['id_cat'];
                // echo $categoria;    
                $reque = "SELECT * FROM productos WHERE id_cat = $categoria";
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
                    <span class="color-producto" style="background-color:<?php echo $producto['color'] ?>"></span>
                    <div class="card-body">
                        <h4><?php echo $sli['titulo_producto'] ?></h4>
                        <p><?php echo $sli['precio'] ?></p>
                        <a href="" class="boton-link">Añadir al carrito</a>
                    </div>
                    </a>
                </div>
                
            </div>
            <?php endwhile ?>
        </div>
    </div>

    <div class="tratamientos">
                <?php echo $producto['texto_final'] ?>
    </div>

    <div class="formulario">
        <h4>Escribir tu propia reseña</h4>
        <p>Estás revisando: <?php echo $producto['titulo_producto'] ?></p>
        <form action="" class="resena">
            <div class="row">
            <div class="form-group col-md-6">
                <label for="">Apodo:</label>
                <input type="text" name="apodo">
                <label for="">Resumen</label>
                <input type="text" name="resumen">
            </div>
            <div class="form-group col-md-6">
                <label for="">Reseña</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            </div>
           
            <div class="form-group">
                <input type="submit" class="boton-link" value="Enviar reseña">
            </div>
        </form>
    </div>




</section>












<?php include 'includes/templates/footer.php' ?>
    