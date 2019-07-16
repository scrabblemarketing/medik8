<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Medik8 | Pagina Oficial de Perú</title>



    <?php include 'includes/templates/icon.php' ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet"> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
    <header>
        <div class="container cabecera">
            <div class="row">
                <div class="col-4">
                    <ul class="nav menu-colores justify-content-start">

                        <li class="nav-item">
                            <a href="lista.php?categoria=2" class="nav-link boton boton1"><div></div>
                                <div class="muestra">Blemish</div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="lista.php?categoria=3" class="boton nav-link boton2"><div></div>
                                <div class="muestra">Recovery</div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="lista.php?categoria=4" class="nav-link boton boton3"><div></div>
                                <div class="muestra">Pigmentacion</div>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="lista.php?categoria=" class="nav-link boton boton4"><div></div>
                                <div class="muestra">Pore Refining</div>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="lista.php?categoria=6" class="nav-link boton boton5"><div></div>
                                <div class="muestra">Redness</div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="lista.php?categoria=1" class="nav-link boton boton6"><div></div>
                                <div class="muestra">Skin Aging</div>
                            </a>
                        </li>

                    </ul>
                    <nav class="navbar d-md-none nabvar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-color" aria-controls="menu-color" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse menu-principal" id="menu-color">
                            <ul class="navbar-nav nav-fill mx-auto w-100 justify-content-center d-md-none">
                                <li class="nav-item">
                                    <a href="blog.php?blog=descubra" class="nav-link">*Descubra* </a>
                                    <div class="nav-second row">
                                        <div class="col-6">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="lista.php" class="nav-link">Nuevo</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=novedad" class="nav-link">Novedades</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=vendido" class="nav-link">Más Vendidos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=1" class="nav-link">Filosofia CSA</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php" class="nav-link">Todos Productos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=vitaminaa" class="nav-link">Expertos en Vitamina A</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=valores" class="nav-link">Nuestros Valores</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="lista.php" class="nav-link">Más Vendidos</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=30" class="nav-link">Hydro8 B5</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=24" class="nav-link">r-Retinoate</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=11" class="nav-link">Calmwise Serum</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=29" class="nav-link">Advanced Day Total Protect</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=7" class="nav-link">C-Tetra + Intense</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=8" class="nav-link">C-Tetra Cream</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="lista.php" class="nav-link">Productos</a>
                                    <div class="nav-second row" style="left:-100%;">
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="productos.php" class="nav-link">POR TIPO DE PRODUCTO</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Suero" class="nav-link">Suero</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Hidratante" class="nav-link">Hidratante</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Protector" class="nav-link">Protector Solar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Limpiador" class="nav-link">Limpiador</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Mascarilla" class="nav-link">Mascarilla</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Especifico" class="nav-link">Específicos</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="lista.php" class="nav-link">POR PREOCUPACIÓN</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php" class="nav-link">Todos los productos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=1" class="nav-link">Skin Ageing</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=2" class="nav-link">Blemish</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=4" class="nav-link">Pigmentation</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=6" class="nav-link">Redness</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=3" class="nav-link">Recovery</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Ojos" class="nav-link">Ojos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Cuerpo" class="nav-link">Cuerpo</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="blog.php" class="nav-link">CSA</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=1" class="nav-link">Filosofía CSA</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?etiqueta=vitaminac" class="nav-link">Vitamina C </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?etiqueta=protector" class="nav-link">Protector Solar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?etiqueta=vitaminaa" class="nav-link">Vitamina A</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?etiqueta=advanced" class="nav-link">Línea Advanced</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="#" class="nav-link">DESCUBRA</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=24" class="nav-link">r-Retinoate</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=premiado" class="nav-link">Premiados</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=novedad" class="nav-link">Novedades</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=vendido" class="nav-link">Más Vendidos</a>
                                                </li>
                                            </ul>
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">La piel explicada</a>
         

                                    <div class="nav-second row" style="left:-150%;">
                                        <div class="col-3">
                                            <ul class="nav flex-column" >
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=2" class="nav-link">UNIVERSIDAD DE MEDIK8</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=glosario" class="nav-link">Glosario de Ingredientes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=10" class="nav-link">La Piel Explicada</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=13" class="nav-link">Aplicación en capas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=15" class="nav-link">Radicales Libres & Antioxidantes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?title=skin" class="nav-link">SKIN AGEING</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=diferencia" class="nav-link">La Diferenica Anti-edad de Medik8</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=38" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=lideres" class="nav-link">Líderes en Vitamina C</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=proteccion" class="nav-link">Especialistas en Protección Solar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=vitaminaa" class="nav-link">Expertos en Vitamina A</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=retinol-i" class="nav-link">Retinol Inteligente</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=descubre" class="nav-link">Descubra Retinal</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=16" class="nav-link">REDNESS - ENROJECIMIENTO</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=40" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=18" class="nav-link">Los Héroes de Redness</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=rutas" class="nav-link">6 Rutas para Calmar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=sensible" class="nav-link">Sensible vs Sensibilizada</a>
                                                </li>
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=20" class="nav-link">BLEMISH-IMPERFECCIONES</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=21" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=22" class="nav-link">3 Rutas para Piel Limpia</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=23" class="nav-link">Envejecimiento & Imperfecciones</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=24" class="nav-link">Acné Adulto & Adolescente</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=25" class="nav-link">Tipos de Imperfecciones</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=26" class="nav-link">Microbioma</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=27" class="nav-link">PIGMENTATION-PIGMENTACIÓN</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=enfoque" class="nav-link">Nuestro Enfoque de Pigmentación</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=28" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=29" class="nav-link">7 Rutas para Iluminar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=oxy" class="nav-link">Todo Sobre Oxy-R</a>
                                                </li>
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=50" class="nav-link">RECOVERY-RECUPERACIÓN</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=causa-recovery" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=heo" class="nav-link">Medik8 Marco H.E.O.</a>
                                                </li>
                                            </ul>
                        
                                        </div>
                                        <div class="col-3">
                                            <img src="img/menu1.jpg" class="img-fluid" alt="">
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">Tratamientos Profesionales</a>
                                    <div class="nav-second row">
                                        <div class="col-6">
                                            <ul class="nav flex-column">
                                                
                                                <li class="nav-item">
                                                    <a href="blog.php?id=32" class="nav-link">¿Por qué necesito un tratamiento profesional?</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=42" class="nav-link">¿Es un Peeling Adecuado Para Mí?</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=aydtratamientos" class="nav-link">Antes & Después</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=43" class="nav-link">Formación para los profesionales</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=36" class="nav-link">Encuentre su centro más cercano</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <img src="img/menu2.jpg" alt="" class="img-fluid">
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php#" class="nav-link">Sobre Medik8</a>
                                    <div class="nav-second row" style="right:-100%;">
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="blog.php" class="nav-link">NUESTRA CRUZADA</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=pielbella" class="nav-link">Piel Bella de por Vida</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=1" class="nav-link">Filosofía CSA</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=49" class="nav-link">El Fundador</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=bastidores" class="nav-link">Entre los Bastidores</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=48" class="nav-link">Investigación Original</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=tecnologias" class="nav-link">Tecnologías Únicas</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="" class="nav-link">NUESTROS VALORES</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=valores" class="nav-link">Pensamos Como Una Marca Natural</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=dentro" class="nav-link">Qué Hay Dentro de Medik8</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=45" class="nav-link">Dedicados a la Calidad</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=colaboracion" class="nav-link">Nos Encanta Colaborar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=46" class="nav-link">Somos Profesionales</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="contacto.php" class="nav-link">Contacto</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="contacto.php" class="nav-link">Contacto</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=44" class="nav-link">Donde Comprar Medik8</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=prensa" class="nav-link">¿Qué dice la prensa?</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <img src="img/menu3.gif" class="img-fluid" alt="">
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a href="productos.php?id=24" class="nav-link">r-Retionate ®</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>

                <div class="col-4">
                <a href="index.php">
                    <img src="img/logo.png" alt="" class="logo img-fluid">
                    </a>
                </div>

                <div class="col-4">
                    <ul class="justify-content-end nav compras-menu">
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fas fa-user-circle"></i></a>
                            <div class="nav-second">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="cuenta.php" class="nav-link">Mi Cuenta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cuenta.php" class="nav-link">Mi Lista de deseos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="login.php?accion=registro" class="nav-link">Crear una cuenta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="login.php?accion=inicio" class="nav-link">Iniciar Sesión</a>
                                    </li>    
                                </ul>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="far fa-heart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fas fa-shopping-bag"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 my-4">
                    <nav class="navbar navbar-expand-lg nabvar-light d-none d-md-flex">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse menu-principal" id="menu-principal">
                            <ul class="navbar-nav nav-fill mx-auto w-100 justify-content-center">
                                <li class="nav-item">
                                    <a href="blog.php?blog=descubra" class="nav-link">*Descubra* </a>
                                    <div class="nav-second row">
                                        <div class="col-6">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="lista.php" class="nav-link">Nuevo</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=novedad" class="nav-link">Novedades</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=vendido" class="nav-link">Más Vendidos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=1" class="nav-link">Filosofia CSA</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php" class="nav-link">Todos Productos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=vitaminaa" class="nav-link">Expertos en Vitamina A</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=valores" class="nav-link">Nuestros Valores</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="lista.php" class="nav-link">Más Vendidos</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=30" class="nav-link">Hydro8 B5</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=24" class="nav-link">r-Retinoate</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=11" class="nav-link">Calmwise Serum</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=29" class="nav-link">Advanced Day Total Protect</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=7" class="nav-link">C-Tetra + Intense</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=8" class="nav-link">C-Tetra Cream</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="lista.php" class="nav-link">Productos</a>
                                    <div class="nav-second row" style="left:-100%;">
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="productos.php" class="nav-link">POR TIPO DE PRODUCTO</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Suero" class="nav-link">Suero</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Hidratante" class="nav-link">Hidratante</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Protector" class="nav-link">Protector Solar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Limpiador" class="nav-link">Limpiador</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Mascarilla" class="nav-link">Mascarilla</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Especifico" class="nav-link">Específicos</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="lista.php" class="nav-link">POR PREOCUPACIÓN</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php" class="nav-link">Todos los productos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=1" class="nav-link">Skin Ageing</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=2" class="nav-link">Blemish</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=4" class="nav-link">Pigmentation</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=6" class="nav-link">Redness</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?categoria=3" class="nav-link">Recovery</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Ojos" class="nav-link">Ojos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=Cuerpo" class="nav-link">Cuerpo</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="blog.php" class="nav-link">CSA</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=1" class="nav-link">Filosofía CSA</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?etiqueta=vitaminac" class="nav-link">Vitamina C </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?etiqueta=protector" class="nav-link">Protector Solar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?etiqueta=vitaminaa" class="nav-link">Vitamina A</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?etiqueta=advanced" class="nav-link">Línea Advanced</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="#" class="nav-link">DESCUBRA</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="productos.php?id=24" class="nav-link">r-Retinoate</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=premiado" class="nav-link">Premiados</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=novedad" class="nav-link">Novedades</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="lista.php?tipo=vendido" class="nav-link">Más Vendidos</a>
                                                </li>
                                            </ul>
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">La piel explicada</a>
         

                                    <div class="nav-second row" style="left:-150%;">
                                        <div class="col-3">
                                            <ul class="nav flex-column" >
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=2" class="nav-link">UNIVERSIDAD DE MEDIK8</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=glosario" class="nav-link">Glosario de Ingredientes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=10" class="nav-link">La Piel Explicada</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=13" class="nav-link">Aplicación en capas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=15" class="nav-link">Radicales Libres & Antioxidantes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?title=skin" class="nav-link">SKIN AGEING</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=37" class="nav-link">La Diferenica Anti-edad de Medik8</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=38" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=lideres" class="nav-link">Líderes en Vitamina C</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=proteccion" class="nav-link">Especialistas en Protección Solar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=vitaminaa" class="nav-link">Expertos en Vitamina A</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=retinol-i" class="nav-link">Retinol Inteligente</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=descubre" class="nav-link">Descubra Retinal</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=16" class="nav-link">REDNESS - ENROJECIMIENTO</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=40" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=18" class="nav-link">Los Héroes de Redness</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=rutas" class="nav-link">6 Rutas para Calmar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=sensible" class="nav-link">Sensible vs Sensibilizada</a>
                                                </li>
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=20" class="nav-link">BLEMISH-IMPERFECCIONES</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=21" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=22" class="nav-link">3 Rutas para Piel Limpia</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=23" class="nav-link">Envejecimiento & Imperfecciones</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=24" class="nav-link">Acné Adulto & Adolescente</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=25" class="nav-link">Tipos de Imperfecciones</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=26" class="nav-link">Microbioma</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=27" class="nav-link">PIGMENTATION-PIGMENTACIÓN</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=enfoque" class="nav-link">Nuestro Enfoque de Pigmentación</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=28" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=29" class="nav-link">7 Rutas para Iluminar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=oxy" class="nav-link">Todo Sobre Oxy-R</a>
                                                </li>
                                                <li class="nav-item">
                                                    <h4><a href="blog.php?id=50" class="nav-link">RECOVERY-RECUPERACIÓN</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=causa-recovery" class="nav-link">Causa & Prevención</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=heo" class="nav-link">Medik8 Marco H.E.O.</a>
                                                </li>
                                            </ul>
                        
                                        </div>
                                        <div class="col-3">
                                            <img src="img/menu1.jpg" class="img-fluid" alt="">
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">Tratamientos Profesionales</a>
                                    <div class="nav-second row">
                                        <div class="col-6">
                                            <ul class="nav flex-column">
                                                
                                                <li class="nav-item">
                                                    <a href="blog.php?id=32" class="nav-link">¿Por qué necesito un tratamiento profesional?</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=42" class="nav-link">¿Es un Peeling Adecuado Para Mí?</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=aydtratamientos" class="nav-link">Antes & Después</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=43" class="nav-link">Formación para los profesionales</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=36" class="nav-link">Encuentre su centro más cercano</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <img src="img/menu2.jpg" alt="" class="img-fluid">
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php#" class="nav-link">Sobre Medik8</a>
                                    <div class="nav-second row" style="right:-100%;">
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="blog.php" class="nav-link">NUESTRA CRUZADA</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=pielbella" class="nav-link">Piel Bella de por Vida</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=1" class="nav-link">Filosofía CSA</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=49" class="nav-link">El Fundador</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=bastidores" class="nav-link">Entre los Bastidores</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=48" class="nav-link">Investigación Original</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=tecnologias" class="nav-link">Tecnologías Únicas</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="" class="nav-link">NUESTROS VALORES</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=valores" class="nav-link">Pensamos Como Una Marca Natural</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=dentro" class="nav-link">Qué Hay Dentro de Medik8</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=45" class="nav-link">Dedicados a la Calidad</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=colaboracion" class="nav-link">Nos Encanta Colaborar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=46" class="nav-link">Somos Profesionales</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <h4><a href="contacto.php" class="nav-link">Contacto</a></h4>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="contacto.php" class="nav-link">Contacto</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?id=44" class="nav-link">Donde Comprar Medik8</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog.php?title=prensa" class="nav-link">¿Qué dice la prensa?</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <img src="img/menu3.gif" class="img-fluid" alt="">
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a href="productos.php?id=24" class="nav-link">r-Retionate ®</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
        </div>
    </header>

    <!-- FIN MENU Y HEAD  -->