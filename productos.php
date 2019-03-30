

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


<!-- <section class="container">

    <div class="contenido-principal row">
        <div class="col-md-6">
            <div data-ride="carousel" id="carouselProducto" class="carousel slide">
                <div class="carousel-item active">
                    <img src="img/producto1.jpg" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/producto1-1.jpg" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/producto1-2.jpg" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/producto1-3.jpg" class="d-block w-100 img-fluid" alt="">
                </div>


                <a href="carouselProducto" role="button" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="carouselProducto" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
                    
               
               
                    
                    
                
            </div>
            <img src="img/producto1.jpg" class="img-fluid" alt="">
            <div class="owl-carousel">
                <div class="item">
                    <img src="img/producto1.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="img/producto1-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="img/producto1-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="img/producto1-3.jpg" class="img-fluid" alt="">
                </div>
                
            </div>  
        </div>
        <div class="col-md-6 mt-2">
            <h1>r-Retinoate® Intense</h1>
            <h3>Crema Activadora de Juventud Intensa</h3>
            <p>Sea el primero en dejar una reseña para este artículo </p>

            <span class="color-producto"></span>
            <p class="precio">50ml | S/.850,00</p>
            <table class="table-datos">
                <tr>
                    <td><i class="fas fa-check"></i> Sin Color Sintético </td>
                    <td><i class="fas fa-times"></i> Sin Fragancias Artificiales </td>
                </tr>
                <tr>
                    <td><i class="fas fa-check"></i> Sin Parabenos  </td>
                    <td><i class="fas fa-check"></i> Sin Ftalatos  </td>
                </tr>
                <tr>
                    <td><i class="fas fa-check"></i>  Donación de Zipper </td>
                    <td><i class="fas fa-check"></i>  Sin Alcohol </td>
                </tr>
                <tr>
                    <td><i class="fas fa-check"></i>  No Testado en Animales  </td>
                    <td><i class="fas fa-check"></i> Apto para Veganos </td>
                </tr>
            </table>
            <div class="resumen-description">
                <p>
                Transforme la evidencia del tiempo con el mejor producto antienvejecimiento de Medik8. r-Retinoate Intense es una crema de noche todo en uno que enriquece la piel con el poder puro de la transformación. Una mezcla revolucionaria de retinil retinoato y retinaldehído cristalizado se suspende dentro de un conjunto de cachemira de seda para una experiencia desafiadora de la edad que nunca deja de tentar los sentidos. Nunca antes se han utilizado en armonía estas dos moléculas legendarias, ambas respaldadas por numerosos ensayos clínicos robustos e independientes, para el rejuvenecimiento de la piel definitivo. Nunca antes se habían logrado resultados tan extraordinarios en casa. La suntuosa crema de noche está impregnada de ceramidas y péptidos de alta precisión que penetran en las capas más profundas de la piel donde los ingredientes activos regeneran profundamente y restauran visiblemente la apariencia de una piel hermosa.
                </p>
            </div>
            
            <div class="row agregar">
                <div class="col-3">
                    <div class="box-sb">
                        <a href="" class="boton-sb-b">
                            <span>-</span>
                        </a>
                        <span class="number">1</span>
                        <a href="" class="boton-sb-s">
                            <span>+</span>
                        </a>
                    </div>
                </div>
                <div class="col-5">
                    <a href="#" class="boton-agregar" data-id="2">Añadir al carrito</a>
                </div>
                <div class="col-4">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="" class="nav-link boton-agregar"><i class="fas fa-heart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link boton-agregar"><i class="far fa-chart-bar"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link boton-agregar"><i class="far fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <a href="" class="text-center">Envío & Devolución</a>
                <p class="disponibilidad">Disponibilidad: Disponible</p>
        </div>

    </div>

    <div class="row descripcion-producto">
        <div class="col-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a href="#beneficios" class="nav-link">Beneficios</a>
                </li>
                <li class="nav-item">
                    <a href="#ingredientes" class="nav-link">Ingredientes</a>
                </li>
                <li class="nav-item">
                    <a href="#modoUso" class="nav-link">Modo de Uso</a>
                </li>
            </ul>
            <div class="box-descripcion" id="beneficios">
                <p>Ocho veces más poderoso que el retinol y once veces más rápido también. Las líneas finas se desvanecen visiblemente y la luminosidad alcanza niveles indescriptibles. Simplemente masajee la crema de noche hidratante de tono albaricoque en el rostro, el cuello y el escote para descubrir sus beneficios sensoriales que desafían la edad. Esta crema de noche todo en uno ofrece tanto rejuvenecimiento durante la noche como hidratación profunda que puede ser el único producto requerido después de la limpieza en la noche. Las notas elegantes de la rica vainilla de Madagascar se combinan con los aromas cítricos suaves para promover el descanso perfecto por la noche, seguido de un resplandor radiante por la mañana.</p>
            </div>
            <div class="box-descripcion" id="ingredientes">
                <p>Aqua (Water), Caprylic/Capric Triglyceride, Glycerin, Butylene Glycol, Isododecane, Squalane, Cetearyl Alcohol, Dimethicone, Polylactic Acid, Sodium Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Cyclodextrin, PPG-12/SMDI Copolymer, Phenoxyethanol, Phytosterols, Cholesterol, Sodium Hyaluronate, Ceramide EOP, Ceramide NP, Ceramide AP, Cholesteryl Nonanoate, Linoleic Acid, Palmitic Acid, Canola Oil, Ethylhexylglycerin, Tocopheryl Acetate, Daucus Carota Sativa (Carrot) Seed Oil, Rubus Chamaemorus (Cloudberry) Seed Oil, Pentylene Glycol, Retinyl Retinoate, Retinal, Polyhydroxystearic Acid, Citrus Limon (Lemon) Peel Oil, Vanilla Planifolia (Vanilla) Fruit Extract, Citric Acid, Citrus Aurantium Dulcis (Orange) Peel Oil, Polyglyceryl-3 Polyricinoleate, Citrus Aurantium Amara (Bitter Orange) Leaf/Twig Oil, Sorbitan Olivate, Citrus Aurantium Bergamia (Bergamot) Fruit Oil, Citrus Nobilis (Mandarin) Peel Oil, Isostearic Acid, Phytosphingosine, Zingiber Officinale (Ginger) Root Extract, Lecithin, Carbomer, C12-16 Alcohols, Caprylyl Glycol, Cananga Odorata Flower (Ylang Ylang) Oil, Sodium Lauroyl Lactylate, Litsea Cubeba (Verbena) Fruit Oil, Ethyl Ascorbic Acid, Pelargonium Graveolens (Geranium) Oil, Lonicera Japonica (Honeysuckle) Flower Extract, Stearic Acid, Lonicera Caprifolium (Honeysuckle) Flower Extract, Xanthan Gum, Lactic Acid/Glycolic Acid Copolymer, Hydrogenated Lecithin, Sodium Polyaspartate, Acacia Decurrens (Black Wattle) Flower Extract, Boswellia Carterii (Frankincense) Oil, Cedrus Atlantica (Atlas Cedar) Bark Oil, Glyceryl Caprylate, Salvia Sclarea (Clary Sage) Leaf Oil, Vetiveria Zizanoides (Vetiver) Root Oil, Phenethyl Alcohol, Disodium EDTA, Copper Heptapeptide-14 Pantothenate, Heptapeptide-15 Palmitate, Phenylpropanol, Polyvinyl Alcohol, Titanium Dioxide, Alumina, BHT, Linalool, Limonene, Citral, CI 14700 (Red 4).</p>
            </div>
            <div class="box-descripcion" id="modoUso">
                <p>Aqua (Water), Caprylic/Capric Triglyceride, Glycerin, Butylene Glycol, Isododecane, Squalane, Cetearyl Alcohol, Dimethicone, Polylactic Acid, Sodium Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Cyclodextrin, PPG-12/SMDI Copolymer, Phenoxyethanol, Phytosterols, Cholesterol, Sodium Hyaluronate, Ceramide EOP, Ceramide NP, Ceramide AP, Cholesteryl Nonanoate, Linoleic Acid, Palmitic Acid, Canola Oil, Ethylhexylglycerin, Tocopheryl Acetate, Daucus Carota Sativa (Carrot) Seed Oil, Rubus Chamaemorus (Cloudberry) Seed Oil, Pentylene Glycol, Retinyl Retinoate, Retinal, Polyhydroxystearic Acid, Citrus Limon (Lemon) Peel Oil, Vanilla Planifolia (Vanilla) Fruit Extract, Citric Acid, Citrus Aurantium Dulcis (Orange) Peel Oil, Polyglyceryl-3 Polyricinoleate, Citrus Aurantium Amara (Bitter Orange) Leaf/Twig Oil, Sorbitan Olivate, Citrus Aurantium Bergamia (Bergamot) Fruit Oil, Citrus Nobilis (Mandarin) Peel Oil, Isostearic Acid, Phytosphingosine, Zingiber Officinale (Ginger) Root Extract, Lecithin, Carbomer, C12-16 Alcohols, Caprylyl Glycol, Cananga Odorata Flower (Ylang Ylang) Oil, Sodium Lauroyl Lactylate, Litsea Cubeba (Verbena) Fruit Oil, Ethyl Ascorbic Acid, Pelargonium Graveolens (Geranium) Oil, Lonicera Japonica (Honeysuckle) Flower Extract, Stearic Acid, Lonicera Caprifolium (Honeysuckle) Flower Extract, Xanthan Gum, Lactic Acid/Glycolic Acid Copolymer, Hydrogenated Lecithin, Sodium Polyaspartate, Acacia Decurrens (Black Wattle) Flower Extract, Boswellia Carterii (Frankincense) Oil, Cedrus Atlantica (Atlas Cedar) Bark Oil, Glyceryl Caprylate, Salvia Sclarea (Clary Sage) Leaf Oil, Vetiveria Zizanoides (Vetiver) Root Oil, Phenethyl Alcohol, Disodium EDTA, Copper Heptapeptide-14 Pantothenate, Heptapeptide-15 Palmitate, Phenylpropanol, Polyvinyl Alcohol, Titanium Dioxide, Alumina, BHT, Linalool, Limonene, Citral, CI 14700 (Red 4).</p>
            </div>
        </div>
        <div class="col-md-3">
            <h3 class="text-center">Conocimiento de Experto</h3>
            <p class="text-center">DESDE EL LABORATORIO</p>
            <img src="img/barra.jpg" alt="">
            <a href="#" class="boton-link">LINK</a>
        </div>
        <div class="col-md-9">
            <h3>Como Funciona </h3>
            <p>El producto de 8 años de investigación, la revolucionaria molécula retinil retinoato, es un híbrido de retinol tradicional y ácido retinoico de fuerza clínica. Su forma encapsulada es exclusiva de las formulaciones Medik8. Capaz de actuar directamente sobre la piel sin romper en partes, la molécula ayuda a estimular la regeneración celular y apoya la síntesis de colágeno. 8 veces más potente que el retinol, el retinil retinoato reduce visiblemente las líneas finas y arrugas, unifica el tono de la piel y suaviza la textura de la piel para una tez más juvenil.1 Increíblemente, se ha demostrado que el retinil retinato es fotoestable, lo que significa que no se descompone con la luz solar como las formas tradicionales de vitamina A y es lo suficientemente suave incluso para las pieles más sensibles. </p>
            <p>En 2018, Medik8 aprovechó el poder del retinaldehído en una inteligente encapsulación de cristal que libera suavemente el poderoso activo durante la noche para que la piel no se vea abrumada. 11veces más rápido que el retinol,2 el retinaldehído es casi tan poderoso como el ácido retinoico, mientras que permanece tan suave para la piel como el retinol tradicional. A diferencia de otras formas de vitamina A, el retinaldehído posee propiedades antibacterianas directas y potentes. Esto le permite atacar las bacterias causantes de imperfecciones, promoviendo un cutis sano, visiblemente claro.</p>
            <p>Sus poderes combinados, el retinil retinoato y el retinaldehído presentan lo último en el rejuvenecimiento de la piel. r-Retinoate Intense es realmente el producto antienvejecimiento más avanzado que hemos fabricado. Las ceramidas y los péptidos de cobre de alta precisión se mezclan intrincadamente en una crema hidratante que rebosa de nutrientes para la piel. Experimente un nuevo nivel de cuidado de la piel que desafía a la edad.</p>
            <p>1 Retinil retinoato apoya la síntesis de colágeno 8 veces más que el retinol Kim et al., Bioorganic & Medicinal Chemistry, 20018, 16, pp 6387-6393</p>
            <p>2 El retinil retinoato aumenta la síntesis de colágeno 8 veces más que el retinol
            Kim et al., Bioorganic & Medicinal Chemistry, 20018, 16, pp 6387-6393</p>
            

            <h3>Ingredientes Clave </h3>
            <p>Retinil Retinoato – 8 veces más potentes que el retinol y estable tanto de día como de noche , esta vitamina no irritante A estimula la síntesis de colágeno y ayuda a regenerar células de la piel.</p>
            <p>Retinaldehído encapsulado - demostrado que funciona hasta 11 veces más rápido que el retinol, el retinaldehído es una nueva forma revolucionaria de vitamina A que se dirige a las líneas finas y arrugas, la pigmentación y la textura desigual de la piel.</p>
            <p>Péptido de cobre de alta precisión - un péptido de cobre que soporta el colágeno, encapsulado en un sistema de polímero que se sumerge a través de las capas de la piel para atacar específicamente las células productoras de colágeno.</p>
            <p>Complejo de Ceramida - Una combinación inteligente de ceramidas que imitan la barrera lipídica natural de la piel. Restaura intensamente y nutre.</p>
            <p>Ácido Hialurónico Multi-peso – Con una capacidad única para atraer y retener más de 1.000 veces su propio peso en agua, se extrae la humedad del aire en la piel para proporcionar una hidratación intensa.</p>
            <p>Escualano - un emoliente natural, que ayuda a restaurar la barrera de defensa natural de la piel, a la vez que hidrata en profundidad para una piel suave y flexible.</p>
            <p>Vitamina E – Un antioxidante liposoluble que se encuentra naturalmente presente en la piel, la vitamina E protege la piel contra los radicales libres y regenera la vitamina C para una potencia óptima.</p>
        </div>
    </div>



    <div class="articulos">

    </div>

    <div class="tratamientos">

    </div>

    <div class="formulario">
        <form action="">
            <div class="form-group">
                <input type="text">
            </div>
            <div class="form-group">
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="text">
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar reseña">
            </div>
        </form>
    </div>




</section> -->

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
                    // foreach($puntos as $punto){
                        
                            $verificar[]=array_search($pos, $puntos);
                            
                        
                    // }
                }
                
                // var_dump($verificar);
               ?>
               <tr>
                    <td><i class="fas <?php echo ($verificar[0] != false)? 'fa-check' : 'fa-times'?>"></i> Sin Color Sintético </td>
                    <td><i class="fas <?php echo ($verificar[1] != false)? 'fa-check' : 'fa-times'?>"></i> Sin Fragancias Artificiales </td>
                </tr>
                <tr>
                    <td><i class="fas <?php echo ($verificar[2] != false)? 'fa-check' : 'fa-times'?>"></i> Sin Parabenos  </td>
                    <td><i class="fas <?php echo ($verificar[3] != false)? 'fa-check' : 'fa-times'?>"></i> Sin Ftalatos  </td>
                </tr>
                <tr>
                    <td><i class="fas <?php echo ($verificar[4] != false)? 'fa-check' : 'fa-times'?>"></i>  Donación de Zipper </td>
                    <td><i class="fas <?php echo ($verificar[0] != false)? 'fa-check' : 'fa-times'?>"></i>  Sin Alcohol </td>
                </tr>
                <tr>
                    <td><i class="fas <?php echo ($verificar[5] != false)? 'fa-check' : 'fa-times'?>"></i>  No Testado en Animales  </td>
                    <td><i class="fas <?php echo ($verificar[6] != false)? 'fa-check' : 'fa-times'?>"></i> Apto para Veganos </td>
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
    