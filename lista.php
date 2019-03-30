

<?php include 'includes/templates/header.php' ?>
<?php
 require 'includes/funciones/conexion.php';
    if(isset($_GET['categoria'])){
        $cat = $_GET['categoria'];
       
        $sql = "SELECT * FROM categoria  WHERE id_categoria = $cat";

        $respuesta = $conn->query($sql);

        $categoria = $respuesta->fetch_assoc();
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
    <?php if(!isset($categoria)):?>
        <h1 class="titulo-principal">Productos</h1>
        <p>Descubra la gama de productos antiedad de Medik8 para el cuidado de la piel, directamente desde sus laboratorios y basados en soluciones cosmeceuticas. Busque por tipo de producto, preocupación de la piel y precio.</p>
<?php else: ?>
        <h1 class="titulo-principal"><?php echo $categoria['categoria'] ?></h1>
        <p><?php echo utf8_decode($categoria['texto_descripcion']) ?></p>
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
        if(!isset($producto)){
            $sql .= " WHERE id_cat = $cat";
        }
            $respuesta = $conn->query($sql);
?>

    <div class="productos-cuadro row" id="cuadro">
        <?php while($producto= $respuesta->fetch_assoc()): ?>


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


        <?php endwhile ?>
    </div>

    <div class="productos-lista" id="lista">

    </div>


</section>













<?php include 'includes/templates/footer.php' ?>
    