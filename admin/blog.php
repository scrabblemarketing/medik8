

<?php include 'includes/templates/header.php' ?>

<?php
    require 'includes/funciones/conexion.php';
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "SELECT * FROM blog WHERE id_blog = $id";
    $respuesta = $conn->query($sql);
    $blog = $respuesta->fetch_assoc();
}
?>



<div class="barra-seccion">

    <ul class="container nav justify-content-start">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Página de inicio ></a>
        </li>
        <li class="nav-item">
            <?php if(isset($_GET['id'])){ ?>
            <a href="blog.php?id=<?php echo $blog['id_blog'] ?>" class="nav-link"><?php echo $blog['slug'] ?></a>
            <?php }else{ ?>
                <a href="blog.php" class="nav-link">Blog | Lo recomendado</a>
            <?php } ?>
        </li>
    </ul>

</div>
<section class="container">
    <div class="blog-normal">
       <?php if($_GET['title']== 'vitaminaa'): ?>
       <img src="img/blog/vitamina.jpg" class="img-fluid" alt="">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo-principal">Expertos en Vitamina A</h1>
                <p>El Retinol (vitamina A) es el estándar de oro en el anti-envejecimiento. Muy respetado por dermatólogos y terapeutas de la piel por igual, es insuperable cuando se trata de mejorar los signos del fotoenvejecimiento. Como expertos en vitamina A, entendemos su importancia excepcional en la piel.</p>
            </div>
            <div class="col-md-8">
                
                <h4>ANTI-ENVEJECIMIENTO COMO NUNCA ANTES LO HA VISTO</h4>
                <p>La vitamina A es capaz de estimular el recambio celular en la piel, empujando las células frescas de la piel a la superficie para una apariencia más suave y juvenil. Esto ayuda a destapar los poros para una tez sin imperfecciones. La vitamina A también mejora la producción de colágeno para combatir las líneas finas y las arrugas, y ayuda a bloquear la formación de pigmento en la piel para obtener una piel más brillante y uniforme.</p>
                <p>Sin embargo, digámoslo ... La vitamina A tiene sus problemas. Cuando se administra a niveles lo suficientemente altos como para tener un efecto visible sobre el envejecimiento de la piel, puede causar irritación en forma de ardor, enrojecimiento y descamación. Así que decidimos hacer algo al respecto.</p>
                <p>Los efectos secundarios del retinol a menudo se asocian con el exceso de actividad que se administra demasiado rápido. Para contrarrestar esto, Medik8 desarrolló un exclusivo sistema de entrega Time Release (TR ™). Todos los sueros de vitamina A de Medik8 usan el encapsulado activo en un micro-fluido o caparazón de polímero. A medida que el suero se frota en la piel, la encapsulación se descompone y la vitamina A se libera lentamente en la piel. Esto minimiza significativamente el riesgo de irritación y asegura que los beneficios de la piel se reciben lentamente durante un período prolongado de tiempo. Es por eso que consideramos todos nuestros productos de retinol: “retinol inteligente”. </p>
                <p>En Medik8, también recomendamos que la aplicación de retinol se realice gradualmente. Hemos desarrollado una 'escalera de retinol' que permite que la piel se acostumbre al ingrediente:</p>
                <p>Al principio, comience con un producto de nivel de entrada de fuerza, como Retinol 3TR™ Intense dos veces por semana durante las primeras 2 semanas, y luego una vez en noches alternas durante otras 2 semanas y finalmente la aplicación diaria nocturna. Una vez que su piel ha desarrollado una tolerancia al ingrediente, puede pasar a una vitamina A de mayor concentración. </p>
                <img src="img/blog/blog-int.jpg" alt="" class="img-fluid">
                <p>Para nuestros productos de retinaldehído comience con Crystal Retinal 6™ y realice la fase en su rutina utilizando la escalera. Una vez que su piel esté lista, puede pasar a Crystal Retinal 10™. </p>
                <p>Medik8 tiene una gama de productos de vitamina A para cada tipo de piel y necesidad. No usamos los ésteres de retinilo tradicionales (como el palmitato de retinilo) porque son muy débiles y la piel los absorbe muy poco. En cambio, centramos toda nuestra atención en las formas de vitamina A que están científicamente comprobadas para proporcionar excelentes resultados. Eche un vistazo a la tabla de comparación a continuación.</p>  
                <p>Puede estar seguro de que nuestro nivel de entrada de vitamina A es mejor que el nivel más alto de muchos competidores.</p>
                
                
                   
            </div>
            <div class="col-md-4">
                <img src="img/sidebar-redness1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>RETINOL</h4>
                <p>La forma clásica de la vitamina A. Probado y confiado en numerosas revistas dermatológicas, retinol es la forma de vitamina A que ocupa los titulares. Cuando se aplica retinol a la piel, éste se somete a dos conversiones. Primero, se convierte en retinaldehÍdo y luego en ácido retinoico. El ácido retinoico es la forma activa de la vitamina A, la forma que realmente puede ser utilizada por la piel. Activa la renovación celular y la producción de colágeno para dar los sorprendentes efectos experimentados por los usuarios de retinol. Tenemos una completa colección de productos de retinol, que van desde Night Ritual Vitamin A™ (0.2%) para principiantes absolutos, hasta máxima potencia Retinol 10TR™ (1%) para usuarios experimentados de vitamina A.</p>  
            </div>
            <div class="col-md-4">
            <img src="img/blog/vita1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>RETINALDEHÍDO</h4>
                <p>Con la innovación en nuestro núcleo, simplemente no estábamos del todo satisfechos con nuestra gama de sueros de retinol inteligentes. Decidimos llevar la vitamina A al siguiente nivel e introducir el retinaldehído, una molécula de vitamina A de próxima generación que está un paso más cerca del ácido retinoico que el retinol. Brindando resultados hasta 11 veces más rápidos que las formas clásicas de retinol en Crystal Retinal 6™,1 el retinaldehído reaparece rápidamente en la piel mientras ayuda a reconstruir el colágeno. Entregado en un sistema de encapsulación de cristal, el activo se libera en el tiempo durante toda la noche. Esto significa que el retinaldehído es tan suave para la piel como el retinol, pero tiene efectos similares al ácido retinoico de alta graduación. A diferencia de las otras formas de vitamina A, el retinaldehído ejerce una acción antibacteriana directa, por lo que es el ingrediente ideal contra el envejecimiento de la piel propensa a las imperfecciones. Disponible en dos puntos fuertes diferentes, comience con Crystal Retinal 6™ para acostumbrar su piel a la nueva vitamina A, utilizando la escalera del retinol, y luego pase a Crystal Retinal 10™ cuando su piel esté lista. </p>
            </div>
            <div class="col-md-4">
                <img src="img/blog/vita2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>RETINIL RETINOATO</h4>
                <p>Un verdadero avance en el cuidado de la piel contra el envejecimiento, este activo innovador fue el resultado de 8 años de investigación en colaboración con un superlaboratorio coreano. Retinil retinoato es una molécula híbrida que fusiona el retinol y el ácido retinoico. Patentado en todo el mundo y exclusivo de Medik8, esta nueva molécula encapsulada exhibe propiedades de ambos ingredientes fuente: mejorar la actividad antienvejecimiento del retinol sin los efectos secundarios irritantes del ácido retinoico. Se encuentra en r-Retinoate®, aumenta la producción de colágeno y la reparación de arrugas hasta 8 veces más que el retinol estándar. Además, a diferencia de muchos otros derivados de vitamina A, el retinol retinoato es mucho más estable a la luz solar, lo que significa que puede usarse día y noche para obtener resultados acelerados. </p>
                <p>Si desea saber aún más sobre ingredientes de nuestra vitamina A, eche un vistazo a nuestro glosario en profundidad aquí. Y recuerde, siempre debe usar un protector solar el día que use cualquier producto de vitamina A de cualquier marca.</p>
            </div>
            <div class="col-md-4">
                <img src="img/blog/vita3.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-12">
                <h3>¿NECESITA AYUDA PARA ENCONTRAR SU VITAMINA A IDEAL? COMPRUEBE NUESTRA GUÍA PRÁCTICA A CONTINUACIÓN...</h3>
                <img src="img/blog/tabla.jpeg" alt="" style="display:block; margin:1rem auto;" class="img-fluid">
            </div>
        </div>



<?php elseif($_GET['title']== 'valores'): ?>
       <img src="img/blog/valores.jpg" class="img-fluid" alt="">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo-principal">Una marca antienvejecimiento 
que piensa como una marca natural</h1>
                <p>El bienestar ambiental es una causa cercana a muchos de nuestros corazones. En Medik8, reducimos nuestra huella ambiental en cada oportunidad. Elegimos hacer todo esto porque es mejor para el medioambiente y puede proporcionar formulaciones que son mejores para la piel. No podríamos hacerlo de otra manera.</p>
            </div>
            <div class="col-md-8">
                
                <h4>QUÍMICA VERDE</h4>
                <p>Química verde es la ciencia de hacer productos que usan un proceso de eficiencia energética, desde el origen de los ingredientes hasta la investigación inicial y la fabricación final. Usamos procesos en frío durante la fabricación siempre que sea posible. Esto significa que muchas de nuestras fórmulas se pueden mezclar a temperatura ambiente. Calentar grandes cantidades de producto para mezclar requiere mucha energía, por lo que trataremos de evitar esto si podemos durante el proceso de mezcla</p>                
                
                   
            </div>
            <div class="col-md-4">
                <img src="img/blog/valor1.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>OCÉANOS LIMPIOS</h4>
                <p>Como marca arraigada a la ciencia y la naturaleza, amamos y respetamos la vida marina. Es por eso que estamos 100% libres de microperlas y lo hemos sido durante años. En lugar de usar partículas de plástico que son dañinas para la vida marina, solo utilizamos exfoliantes naturales como las perlas de jojoba que se encuentran en Pore Refining Scrub™ y los microexfoliadores de bambú que se encuentran en Brightening Powder Cleanse™.</p> 
                <p>En 2018, retiramos todos los insertos de plástico de nuestras cajas de cartón y los reemplazamos con una tarjeta 100% reciclada, lo que hace que nuestras cajas sean completamente reciclables. Esto ahorra más de 3 toneladas de plástico cada año.</p>
            </div>
            <div class="col-md-4">
            <img src="img/blog/valor2.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>SALVANDO LOS BOSQUES</h4>
                <p>Cuando se trata de materiales basados en papel, no solo somos reciclables, sino que estamos hechos principalmente de materiales reciclados. Medik8 utiliza una tarjeta con certificación FSC para todos nuestros envases de cartón, lo que significa que proviene de bosques bien gestionados o fuentes recicladas. Verá el símbolo FSC en todos nuestros envases como una marca de dedicación a la causa. Tratamos de minimizar el desperdicio de papel en nuestras cajas de cartón para que sea lo más ecológico posible. </p>
            </div>
            <div class="col-md-4">
                <img src="img/blog/valor3.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>VIDRIO RECICLADO</h4>
                <p>Nos encanta usar vidrio. Todas nuestras botellas de suero están hechas de vidrio. Todas nuestras pipetas están hechas de vidrio. Desde 2018, las botellas de vidrio Medik8 contienen 40% de vidrio reciclado y estamos buscando aumentar esta cantidad en el futuro cercano.</p>
                <p>Dado que los resultados siempre son los primeros en Medik8, es inevitable que algunas de nuestras fórmulas requieran envases de plástico para mantenerse estables y activas. Pero donde sea que podamos implementar un envase ecológico, lo intentaremos. Uno de nuestros principales objetivos es aumentar el uso de materiales reciclados.</p>
            </div>
            <div class="col-md-4">
                <img src="img/blog/valor4.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>NUNCA TESTADO EN ANIMALES</h4>
                <p>Por supuesto éticamente, y según los estrictos requisitos de la normativa europea, no realizamos pruebas en animales. No pediremos a ninguna otra compañía que realice la prueba en nuestro nombre. Nos tomamos muy en serio la cuestión de verificar el cumplimiento de nuestros proveedores como parte integral de nuestro proceso de desarrollo de productos. Esperamos ansiosos el día en que las pruebas con animales estén prohibidas en todo el mundo para siempre. Leer más sobre nuestra política de prueba de productos aquí. </p>
            </div>
            <div class="col-md-4">
                <img src="img/blog/valor5.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>LIMPIO Y SEGURO PARA LA PIEL</h4>
                <p>Como expertos en el cuidado de la piel orientado a los resultados, sabemos qué agregar y qué evitar. Hay tantos ingredientes utilizados en el cuidado de la piel que no son necesarios, tratamos de purgar nuestras formulaciones donde podamos. No nos consideramos "libres de químicos", incluso la vitamina C se considera un químico, pero omitimos cualquier ingrediente que pueda causar preocupación, por ejemplo, SLS, parabenos, ftalatos. Ver aquí para más detalles.</p>
            </div>
            <div class="col-md-4">
                <img src="img/blog/valor6.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h4>CALIDAD SUPERIOR </h4>
                <p>Solo fabricamos productos para nosotros. Aun así, nos enorgullece informarle que contamos con la certificación ISO 22716 para fabricación cosmética, además de los sistemas de gestión de calidad ISO 9001: 2015, que incluyen nuestro compromiso con un excelente servicio al cliente.</p>
                <p>Esto es completamente voluntario y supone una gran carga para nuestro tiempo, pero creemos que es vital para cualquier empresa de tecnología tener auditorías externas periódicas para mantener alta la calidad y la precisión.</p>
            </div>
            <div class="col-md-4">
                <img src="img/blog/valor7.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-12 py-5">
                <h3>LAS CUATRO CAUSAS QUE APOYAMOS</h3>
                <p>En Medik8, nos esforzamos por crear formulaciones y tratamientos innovadores que tengan impacto en la industria del cuidado de la piel. Asimismo, creemos que es innegablemente importante apoyar a las organizaciones benéficas que tienen un increíble impacto positivo en los necesitados. En lugar de elegir solo 1 organización benéfica cada año, hemos elegido organizaciones benéficas dentro de 4 categorías que queremos apoyar y continuaremos eligiendo nuevas organizaciones benéficas a medida que crecemos.</p>
            </div>

            <div class="col-md-3">
                <img src="img/blog/valor8.jpg" alt="" class="img-fluid">
                <h4 class="text-center">INVESTIGACIÓN SOBRE EL CÁNCER</h4>
                <p class="text-center">Como empresa arraigada a la ciencia, apoyar esta valiosa investigación en nuevos tratamientos es importante para el ser humano. Nuestra compañía hace una donación a Cancer Research UK cada mes durante más de 10 años.</p>
            </div>
            <div class="col-md-3">
            <img src="img/blog/valor9.jpg" alt="" class="img-fluid">
                <h4 class="text-center">APOYO A NIÑOS LOCALES</h4>
                <p class="text-center">Apoyamos a Noah's Ark Children's Hospice, una organización benéfica local de nuestra oficina en el norte de Londres. Sin un hospicio para niños en nuestra región, esta caridad inspiradora está construyendo el suyo propio llamado The Ark (La Arca) para proporcionar cuidados paliativos en el final de la vida.</p>
            
            </div>
            <div class="col-md-3">
            <img src="img/blog/valor10.jpg" alt="" class="img-fluid">
                <h4 class="text-center">PROTECCIÓN DE LA BIODIVERSIDAD</h4>
                <p class="text-center">Hemos tomado medidas para proteger la selva primaria y los arrecifes de coral, y creemos que es importante apoyar a las organizaciones que ayudan al mundo a hacer lo mismo. Estamos en el proceso de elegir una pequeña organización benéfica que comparte nuestras creencias.</p>
            
            </div>
            <div class="col-md-3">
            <img src="img/blog/valor11.jpg" alt="" class="img-fluid">
                <h4 class="text-center">BIENESTAR ANIMAL</h4>
                <p class="text-center">Como somos parte de una industria que durante muchos años dio por hecho el bienestar animal, nos apasiona devolver algo. Actualmente estamos eligiendo una organización benéfica adecuada que planeamos respaldar a largo plazo.</p>
            
            </div>
        </div>

<?php elseif($_GET['title']== 'skin'): ?>
<img src="img/blog/skin.jpg" class="img-fluid" alt="">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo-principal">Skin Ageing</h1>
                <p>Cuando notamos que nuestra piel comienza a envejecer con líneas finas, arrugas, tono y textura irregulares, es muy tentador comprar la última crema milagrosa con la esperanza, en vano, de permanecer joven para siempre. Desafortunadamente, como sin duda ha experimentado usted mismo, a menudo nos decepcionan las promesas que no se entregan.</p>
                <p>En Medik8, pensamos diferente. Estamos en la ciencia, no en la ficción. Obtener resultados reales no significa que tenga que renunciar a una gran textura, una fragancia hermosa o ingredientes interesantes y seguros. Lejos de ahí. No va a creer lo increíble que es usar la línea de Medik8. El verdadero milagro es comprender y trabajar en armonía con la biología natural de la piel.</p>
            </div>
            <div class="col-md-6 p-4">
                
                <h4>VITAMINA C MÁS PROTECTOR SOLAR POR LA MAÑANA, VITAMINA A POR LA NOCHE.</h4>
                <p>Eso es. Nuestra filosofía central para tratar los signos de envejecimiento existentes (y preparar la piel para el futuro en el tiempo) es tan básica como CSA. Es así de simple. Nuestros científicos están liberados de la necesidad de desarrollar "historias" de belleza cada vez más exóticas y pueden centrarse en el último refinamiento de esta estrategia simple, que le proporciona exactamente lo que necesita y desea: resultados increíbles que puede ver y sentir.</p>
                <p>Leer más sobre nuestra filosofía principal aquí.</p>
                <p>Pregúntele a cualquier profesional del cuidado de la piel que esté al tanto y le dirá que Medik8 fue pionero en el concepto central de "vitamina C más protector solar por la mañana y vitamina A por la noche". Cuando se formulan adecuadamente, estos tres componentes trabajan juntos para ofrecer una protección óptima de la piel y una restauración avanzada.</p>
                <p>No importa su edad o condición de su piel, puede comenzar nuestra sencilla filosofía central de CSA con solo dos productos: Daily Radiance y Night Ritual. Profundice en CSA y puede adaptar su régimen óptimo con una gran cantidad de sueros y cremas.</p>
                    
                
                   
            </div>
            <div class="col-md-6 p-4">
                <img src="img/blog/skin1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 p-4">
            <img src="img/blog/skin2.jpg" class="img-fluid" alt="">
            
            </div>
            <div class="col-md-6 p-4">
            <h4>
PERO HAY MÁS.</h4>
                <p>Usando una combinación de antioxidantes potentes, retinoides reparativos, hidroxiácidos ultraexfoliantes y muchas otras moléculas cuidadosamente estabilizadas, las líneas y las arrugas se suavizan visiblemente al tiempo que protegen contra el daño solar futuro y la contaminación ambiental. Obtenga resultados visibles que realmente notará.</p>  
                <p>¿Listo para comenzar? Use la solución Skin Ageing ahora</p>
                <a href="lista.php" class="text-center my-4">COMPRAR AHORA</a>
                <p>¿HA PROBADO UNO DE LOS TRATAMIENTOS PROFESIONALES EN UN CENTRO PARA IMPULSAR REALMENTE LOS RESULTADOS? ECHE UN VISTAZO A NUESTRO MENÚ DE TRATAMIENTOS AQUÍ.</p>
            </div>
            
        </div>

<? else: ?>
<?php if(isset($blog)): ?>
        <img src="img/blog/<?php echo $blog['url_principal'] ?>" class="img-fluid" alt="">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo-principal"><?php echo $blog['titulo_blog'] ?></h1>
                <?php echo $blog['texto_secundario'] ?>
            </div>
            <div class="col-md-8">
            <?php echo $blog['contenido_blog'] ?>
            </div>
            <div class="col-md-4">
                <img src="img/blog/<?php echo $blog['url_barra'] ?>" class="img-fluid" alt="">
            </div>
        </div>
        <?php endif ?>
<?php endif ?>
    
    </div>


    <div class="seccion-blogs">
    <h3>MÁS SOBRE LA SOLUCIÓN REDNESS</h3>
        <div class="row">
        
            <div class="col-md-3">
                <div class="card">
                    <img src="img/blog.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <h5>CAUSA & PREVENCIÓN</h5>
                        <p>La piel sensibilizada y propensa a enrojecimiento es una preocupación muy común para la piel que enfrentan muchas personas...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                <img src="img/blog.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <h5>CAUSA & PREVENCIÓN</h5>
                        <p>La piel sensibilizada y propensa a enrojecimiento es una preocupación muy común para la piel que enfrentan muchas personas...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                <img src="img/blog.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <h5>CAUSA & PREVENCIÓN</h5>
                        <p>La piel sensibilizada y propensa a enrojecimiento es una preocupación muy común para la piel que enfrentan muchas personas...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                <img src="img/blog.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <h5>CAUSA & PREVENCIÓN</h5>
                        <p>La piel sensibilizada y propensa a enrojecimiento es una preocupación muy común para la piel que enfrentan muchas personas...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

  











<?php include 'includes/templates/footer.php' ?>
    