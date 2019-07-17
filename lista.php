

<?php include 'includes/templates/header.php' ?>
<?php
 require 'includes/funciones/conexion.php';
    if(isset($_GET['categoria'])){
        $cat = $_GET['categoria'];
       
        $sql = "SELECT * FROM categoria  WHERE id_categoria = $cat";

        $respuesta = $conn->query($sql);

        $categoria = $respuesta->fetch_assoc();
    }elseif(isset($_GET['tipo'])){
        $tip = $_GET['tipo'];
       
        $sql = "SELECT * FROM productos  WHERE tipo = '{$tip}'";
        

        $respuesta = $conn->query($sql);

        $tipo = $respuesta->fetch_assoc();
    }
?>

<div class="barra-seccion">

        <ul class="container nav justify-content-start">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Página de inicio ></a>
            </li>
            <li class="nav-item">
                <a href="lista.php" class="nav-link">Productos </a>
            </li>
        </ul>

    </div>

<section class="lista-productos container">


    
    <div class="box-titulo">
    <?php if(!isset($cat) && !isset($tip)):?>
        <h1 class="titulo-principal">Productos</h1>
        <p>Descubra la gama de productos antiedad de Medik8 para el cuidado de la piel, directamente desde sus laboratorios y basados en soluciones cosmeceuticas. Busque por tipo de producto, preocupación de la piel y precio.</p>
<?php elseif(isset($cat)): ?>
        <h1 class="titulo-principal text-left"><?php echo $categoria['categoria'] ?></h1>
        <p><?php echo ($categoria['texto_descripcion']) ?></p>
<?php else: ?>

    <?php
    
    switch($tip){

        case 'Suero':
            echo '<h1 class="titulo-principal text-left">Sueros</h1>
            <p>Las armas secretas del cuidado de la piel, hemos estado produciendo sueros potentes desde el primer día. Los sueros trabajan en las capas más profundas de la piel para proporcionar tratamientos dirigidos a una variedad de preocupaciones sobre el cuidado de la piel. De acción rápida y con bellas texturas, descubra el poder de los sueros ligeros de Medik8 que proporcionan esos ingredientes activos clave justo donde se necesitan.</p>';
            break;

        case 'Hidratante':
            echo '<h1 class="titulo-principal text-left">Hidratantes</h1>
            <p>Las hidratantes de Medik8 ofrecen mucho más que simple hidratación. Revelan una piel suave, flexible y de aspecto más joven. Cada uno trabaja para nutrir, proteger e hidratar profundamente la piel. Con una amplia gama de cremas y sueros para atender las preocupaciones específicas del cuidado de la piel, puede elegir una hidratante adaptada a sus necesidades específicas.</p>';
            break;
        case 'Protector':
            echo '<h1 class="titulo-principal text-left">Protector</h1>
            <p>Se estima que el 80% del envejecimiento prematuro es causado por el sol. Es por eso que la filosofía central contra el envejecimiento de Medik8 prescribe la protección solar diaria como un paso esencial para prevenir el envejecimiento de la piel. Olvide esa textura grasa de la playa. Mezclado con filtros UV de alta calidad, ni siquiera se podría adivinar que las fórmulas de Medik8 incluso contienen protectores solares. Ligera y hermosa, nunca ha sido más fácil encontrar y disfrutar de la protección perfecta contra el sol.</p>';
            break;
        case 'Limpiador':
            echo '<h1 class="titulo-principal text-left">Limpiador</h1>
            <p>El primer paso en cada régimen de cuidado de la piel: la limpieza es esencial para eliminar las impurezas diarias mientras se acondiciona la piel. La piel completamente limpia también significa que los siguientes pasos en su régimen están optimizados: los sueros penetran más profundamente, las hidratantes repulpan aún más la piel, los ingredientes activos pueden hacer su mejor trabajo. Nuestra amplia gama de limpiadores cubre espumas ligeras, cremas suntuosas y geles exfoliantes suaves. Realmente hay uno para cada cual.</p>';
            break;
        case 'Mascarilla':
            echo '<h1 class="titulo-principal text-left">Mascarilla</h1>
            <p>Solucionadores de problemas potentes, las mascarillas absorben las impurezas y le dan a la piel un impulso importantísimo. Relájese, tómese su tiempo y disfrute de una experiencia de spa en el hogar, cortesía de Medik8.</p>';
            break;
        case 'Especifico':
            echo '<h1 class="titulo-principal text-left">Especifícos</h1>
            <p>Prevenir y corregir imperfecciones con nuestra gama de soluciones específicas para problemas comunes de cuidado de la piel.</p>';
            break;
        case 'Cuerpo':
            echo '<h1 class="titulo-principal text-left">Mascarilla</h1>
            <p>Tan importante como la piel en nuestro rostro, proteja su piel de la sequedad y el envejecimiento prematuro con tratamientos ricos y nutritivos para manos y cuerpo. Diseñado para uso independiente, o para ser aplicado después de salir de un baño caliente.</p>';
            break;
        case 'Ojos':
            echo '<h1 class="titulo-principal text-left">Especifícos</h1>
            <p>Las cremas y sueros para ojos de Medik8 están especialmente formulados para cuidar la delicada área de los ojos, que es mucho más delgada que el resto del rostro. Suaves pero efectivos, abordan los signos del envejecimiento, que incluyen bolsas, líneas finas y ojeras para una zona de los ojos más despierta y de aspecto más joven.</p>';
            break;
        case 'novedad':
            echo '<h1 class="titulo-principal text-left">Novedades</h1>
            <p>Nuestras últimas innovaciones y lanzamientos de productos.</p>';
            break;
        case 'premiado':
            echo '<h1 class="titulo-principal text-left">Productos Premiados</h1>
            <p>Descubra la marca de cuidado de la piel galardonada en todo el mundo por la que los consumidores, los expertos de la industria y los periodistas de belleza se han enamorado.</p>';
            break;
        case 'vendido':
            echo '<h1 class="titulo-principal text-left">Más Vendidos</h1>
            <p>Nuestros productos de cuidado de la piel más vendidos son populares por una razón. Descubra nuestra colección de productos favoritos para clientes de todo el mundo, desde limpiadores purificantes hasta sueros sedosos.</p>';
            break;




    }
        

    ?>
    
<?php endif ?>
    </div>

    <nav class="menu-productos">
        <div class="row">
            <div class="col-md-3">
                <a href="" class=""><i class="fas fa-sliders-h"></i></a>
            </div>
            <div class="col-md-3">
                <a href="#cuadro" class="botonera"><i class="fas fa-th"></i></a>
                <a href="#lista" class="botonera"><i class="fas fa-list-ul"></i></a>
            </div>
            <div class="col-md-3">
                <select name="" id="" class="botonera">
                    <option value="1">Ordernar por Posición</option>
                    <option value="2">Ordernar por Nombre del producto</option>
                    <option value="3">Ordernar por Precio</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="" id="" class="botonera">
                    <option value="1">Ordernar por Posición</option>
                    <option value="2">Ordernar por Nombre del producto</option>
                    <option value="3">Ordernar por Precio</option>
                </select>
                <a href="#" class="botonera" ><i class="fas fa-arrow-down"></i></a>
            </div>
        </div>
    </nav>


    <?php 


        $sql = "SELECT * FROM productos ";
        $sql .= " INNER JOIN categoria ON productos.id_cat=categoria.id_categoria";
        if(isset($categoria)){
            
            $sql .= " WHERE id_cat = $cat";
        }elseif(isset($tip)){
            $sql .= " WHERE tipo = '{$tip}'";
        }
        
            $respuesta = $conn->query($sql);
            
?>

    <div class="productos-cuadro row" id="cuadro">
        <?php while($producto= $respuesta->fetch_assoc()): ?>
        <?php $arreglo_productos[] = $producto;  ?>
        <?php endwhile ?>


        <?php
        $i = 0;
        $arreglo_second = array();
        foreach($arreglo_productos as $arr){
            
             
            if(!in_array($arr['titulo_producto'], $arreglo_second)){
                $arreglo_second[$i] = $arr['titulo_producto'];
                $productos[$i] = $arr;
                // echo "no";
            }
            $i++;
            
        }
            
        foreach($productos as $producto): ?>
        <?php $imagen = json_decode($producto['url_imagenes']) ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="productos.php?id=<?php echo $producto['id_producto'] ?>">
                        <img src="img/productos/<?php echo $imagen[0] ?>" class="img-fluid" alt="">
                        <nav class="menu-producto-card">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-search"></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="far fa-heart"></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="far fa-chart-bar"></i></a></li>
                            </ul>
                        </nav>
                        <span class="color-producto" style="background-color:<?php echo $producto['color'] ?>"></span>
                        <div class="card-body">
                            <h4><?php echo $producto['titulo_producto'] ?></h4>
                            <p><?php echo $producto['precio'] ?></p>
                        </div>
                    </a>
                    
                </div>
            </div>

        <?php endforeach ?>
        
    </div>

    <div class="productos-lista" id="lista">

    </div>


</section>













<?php include 'includes/templates/footer.php' ?>
    