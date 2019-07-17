

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
    <?php if(isset($_GET['title'])): ?>
         <?php if($_GET['title'] == 'glosario'): ?>           
               
                    
                 <?php include 'includes/templates/glosario.php' ?>

        <?php elseif($_GET['title']== 'skin'): ?>

            <img src="img/blog/Skin-Ageing.jpg" class="img-fluid" alt="">
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo-principal">Skin Ageing</h1>
                    <p>Cuando notamos que nuestra piel comienza a envejecer con líneas finas, arrugas, tono y textura irregulares, es muy tentador comprar la última crema milagrosa con la esperanza, en vano, de permanecer joven para siempre. Desafortunadamente, como sin duda ha experimentado usted mismo, a menudo nos decepcionan las promesas que no se entregan.</p>

                    <p>En Medik8, pensamos diferente. Estamos en la ciencia, no en la ficción. Obtener resultados reales no significa que tenga que renunciar a una gran textura, una fragancia hermosa o ingredientes interesantes y seguros. Lejos de ahí. No va a creer lo increíble que es usar la línea de Medik8. El verdadero milagro es comprender y trabajar en armonía con la biología natural de la piel.</p>                
                </div>
                <div class="col-md-6">
                    
                    <h4>VITAMINA C MÁS PROTECTOR SOLAR POR LA MAÑANA, VITAMINA A POR LA NOCHE.</h4>
                    <p>Eso es. Nuestra filosofía central para tratar los signos de envejecimiento existentes (y preparar la piel para el futuro en el tiempo) es tan básica como CSA. Es así de simple. Nuestros científicos están liberados de la necesidad de desarrollar "historias" de belleza cada vez más exóticas y pueden centrarse en el último refinamiento de esta estrategia simple, que le proporciona exactamente lo que necesita y desea: resultados increíbles que puede ver y sentir.</p>
                    <p>Leer más sobre nuestra filosofía principal <a href="blog.php?id=1"> aquí.</a></p>
                    <p>Pregúntele a cualquier profesional del cuidado de la piel que esté al tanto y le dirá que Medik8 fue pionero en el concepto central de "vitamina C más protector solar por la mañana y vitamina A por la noche". Cuando se formulan adecuadamente, estos tres componentes trabajan juntos para ofrecer una protección óptima de la piel y una restauración avanzada.</p>
                    <p>No importa su edad o condición de su piel, puede comenzar nuestra sencilla filosofía central de CSA con solo dos productos: Daily Radiance y Night Ritual. Profundice en CSA y puede adaptar su régimen óptimo con una gran cantidad de sueros y cremas.</p>
                    
                    
                    
                </div>
                <div class="col-md-6">
                    <img src="img/blog/skin1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <img src="img/blog/skin2.jpg" class="img-fluid" alt="">
                    
                </div>
                <div class="col-md-6">
                    <h4 class="mt-5">PERO HAY MÁS.</h4>
                    <p>Usando una combinación de antioxidantes potentes, retinoides reparativos, hidroxiácidos ultraexfoliantes y muchas otras moléculas cuidadosamente estabilizadas, las líneas y las arrugas se suavizan visiblemente al tiempo que protegen contra el daño solar futuro y la contaminación ambiental. Obtenga resultados visibles que realmente notará.</p>  
                    <p>¿Listo para comenzar? Use la solución Skin Ageing ahora</p>
                    <a href="lista.php" class="text-uppercas text-center py-4">COMPRAR AHORA</a>
                    <p>¿HA PROBADO UNO DE LOS TRATAMIENTOS PROFESIONALES EN UN CENTRO PARA IMPULSAR REALMENTE LOS RESULTADOS? ECHE UN VISTAZO A NUESTRO MENÚ DE TRATAMIENTOS <a href="lista.php">AQUÍ</a>.</p>
                </div>
                

        <?php elseif($_GET['title']== 'proteccion'): ?>
            <img src="img/blog/vitamina.jpg" class="img-fluid" alt="">
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo-principal">Especialistas en protección solar</h1>
                    <p>80% de todos los signos de envejecimiento de la piel son causados por la exposición al sol.* El primer paso para cualquier rutina de cuidado de la piel antienvejecimiento debe comenzar con un amplio espectro SPF 30 aplicado todos los días, incluso cuando está nublado. Los rayos UVB del sol se dirigen a las capas superiores de la piel, causando quemaduras solares e incluso cáncer de piel, mientras que los rayos UVA penetran más en profundidad, destruyen el colágeno y crean radicales libres dañinos que causan el envejecimiento prematuro de la piel.</p>
                </div>
                <div class="col-md-8">
                    
                    <h4>LA CLASIFICACIÓN</h4>
                    <p>Todos los protectores solares tienen una calificación SPF que corresponde a su nivel de protección contra los rayos UVB. Pero SPF no es la única calificación que debe buscar en sus etiquetas de cuidado de la piel. El "amplio espectro" y el sistema de clasificación de estrellas le permiten medir el nivel de protección contra los rayos UVA también. Una clasificación de 'amplio espectro' indica que la protección UVA es al menos un tercio de la protección UVB. El sistema de estrella indica varias relaciones de protección UVA a UVB. Todos los protectores solares Medik8 son al menos de amplio espectro, con la gama avanzada de cremas de día alcanzando la calificación más alta 5 * de protección Ultra UVA.</p>
                    <h4>QUÍMICO CONTRA FÍSICO</h4>
                    <p>Hay dos tipos principales de protector solar: físico y químico. La principal diferencia entre los protectores solares físicos y los protectores solares químicos es su modo de acción. Los filtros solares químicos penetran en la piel y absorben los rayos UV, convirtiéndolos en energía térmica. Los protectores solares físicos generalmente se sientan en la parte superior de la piel, reflejando y dispersando los rayos UV como un espejo.</p>
                    <h4>PROTECTORES SOLARES FÍSICOS</h4>
                    <p>En el pasado, los protectores solares físicos se han empañado con la visión de que son opacos, pegajosos y generalmente incómodos de usar. Eso fue hasta la revolucionaria fórmula de Physical Sunscreen. Con una mezcla probada y comprobada de filtros minerales, dióxido de titanio y óxido de zinc, la fórmula increíblemente ligera proporciona una protección excepcional de amplio espectro FPS 30 contra el daño solar. Las nanopartículas a menudo se utilizan en los protectores solares para ofrecer una fórmula ligera y pura, sin embargo, algunos los consideran controvertidos en términos de seguridad. Medik8 Physical Sunscreen no usa nanopartículas, pero aún logra una fórmula deseable, ligera y no pegajosa que se funde a la perfección con la piel cuando se masajea. ¿Lo ha probado?</p>
                    <h4>PROTECTORES SOLARES QUÍMICOS</h4>
                    <p>Las fórmulas de protección solar químicas de uso diario a menudo usan filtros UV más baratos que son inestables, lo que significa que en realidad se degradan con la luz solar, derrotando el punto de aplicarlos en primer lugar. Hay muchos tipos de filtros químicos. Algunos afectados por su dudosa seguridad, e incluso se ha descubierto que algunos afectan la fertilidad. La buena noticia es que Medik8 no utiliza estos controvertidos ingredientes en nuestras formulaciones y, en su lugar, utiliza un conjunto de filtros fiables y seguros que creemos que son el futuro de los protectores solares. Es un hecho insoslayable que los filtros que utilizamos son más caros de incluir y más difíciles de formular, pero los resultados son claramente visibles, incluso en la textura del producto.</p>
                    <p>Utilizamos un trío cuidadosamente elegido de filtros químicos: Uvinul A Plus, Tinosorb S y Uvinul T 150. Combinados a niveles precisos, estos filtros de nueva generación brindan una protección de amplio espectro contra los rayos UVA y UVB, prácticamente sin la inestabilidad de los sistemas tradicionales de filtros químicos. Excepcionalmente estables al sol, completamente seguros y que ofrecen una alta protección, creemos que hemos alcanzado el premio gordo en la formulación de protección solar química perfecta. Encuentre estos filtros en nuestra línea Advanced y Daily Radiance Vitamin C™.</p>
                    
                    
                    
                </div>
                <div class="col-md-4">
                    <div class="caja-gris">
                        <h2 class="titulo-principal">Consejos para los protectores solares</h2>
                        
                    </div>
                    <div class="caja-gris">
                        <ol>
                            <li>Si hace sol de alta resistencia, apliquelo cada 2 horas para una protección óptima.</li>
                            <li>Aplique al menos ¼ de una cucharadita en su rostro, cuello y escote.</li>
                            <li>La sudoración, el contacto físico y el agua pueden afectar la cantidad de protección que está recibiendo. Vuelva a aplicar regularmente.</li>
                            <li> Reemplace su protector solar cada 12 meses para asegurarse de tener la protección más fresca y efectiva.</li>
                            <li>Asegúrese de no pasar por alto áreas discretas como las orejas y la parte posterior del cuello.</li>
                            <li>Para una protección óptima, deje al menos 20 minutos para que su protector solar se absorba antes de exponerse al sol.</li>
                        </ol>
                    </div>
                </div>
                <div class="col-12">
                    <h4>¿NECESITA AYUDA PARA ELEGIR SU PROTECCIÓN SOLAR? ECHE UN VISTAZO A NUESTRA GUÍA PRÁCTICA</h4>
                    <img src="img/blog/tabla-protect.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <?php elseif($_GET['title']== 'retinol-i'): ?>
                <img src="img/blog/retinol-blog.jpg" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-12">
                        <h1 class="titulo-principal">Retinol Inteligente de Medik8</h1>
                        <p>Como expertos en vitamina A, hemos creado algo para satisfacer las necesidades de todos. Con una gama completamente desarrollada que incluye sueros de retinol, retinaldehído y retinil retinoato, usted tiene la mejor selección de la vitamina A. Pero solo porque hemos desarrollado nuestro rango de retinoides más allá de los límites para incluir 3 formas de vitamina A, no creo que hayamos olvidado dónde comenzamos, con el estándar de oro ... el retinol. Ya tenemos mucha tecnología de retinol existente que nos distingue, pero nuestras últimas innovaciones 'Intense' mejoran los resultados aún más.</p>
                    </div>
                    <div class="col-md-8">
                        
                        <h4>PROBADO</h4>
                        <p>Uno de los ingredientes más conocidos y bien investigados en el cuidado de la piel, el retinol es probado y aclamado como el estándar de oro para los resultados anti-envejecimiento. Nunca usaremos ésteres de retinol (como el retinol palmitato), simplemente porque no creemos que funcionen.</p>
                        <p>Como con todas las cosas buenas, hay desventajas. El retinol tiene sus problemas. Cuando se administra demasiado rápido, puede abrumar la piel, causando irritación, como escozor, sequedad y enrojecimiento. Otro problema que enfrentamos al formular con retinol es que es extremadamente inestable. Una vez que se oxida, se vuelve inútil. El retinol es sensible al oxígeno, calor y luz. Muchas otras marcas simplemente aceptan estas caídas como un efecto secundario del uso de retinol. Pero no en Medik8.</p>
                        <h4>INNOVACIÓN DE EXPERTOS</h4>
                        <p>No somos como la mayoría de las marcas de cuidado de la piel. En Medik8, la innovación está en nuestro corazón y no descansamos hasta que encontramos la solución a los problemas del retinol. Para empezar, desarrollamos Retinol 3TR™: una fórmula tan inteligente que supera los problemas tradicionales del retinol y le brinda resultados de vitamina A del siguiente nivel, sin compromiso. Nuestro suero original de vitamina A tiene una fórmula inteligente que utiliza 2 factores clave que dejan de lado todos los problemas relacionados con el retinol y le proporcionan resultados reales que puede ver. </p>
                        <p>En primer lugar, utilizamos Time Release Technology ™, que libera lenta y consistentemente retinol en la piel a lo largo del tiempo. Usamos una tecnología llamada depósitos de polímeros, que actúan como una presa dentro de la piel, controlando la administración de retinol. Esto ayuda a minimizar cualquier irritación asociada con la vitamina A. También recomendamos introducir vitamina A lentamente en su rutina con la escalera de retinol que evita abrumar la piel, para que pueda obtener todos los beneficios del retinol, sin la irritación.</p>
                        <p>En segundo lugar, nuestros sueros se basan en aceite de cártamo nutritivo. Esto no solo cuida la piel con emolientes hidratantes, sino que también mantiene el retinol temperamental alejado del agua. El agua puede acelerar el proceso de oxidación, por lo que nuestras formulaciones sin agua ayudan a proteger el retinol. Creemos que fuimos la primera marca en introducir un suero de retinol libre de agua. El oxígeno es otro archienemigo del retinol. Por esta razón, fabricamos nuestros sueros de retinol en una cámara llena de nitrógeno, sin oxígeno a la vista. Esto protege al retinol de los efectos dañinos de la oxidación y nos da la máxima confianza en su estabilidad a lo largo del tiempo.</p>
                        <p>Nuestros sueros contienen antioxidantes que protegen al retinol de los radicales libres dañinos. Finalmente, todos nuestros sueros de retinol se producen en botellas ámbar especializadas y oscuras, que ayudan a evitar que la luz desestabilice el potente ingrediente activo. Utilizamos un riguroso proceso de prueba llamado HPLC para demostrar que hay suficiente retinol en nuestra fórmula después de 12 meses, como cuando comenzamos.</p>
                        <h4>IMPULSE SUS RESULTADOS</h4>
                        <p>Siempre innovadores, hemos desarrollado versiones supercargadas de nuestros sueros de retinol de culto para saciar el apetito de nuestros clientes leales. Retinol TR+ Intense presenta un revolucionario refuerzo de retinol, climbazole. Este ingrediente refuerza el poder antienvejecimiento del retinol, sin aumentar su potencial para irritar la piel. No solo eso, sino que hemos basado estas fórmulas en la hidratación del escualeno para nutrir y reponer la piel que necesita un poco de humedad adicional.</p>

<p>Con todos nuestros sueros de retinol con fórmulas inteligentes, métodos de fabricación innovadores y desarrollos interesantes, puede estar seguro de que está obteniendo la mejor vitamina A absoluta. ¿Por qué conformarse con cualquier otra cosa cuando puede tener Medik8?</p>
<a href="lista.php" class="text-center text-uppercase">COMPRAR AHORA</a>
                        
                        
                        
                    </div>
                    <div class="col-md-4">
                        <img src="img/blog/sidebar-csa (1).jpg" class="img-fluid " alt="">
                        <img src="img/blog/IntellegentRet1b.jpg" class="img-fluid mt-4" alt="">
                    </div>
            </div>
            <?php elseif($_GET['title']== 'descubre'): ?>
                <img src="img/blog/descubre.jpg" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-12">
                        <h1 class="titulo-principal">Crystal Retinal™: la ciencia del cuidado de la piel</h1>
                        <p>Cuando se trata de antienvejecimiento, no hay ingrediente en el mundo que pueda triunfar sobre la vitamina A en eficacia. Dicho esto, no toda la vitamina A se crea igual.</p>
                    </div>
                    <div class="col-md-8">
                        
                        
                        <p>El ácido retinoico es la forma más fuerte de vitamina A en el mercado. Funciona rápidamente para combatir significativamente los signos del envejecimiento, pero también presenta efectos secundarios extensos: sequedad excesiva, descamación, enrojecimiento e irritación, por nombrar algunos. Por esta razón, solo está disponible con receta de un médico o dermatólogo.</p>
                        <p>El Retinol es la forma más popular de vitamina A de venta libre. También brinda importantes resultados antienvejecimiento, pero la piel necesita convertirlo en ácido retinoico antes de que tenga efecto; un proceso que requiere una conversión de dos pasos:</p>
                        <img src="img/blog/celula.jpg" alt="" class="img-fluid">
                        <p>Esta conversión de dos pasos ralentiza el efecto del retinoico en la piel, lo que significa menos irritación, pero también significa que debe esperar mucho más para ver los resultados. ¿Qué pasa si hay una vitamina A que no necesita tanta conversión, por lo que se obtienen resultados más rápidos pero con una irritación mínima?</p>
                        <p>Siempre ansiosos por mejorar e innovar, los investigadores de Medik8 han aprovechado el poder de una nueva forma de vitamina A que cubre esa brecha entre el ácido retinoico y el retinol.</p>
                       
                        <h4>PRESENTAMOS CRYSTAL RETINAL</h4>
                        <p>Esta potente crema antiedad se ha formado con retinaldehído, una avanzada molécula de vitamina A que es el paso previo al ácido retinoico en el proceso de conversión de la vitamina A. Debido a que esta molécula avanzada solo requiere una conversión a ácido retinoico, puede suavizar la textura y enfocarse en líneas finas y arrugas comparables a la vitamina A de grado clínico hasta 11 veces más rápido que las formas clásicas de retinol.1 Aún mejor, sigue siendo tan cuidadoso con el piel como el retinol tradicional gracias al sistema de encapsulación en forma de cristal de Medik8.</p>
                        <h4>POTENCIA DE SIGUIENTE GENERACIÓN</h4>
                        <p>La encapsulación de cristal de Medik8 actúa como un mecanismo de liberación de tiempo así como también como un potenciador de estabilidad. El retinaldehido está dentro de un vehículo molecular en forma de cristal que se descompone por las enzimas naturales de la piel al contacto. Esta acción única controla el lanzamiento del activo para garantizar que la fórmula se mantenga estable. La absorción se optimiza y la fórmula altamente potente se distribuye de manera uniforme y consistente durante toda la noche.</p>
                        <h4>ÓPTIMA HIDRATACIÓN</h4>
                        <p>Con ácido hialurónico multi-peso y vitamina E, Crystal Retinal™ hidrata la piel en todos los niveles mientras fortalece la barrera de la piel para mantener la humedad encerrada.</p>
                        <h4>ACCIÓN CLARIFICANTE</h4>
                        <p>A diferencia de muchas otras formas de vitamina A, el retinaldehído incluso cuenta con propiedades antibacterianas directas y potentes, lo que lo convierte en el producto perfecto antienvejecimiento para pieles propensas a las imperfecciones. Cuando se usa con el tiempo, disminuye la bacteria responsable de los brotes para promover una tez sana y equilibrada.</p>
                        
                        <a href="lista.php" class="text-center text-uppercase d-block my-5">COMPRAR AHORA</a>
                        
                        <h4>LOS RESULTADOS HABLAN POR SÍ MISMOS</h4>
                        <img src="img/blog/descubre2.jpg" alt="" class="img-fluid">
                        
                        
                    </div>
                    <div class="col-md-4">
                        <img src="img/blog/descubre1.jpg" class="img-fluid mb-4" alt="">
                        <div class="caja-gris">
                            <h2 class="titulo-principal menor">
                            ¿Han notado un estancamiento en sus beneficios de retinol? Crystal Retinal puede avanzar su rutina antienvejecimiento al siguiente nivel.
                            </h2>
                        </div>
                    </div>
            </div>
            <?php elseif($_GET['title']== 'ruta'): ?>
                <img src="img/blog/ruta.jpg" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-12">
                        <h1 class="titulo-principal">Las 6 Rutas para Calmar</h1>
                        <p class="text-center">En Medik8, nos gusta mantener lo simple. Si bien la piel sensibilizada es una preocupación complicada para el cuidado de la piel, le proporcionamos a su piel todos los medios necesarios para reducir al enrojecimiento visible con 6 enfoques diferentes. Encuentra nuestras 6 rutas para calmarse en Calmwise™ Colour Correct, una solución todo en uno para pieles propensas a enrojecimiento.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center">1. ANTI-INFLAMACIÓN</h4>
                        <p class="text-center">La inflamación, roja y dolorida puede dejar la piel irritada, incómoda y caliente. Medik8 usa bisabolol, un extracto de la flor de manzanilla, que inhibe las señales inflamatorias para ayudar a controlar la irritación y el enrojecimiento. El Aloe Vera también se usa para ayudar a aliviar y calmar la tez.</p>
                        
                       
                    </div>
                    <div class="col-md-4">
                         <h4 class="text-center">2. FORTALECIMIENTO DE LA PIEL</h4>
                        <p class="text-center">La barrera natural de la piel juega un papel importante en la prevención de la pérdida de agua y en la detención de alérgenos e irritantes que causan inflamación en la piel. La niacinamida ayuda a estimular la producción de ceramidas, un lípido importante en la barrera natural de la piel, para mantener la tez protegida.</p>
                        
                        
                        
                       
                    </div>
                    <div class="col-md-4">
                         <h4 class="text-center">3. LIMITACIÓN DEL ENROJECIMIENTO</h4>
                        <p class="text-center">La inflamación puede causar la dilatación de los vasos sanguíneos, lo que finalmente aumenta el flujo de sangre debajo de la superficie de la piel y deja el cutis enrojecido e inflamado. La cafeína actúa como un constrictor de los vasos sanguíneos, lo que ayuda a regular el volumen y el flujo sanguíneo a través de la piel mientras reduce el enrojecimiento.</p>
                        
                        
                        
                       
                    </div>
                    <div class="col-md-4">
                         <h4 class="text-center">4. CAPILARES SALUDABLES</h4>
                        <p class="text-center">Los nuevos capilares sanguíneos que se forman son un efecto secundario de la inflamación crónica y pueden hacer que el enrojecimiento sea visible desde la superficie de la piel. La perfluorodecalina es un transportador de oxígeno que puede suprimir la formación de capilares sanguíneos más nuevos, dejando el cutis uniforme y libre de rubor.</p>
                        
                        
                        
                       
                    </div>
                    <div class="col-md-4">
                         <h4 class="text-center">5. RESPUESTA CALMANTE</h4>
                        <p class="text-center">La inflamación en la piel activa los glóbulos blancos y otras respuestas inmunes. El Aloe Vera y Bakuchiol de las semillas de babchi de la India ayudan a bloquear la activación de la respuesta inmune que puede causar enrojecimiento, dejando la piel libre de estrés y calmada.</p>
                        
                        
                        
                       
                    </div>
                    <div class="col-md-4">
                         <h4 class="text-center">6. COBERTURA INSTÁNEA</h4>
                        <p class="text-center">La teoría de color complementaria se ha utilizado en Calmwise™ Colour Correct. Rojo y verde se sientan uno frente al otro en la rueda de colores, por lo que los pigmentos minerales verdes ayudan a difuminar el enrojecimiento de la piel y equilibrar el tono de la piel. Esto crea un velo de enfoque suave que es la base ideal para el maquillaje.</p>
                        
                        <img src="img/blog/color.jpg" class="img-fluid" alt="">
                        
                       
                    </div>
                   
            </div>
            <?php elseif($_GET['title']== 'sensible'): ?>
                <img src="img/blog/sensible.jpg" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-12">
                        <h1 class="titulo-principal">Piel Sensible vs Sensibilizada</h1>
                        <p class="text-center">Mientras que el 60% de la población se clasifica a sí misma como sensible a la piel, muchos se confunden. ¹ La mayoría de los tipos de piel sensibles tienen una piel sensibilizada. Una condición irritante de la piel que surge como resultado de factores externos. La piel sensibilizada es fina o incluso translúcida en apariencia, aunque también seca y deshidratada. A menudo puede sentirse tirante después de la limpieza, se pone roja brillante y posiblemente con ardor u hormigueo.</p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-center">HEREDADO O ADQUIRIDO</h4>
                        <p class="text-center">La piel verdaderamente sensible se hereda y normalmente es propensa a enrojecerse y tener alergias. Los tipos de piel sensible tienen una piel particularmente fina y, a menudo, menos pigmento que conduce a una barrera de la piel que se rompe fácilmente. Los vasos sanguíneos a menudo están más cerca de la superficie y son fácilmente estimulados por irritantes externos.</p>
                        <p class="text-center">La piel sensibilizada generalmente es causada por el medio ambiente o las elecciones de estilo de vida. Factores como la contaminación, el estrés, la medicación, las hormonas, la dieta, los cambios climáticos, los productos para el cuidado de la piel y el tabaquismo pueden contribuir a una barrera cutánea alterada que permite a los agresores externos causar enrojecimiento o irritación.</p>
                        <p class="text-center">Desafortunadamente, como la piel sensible es genética, se puede hacer poco para curarla, pero sus síntomas se pueden calmar y manejar con un régimen especializado de cuidado de la piel. La piel sensibilizada, por otro lado, puede restaurarse mejorando la barrera natural de la piel y eliminando los factores externos que están causando que la piel se sensibilice.</p>

                        <h4 class="my-5">CÓMO TRATAR...</h4>
                        <h4>PIEL SENSIBILIZADA</h4>
                        <p>La piel sensible reacciona ante algo que ha cambiado en su entorno o estilo de vida. Mantenga su rutina de cuidado de la piel simple y elimine cualquier cosa que pueda estar causando irritación. La rehidratación y la restauración de la barrera natural de la piel es la forma más importante de tratar la piel sensibilizada.</p>
                        <p>Calmwise™ Serum contiene teprenona, un activo patentado que es efectivo para atenuar visiblemente el enrojecimiento en solo 1 mes.2 Nuestras células de la piel contienen una cadena de aminoácidos llamados telómeros. Estas cuerdas se acortan continuamente a medida que envejecemos, llegando a ser tan pequeños que las células dejan de funcionar. La teprenona ayuda a estabilizar los telómeros, lo que ayuda a prolongar la vida de una célula y, en consecuencia, a mejorar la barrera de la piel.</p>

                        <p>Calmwise™ Serum contiene teprenona, un activo patentado que es efectivo para atenuar visiblemente el enrojecimiento en solo 1 mes.2 Nuestras células de la piel contienen una cadena de aminoácidos llamados telómeros. Estas cuerdas se acortan continuamente a medida que envejecemos, llegando a ser tan pequeños que las células dejan de funcionar. La teprenona ayuda a estabilizar los telómeros, lo que ayuda a prolongar la vida de una célula y, en consecuencia, a mejorar la barrera de la piel.</p>
                        <p>Para calmar todos los días, use Calmwise™ Colour Correct. Este suero avanzado tiene 6 acciones específicas para restaurar la piel sensibilizada a la normalidad. Repleto de pigmentos verdes que se funden y se mezclan hábilmente con el tono de su piel, es ideal para camuflar el enrojecimiento de la piel sensibilizada, mientras trata sus causas con cuidado. La niacinamida estimula la síntesis de ceramidas (lípidos naturales que se encuentran en la piel) para ayudar a restaurar la barrera de la piel, mientras que la manzanilla calma la inflamación.</p>
                        <p>Un amplio espectro, alto SPF Physical Sunscreen™ también es vital para mantener protegida una nueva barrera cutánea.</p>
                        <h4>PIEL SENSIBLE</h4>
                        <p>Los síntomas de la piel sensible se pueden manejar mediante el uso de una rutina específica de cuidado de la piel que ayuda a calmar y suavizar la tez. Manténgase alejado de cualquier tratamiento que pueda adelgazar más la piel, como ácidos o peelings. En cambio, concéntrese en productos hidratantes y calmantes que no dañen la barrera de la piel. Use Calmwise ™ Soothing Cleanser para eliminar las impurezas del día. La fórmula cuidadosamente equilibrada en pH calma la piel y protege la barrera natural de la piel. Con clorofila, verde natural, el limpiador suave ayuda a desintoxicar y restablecer el equilibrio de la piel.</p>
                        
                       
                    </div>
                    <div class="col-md-6">
                        <div class="caja-gris">
                            <h2 class="titulo-principal">“60% de la población se clasifica a sí misma como sensible a la piel, muchos se confunden”</h2>
                        </div>
                         <h4 class="text-center">2. FORTALECIMIENTO DE LA PIEL</h4>
                        <p class="text-center">La barrera natural de la piel juega un papel importante en la prevención de la pérdida de agua y en la detención de alérgenos e irritantes que causan inflamación en la piel. La niacinamida ayuda a estimular la producción de ceramidas, un lípido importante en la barrera natural de la piel, para mantener la tez protegida.</p>
                        
                        <div class="row my-5">
                            <div class="col-md-6"><img src="img/productos/advanced-day-total-protect_spf-30_a.jpg" alt="" class="img-fluid"></div>
                            <div class="col-md-6"><img src="img/productos/hand-and-nail-cream_swatch.jpg" alt="" class="img-fluid"></div>
                        </div>

                        <div class="row my-5">
                            <div class="col-md-6"><img src="img/productos/retinol-3-tr-intense_a.jpg" alt="" class="img-fluid"></div>
                            <div class="col-md-6"><img src="img/productos/ultimate-recovery-intense_a.jpg" alt="" class="img-fluid"></div>
                        </div>
                        
                       
                    </div>
                    
                   
            </div>

        <?php elseif($_GET['title']== 'vitaminaa'): ?>
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
                    <img src="img/blog/sidebar-redness1.jpg" class="img-fluid" alt="">
                    <div class="caja-gris">
                        <h2 class="titulo-principal">
                        Centramos nuestra atención en las formas de vitamina A que están clínicamente probadas para proporcionar resultados
                        </h2>
                    </div>
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


            <?php elseif($_GET['title']== 'colaboracion'): ?>
                <img src="img/blog/Collaboration1a.jpg" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-12">
                        <h1 class="titulo-principal">La colaboración en nuestro núcleo</h1>
                        <p>Trabajar con otros ayuda a generar conocimiento. Medik8 se enorgullece de trabajar en colaboración con socios de todo el mundo para descubrir y seleccionar las mejores tecnologías para el cuidado de la piel.</p>
                    </div>
                    <div class="col-md-7">
                        
                        <h4>R-RETINOATE</h4>
                        <p>En el desarrollo del revolucionario suero de vitamina A, r-Retinoate®, Medik8 trabajó con un superlaboratorio coreano. El laboratorio coreano había creado una nueva molécula híbrida que fusiona el retinol con el ácido retinóico para crear una molécula nueva de retinil retinoato.
<br><br>
La investigación detrás de este ingrediente fue tan impresionante que ganó múltiples premios, incluido el Premio Presidencial del Ministerio de Salud de Corea. Luego colaboramos con químicos analíticos en el Reino Unido para poner la molécula en una fórmula estable que los clientes adorarán. Numerosos desafíos técnicos tuvieron que superarse para crear la fórmula final. Pero después de 8 años combinados de investigación dedicada, produjimos un suero mundial galardonado que sigue siendo incomparable en el mercado antienvejecimiento.


</p>                
                        
                        
                    </div>
                    <div class="col-md-5 mb-4">
                        <img src="img/blog/Collaboration1b.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-5">
                        <img src="img/blog/Collaboration1c.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h4>CRYSTAL RETINAL</h4>
                        <p>Para evaluar la estabilidad de nuestro último avance en la vitamina A, Crystal Retinal 6 & 10™, Medik8 trabajó con la Facultad de Ciencias de la Vida de la Universidad de Hertfordshire, un centro líder para la investigación de entrega de fármacos tópicos.
<br><br>
El ingrediente activo retinaldehído es notoriamente difícil de estabilizar. Después de investigar varios sistemas de encapsulación para retinaldehíydo, seleccionamos un sistema ingenioso de un superlaboratorio estadounidense y posteriormente utilizamos el conocimiento y las instalaciones de la universidad para probar la eficacia de estos sistemas de estabilización a lo largo del tiempo, incluido un complejo estabilizador pendiente de patente adicional. El resultado fue una fórmula súper estable que estamos seguros ofrecerá resultados excepcionales incluso un año después de la apertura.
</p>
                    </div>
                    <div class="col-12 mt-5">
                        <h4 class="text-center">EXPERTOS DE LA INDUSTRIA</h4>
                        <p class="text-center">Nos encanta colaborar con expertos de la industria de la belleza y con los amantes de Medik8. A menudo trabajamos con expertos de la industria como la Dra. Uliana Gout, fundadora de London Aesthetic Medicine Services Ltd, para clases magistrales y eventos de prensa. Trabajar con Bridget March, editora digital de belleza de Harper's Bazaar UK para crear un hermoso contenido de video fue un verdadero destaque para Medik8 en 2017. </p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5PO3BSwd-KU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="margin:1.5rem auto; display:block   " allowfullscreen></iframe>
                    </div>
                    
                    
                </div>
                <?php elseif($_GET['title']== 'dentro'): ?>
                <img src="img/blog/Whatgoesinside1a.jpg" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-12">
                        <h1 class="titulo-principal">¿Qué hay dentro de Medik8?</h1>
                        <p>Con años de experiencia en formulación, sabemos exactamente qué debería contener y qué debería quedar fuera de una formulación. Siempre estamos aprendiendo y buscando constantemente mejorar nuestros productos. Como una formulación flexible e independiente, podemos realizar ajustes relativamente rápidos para garantizar que los productos estén en sintonía con las últimas ideas.
                        <br><br>
                        Hay literalmente miles de ingredientes activos disponibles. La excelencia proviene no solo de la selección y el origen de estos activos, sino también de la manera en que se combinan en una fórmula. Cada una de las soluciones Medik8 tiene una gama de ingredientes básicos que se incluyen en todos los productos. Por ejemplo, el oxyresveratrol se usa en todas nuestras soluciones de iluminación y el ácido salicílico es un ingrediente clave para la descongestión en nuestra solución de imperfecciones. Nuestros ingredientes son escrupulosamente seleccionados a mano en base a su investigación, respaldo, afinidad por la piel y efectos excepcionales en la tez.</p>
                    </div>
                    <div class="col-md-6">
                        
                        <h4>CRUELTY-FREE</h4>
                        <p>Nunca probamos en animales. Y nunca le pedimos a ninguna otra compañía que pruebe en nuestro nombre.
<br><br>
Desafortunadamente, muchos de los ingredientes más comunes utilizados en cosméticos han sido probados en animales en el pasado (nunca por nosotros). Pero las pruebas en animales ahora han sido prohibidas en la UE, y las últimas regulaciones cosméticas de la UE (2013) impiden el uso de ingredientes probados en animales después de la fecha límite. Nos tomamos muy en serio el tema de verificar nuestro cumplimiento como parte integral de nuestro proceso de desarrollo de productos y selección de proveedores.
<br><br>
Cada vez más países escuchan que los consumidores simplemente no quieren las pruebas en animales. Creemos que es solo cuestión de tiempo antes de que las pruebas con animales estén prohibidas en todo el mundo, para siempre, y no podemos esperar.
                    <h4>LIBRES DE PARABENOS</h4>
                    <p>Estamos felices de estar 100% libres de parabenos.
                    <br><br>
                    Los conservantes son una parte esencial de cualquier formulación cosmética: impiden que nuestros productos se deterioren con el tiempo. Es posible eliminar completamente los conservantes de algunos productos (y lo hemos hecho), y también utilizar alternativas más limpias (que también lo hemos hecho). Trabajamos arduamente al formular con bajos niveles de conservantes para que el trabajo se realice sin productos químicos innecesarios. Esto requiere extensas pruebas independientes, pero nos complace hacerlo si significa crear productos de cuidado de la piel más limpios para nuestros clientes.
                    <br><br>
                    Para evitar dudas, todos los conservantes utilizados dentro de los productos Medik8 están aprobados por la UE y se usan estrictamente sólo a las concentraciones permitidas.                  </p>                
                    
                    <h4>CIENCIA VS NATURALEZA</h4>
                        <img src="img/blog/Whatgoesinside1c.jpg" alt="" class="img-fluid">
                        <p>La naturaleza nos ofrece una gran cantidad de regalos que son altamente efectivos en el cuidado de la piel. Pero la línea entre ciencia y naturaleza no siempre es tan blanca y negra como pueda parecer. En la naturaleza se encuentran muchos ingredientes eficaces y seguros para el cuidado de la piel, por ejemplo, la vitamina A y la vitamina C, pero para extraer la parte de un ingrediente que funciona en la piel, requiere un proceso científico. Y este proceso no solo garantiza una mayor eficacia y pureza, sino que también reduce las posibilidades de irritación y reacciones. La ciencia no es el enemigo.
<br><br>
La sostenibilidad es absolutamente clave en la industria de la belleza, algo que estamos comprometidos a mejorar. El uso de algunos ingredientes naturales a menudo puede ser insostenible. Por lo tanto, para proteger el medio ambiente de la tierra, puede ser mejor utilizar una versión del ingrediente que se haya formulado en un laboratorio, lo que garantiza su seguridad y eficacia.
<br><br>
En Medik8, nos esforzamos por encontrar un equilibrio. Si hay un ingrediente científico que proporciona resultados más efectivos y está respaldado por datos clínicos, entonces lo usaremos, pero si hay una alternativa natural que tiene los mismos efectos, siempre optamos por lo último. Somos científicos compasivos.</p>
<h4>ALERGIAS</h4>
<p>Somos muy conscientes de que algunos de nuestros clientes tendrán alergias específicas que deben tener en cuenta. Algunos de nuestros productos contienen derivados de nueces o trigo y siempre le recomendamos que revise minuciosamente la lista de ingredientes en el producto si tiene alergias. Las listas de ingredientes se pueden encontrar en nuestras páginas de productos, así como nuestro glosario de ingredientes para obtener descripciones más detalladas de algunas de nuestras principales sustancias activas. O lo mejor de todo, puede ponerse en contacto con nuestro útil equipo de atención al cliente si necesita asesoramiento sobre qué productos son los mejores para usted.</p>
                        
                    </div>
                    <div class="col-md-6 mb-4">
                            <h4>RESPETUOSOS CON LOS VEGANOS</h4>
                        <img src="img/blog/Whatgoesinside1b.jpg" class="img-fluid" alt="">
                        <p>Entendemos que tener un régimen de belleza completo de cuidado de la piel vegano es beneficioso para el planeta y su piel. Casi todos los productos Medik8 pueden ser utilizados por veganos y no contienen ningún ingrediente animal. Las únicas excepciones son:
<br><br>
Ultimate Recovery Intense™ - que no es vegano, ya que cuenta con seda sérica. <br>
Balance Moisturiser™ - que incluye un ingrediente llamado lactobacillus que no es de origen animal, sino que se fabrica utilizando leche en el proceso de producción. <br>
Surface Radiance Cleanse™ - contiene extracto de yogur. <br>
White Balance® Overnight Repair - contiene cera de abejas de poliglicerilo-3. <br>
Advanced Night Restore™ - contiene colesterol.</p>
<h4>ELECCIÓN DE INGREDIENTES</h4>
<img src="img/blog/Whatgoesinside1d.jpg" alt="" class="img-fluid my-4">
<p>Investigamos cuidadosamente todos y cada uno de los ingredientes que elegimos poner en nuestras formulaciones. Esto implica estudiar la investigación que demuestre que el ingrediente tiene el efecto deseado y, por supuesto, verificar todos los aspectos regulatorios. Evaluamos sus datos de seguridad junto con la respuesta general de internet al ingrediente y lo comparamos con sus afirmaciones antes de permitirlo en nuestras formulaciones. Esto significa que obtiene solo lo mejor.</p>
                    </div>
                   
                    
                    
                </div>
        <?php elseif($_GET['title']== 'valores'): ?>
            <img src="img/blog/valores.jpg" class="img-fluid" alt="">
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo-principal">Una marca antienvejecimiento que piensa como una marca natural</h1>
                    <p>El bienestar ambiental es una causa cercana a muchos de nuestros corazones. En Medik8, reducimos nuestra huella ambiental en cada oportunidad. Elegimos hacer todo esto porque es mejor para el medioambiente y puede proporcionar formulaciones que son mejores para la piel. No podríamos hacerlo de otra manera.</p>
                </div>
                <div class="col-md-8">
                    
                    <h4>QUÍMICA VERDE</h4>
                    <p>Química verde es la ciencia de hacer productos que usan un proceso de eficiencia energética, desde el origen de los ingredientes hasta la investigación inicial y la fabricación final. Usamos procesos en frío durante la fabricación siempre que sea posible. Esto significa que muchas de nuestras fórmulas se pueden mezclar a temperatura ambiente. Calentar grandes cantidades de producto para mezclar requiere mucha energía, por lo que trataremos de evitar esto si podemos durante el proceso de mezcla</p>                
                    
                    
                </div>
                <div class="col-md-4 my-2">
                    <img src="img/blog/valor1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                <h4>OCÉANOS LIMPIOS</h4>
                    <p>Como marca arraigada a la ciencia y la naturaleza, amamos y respetamos la vida marina. Es por eso que estamos 100% libres de microperlas y lo hemos sido durante años. En lugar de usar partículas de plástico que son dañinas para la vida marina, solo utilizamos exfoliantes naturales como las perlas de jojoba que se encuentran en Pore Refining Scrub™ y los microexfoliadores de bambú que se encuentran en Brightening Powder Cleanse™.</p> 
                    <p>En 2018, retiramos todos los insertos de plástico de nuestras cajas de cartón y los reemplazamos con una tarjeta 100% reciclada, lo que hace que nuestras cajas sean completamente reciclables. Esto ahorra más de 3 toneladas de plástico cada año.</p>
                </div>
                <div class="col-md-4 my-2">
                <img src="img/blog/valor2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                <h4>SALVANDO LOS BOSQUES</h4>
                    <p>Cuando se trata de materiales basados en papel, no solo somos reciclables, sino que estamos hechos principalmente de materiales reciclados. Medik8 utiliza una tarjeta con certificación FSC para todos nuestros envases de cartón, lo que significa que proviene de bosques bien gestionados o fuentes recicladas. Verá el símbolo FSC en todos nuestros envases como una marca de dedicación a la causa. Tratamos de minimizar el desperdicio de papel en nuestras cajas de cartón para que sea lo más ecológico posible. </p>
                </div>
                <div class="col-md-4 my-2">
                    <img src="img/blog/valor3.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                <h4>VIDRIO RECICLADO</h4>
                    <p>Nos encanta usar vidrio. Todas nuestras botellas de suero están hechas de vidrio. Todas nuestras pipetas están hechas de vidrio. Desde 2018, las botellas de vidrio Medik8 contienen 40% de vidrio reciclado y estamos buscando aumentar esta cantidad en el futuro cercano.</p>
                    <p>Dado que los resultados siempre son los primeros en Medik8, es inevitable que algunas de nuestras fórmulas requieran envases de plástico para mantenerse estables y activas. Pero donde sea que podamos implementar un envase ecológico, lo intentaremos. Uno de nuestros principales objetivos es aumentar el uso de materiales reciclados.</p>
                </div>
                <div class="col-md-4 my-2">
                    <img src="img/blog/valor4.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                <h4>NUNCA TESTADO EN ANIMALES</h4>
                    <p>Por supuesto éticamente, y según los estrictos requisitos de la normativa europea, no realizamos pruebas en animales. No pediremos a ninguna otra compañía que realice la prueba en nuestro nombre. Nos tomamos muy en serio la cuestión de verificar el cumplimiento de nuestros proveedores como parte integral de nuestro proceso de desarrollo de productos. Esperamos ansiosos el día en que las pruebas con animales estén prohibidas en todo el mundo para siempre. Leer más sobre nuestra política de prueba de productos aquí. </p>
                </div>
                <div class="col-md-4 my-2">
                    <img src="img/blog/valor5.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                <h4>LIMPIO Y SEGURO PARA LA PIEL</h4>
                    <p>Como expertos en el cuidado de la piel orientado a los resultados, sabemos qué agregar y qué evitar. Hay tantos ingredientes utilizados en el cuidado de la piel que no son necesarios, tratamos de purgar nuestras formulaciones donde podamos. No nos consideramos "libres de químicos", incluso la vitamina C se considera un químico, pero omitimos cualquier ingrediente que pueda causar preocupación, por ejemplo, SLS, parabenos, ftalatos. Ver aquí para más detalles.</p>
                </div>
                <div class="col-md-4 my-2">
                    <img src="img/blog/valor6.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                <h4>CALIDAD SUPERIOR </h4>
                    <p>Solo fabricamos productos para nosotros. Aun así, nos enorgullece informarle que contamos con la certificación ISO 22716 para fabricación cosmética, además de los sistemas de gestión de calidad ISO 9001: 2015, que incluyen nuestro compromiso con un excelente servicio al cliente.</p>
                    <p>Esto es completamente voluntario y supone una gran carga para nuestro tiempo, pero creemos que es vital para cualquier empresa de tecnología tener auditorías externas periódicas para mantener alta la calidad y la precisión.</p>
                </div>
                <div class="col-md-4 my-2">
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
            <?php elseif($_GET['title']== 'enfoque'): ?>
                <img src="img/blog/why-we-target-pigmentation-differently.jpg" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-12">
                        <h1 class="titulo-principal">Nuestro enfoque de pigmentación</h1>
                        <p>La hiperpigmentación afecta a todos de manera diferente. Pero ya sea que se trate de marcas oscuras, un tono de piel opaco o manchas de sol molestas, estas pequeñas imperfecciones tienen algo en común: todas ellas pueden hacernos sentir menos seguros de nuestra propia piel. Queremos capacitarlo para que tome el control de su piel, sin utilizar ingredientes dañinos que blanquean y dañan la piel. Es por eso que hemos desarrollado una solución que funciona en sinergia con su piel para abordar la hiperpigmentación de frente. Nuestros productos cuidadosamente seleccionados se pueden incorporar a su rutina para iluminar y aclarar su piel, devolviéndole su confianza.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="acordeon">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="">OXYRESVERATROL (OXY-R)</a>
                                    <div class="guardar">
                                        <p>Un agente abrillantador de alto rendimiento clínicamente probado para ofrecer una piel radiante y uniforme en tan solo 14 días.¹ Como una versión sobrealimentada del resveratrol, conocido ingrediente para el cuidado de la piel, el oxyresveratrol asegura un tono uniforme al inhibir la enzima responsable del exceso de producción de melanina (tirosinasa). Un desarrollo notable en el campo del cuidado de la piel brillante, Oxy-R ha demostrado ser hasta 32 veces más eficaz que el ácido kójico. Utilizado a lo largo de toda la solución de pigmentación, el oxyresveratrol² de alta resistencia y patentado realmente brilla en el suero iluminador <span><a href="http://digitalscrab.com/medik8-2/blog.php?id=13">White Balance® Brightening Serum</a> ; ideal para atacar la hiperpigmentación más resistente. </p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">ÁCIDO KÓJICO</a>
                                    <div class="guardar">
                                        <p>El primer y original suero iluminador de Medik8 usa ácido kójico. Naturalmente derivado de los hongos, se puede unir a las enzimas que producen el pigmento para bloquear la formación de melanina. Esto se enfoca en la hiperpigmentación y deja una tez luminosa y uniforme. Para los devotos del ácido kójico tenemos el White Balance® Original Serum que combina el poder del kójico con el arbutin para obtener el máximo poder de iluminación.</p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">VITAMINA C</a>
                                    <div class="guardar">
                                        <p>El ácido ascórbico etilado súper estable (vitamina C) se incluye ahora en el suero <span><a href="http://digitalscrab.com/medik8-2/blog.php?id=13">White Balance® Brightening Serum</a></span> para proporcionar un impulso de iluminación. La vitamina C también puede neutralizar cualquier daño de los radicales libres que eventualmente puede conducir a la hiperpigmentación.</p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">EXFOLIANTES QUÍMICOS</a>
                                    <div class="guardar">
                                        <p>La solución de pigmentación está respaldada con polihidroxiácidos no irritantes (PHA). La hermana mayor de AHA y BHA, las PHA, trabajan para disolver suavemente los enlaces que mantienen las células muertas de la piel en la superficie de la piel, revelando las nuevas células radiantes debajo. Los PHA, como la gluconolactona son mucho menos irritantes que los AHA o BHA, y se presentan en Brightening Powder Cleanse™ y White Balance® Overnight Repair. Debido a que la pigmentación afecta a múltiples capas de la piel, es importante ser coherente para ver los resultados, pero es una gran manera de acelerar el proceso de iluminación, especialmente cuando se usa junto con el oxyresveratrol.</p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">PROTECTOR SOLAR</a>
                                    <div class="guardar">
                                        <p>El enemigo número 1 de la pigmentación es la luz ultravioleta. Todos los tipos de pigmentación empeoran por la exposición al sol. Es esencial aplicar un protector solar con SPF alto y de amplio espectro diariamente para proteger la piel de los dañinos rayos UV y radicales libres. White Balance® Everyday Protect combina una protección SPF 50 increíblemente liviana con el poder de brillo de Oxy-R y vitamina C, para enfocarse en cada aspecto de la pigmentación.
    <br><br>
    Impulse los resultados de su régimen de pigmentación. El White Peel de Medik8 es un tratamiento en clínica que revela una tez más brillante y uniforme. Encuentre su clínica local para probar por usted mismo. </p>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <img src="img/blog/sidebar-pigmentation (1).jpg" class="img-fluid" alt="">
                    </div>
                
                
                </div>
                <?php elseif($_GET['title']== 'tecnologias'): ?>
                <img src="img/blog/UniqueTech1a.jpg" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-12">
                        <h1 class="titulo-principal">Tecnologías únicas</h1>
                        <p>En Medik8, nos enorgullecemos de ser pioneros de las tecnologías de vanguardia en cuidado de la piel. Investigamos exhaustivamente y probamos meticulosamente los productos para encontrar la formulación perfecta. Estas son algunas de las tecnologías clave que utilizamos que hacen que las formulaciones de Medik8 sean tan efectivas.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="acordeon">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="">ESTABILIDAD MEJORADA</a>
                                    <div class="guardar">
                                        <p>
                                            Algunos ingredientes activos en el cuidado de la piel pueden ser muy inestables y difíciles de manejar, como la vitamina A, la vitamina C y el <a href="http://digitalscrab.com/medik8-2/blog.php?title=glosario">oxyresveratrol</a> . Comienzan a perder eficacia tan pronto como abre la botella o, en algunos casos, mientras no están abiertos en la estantería. Usar activos inestables en la piel puede causar irritación o incluso daño a la piel.
                                            <br><br>
                                            Medik8 toma muy en serio la estabilidad en el cuidado de la piel. Investigamos escrupulosamente nuevas formas de estabilizar ingredientes efectivos. En nuestro suero puro de vitamina C, <a href="http://digitalscrab.com/medik8-2/productos.php?id=6">Pure C15™</a>, utilizamos una red antioxidante recargable que combina vitamina C, E y <a href="http://digitalscrab.com/medik8-2/blog.php?title=glosario">glutatión</a>. Esto permite que los ingredientes activos intercambien electrones constantemente entre sí para que no pierdan efectividad o se conviertan en radicales libres dañinos. En <a href="http://digitalscrab.com/medik8-2/productos.php?id=13">White Balance® Brightening Serum</a>, estabilizamos el delicado <a href="http://digitalscrab.com/medik8-2/blog.php?title=glosario">oxyresveratrol</a> manteniéndolo separado del suero hasta la activación, en un inteligente envase activado por clics. Esto asegura que el <a href="http://digitalscrab.com/medik8-2/blog.php?title=glosario">oxyresveratrol</a> no pierde su poder mientras está en la estantería.
                                            <br><br>
                                            Existen numerosas tecnologías y secretos comerciales que permiten a Medik8 mejorar la estabilidad a niveles excepcionales y esta es una gran parte de la diferencia Medik8.</p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">CONFECCIÓN CON NITRÓGENO</a>
                                    <div class="guardar">
                                        <p>La vitamina C pura (ácido L-ascórbico) es notoriamente difícil de estabilizar. Reacciona con el oxígeno y luego se vuelve inactivo o nocivo para la piel (en realidad agrega radicales libres). Para algunos de nuestros ingredientes más inestables, por ejemplo, el ácido ascórbico en Pure C15™, usamos un proceso de fabricación llamado manto de nitrógeno. Este proceso implica que las botellas se llenen y sellen en una caja de incubadora llena de nitrógeno. Esto evita que la fórmula entre en contacto con el oxígeno antes de abrir, lo que garantiza la estabilidad en la estantería. El proceso es lento y solo semiautomatizado, otra razón por la que Medik8 cree en Pensar. Laboratorio. Hacer. Decir.</p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">PRODUCCIÓN DE LOTES PEQUEÑA</a>
                                    <div class="guardar">
                                        <p>Las fórmulas complejas requieren cuidado para producir. Fabricados artesanalmente en pequeños lotes, los sueros Medik8 garantizan frescura y potencia. Muchos ingredientes efectivos en el cuidado de la piel son inestables y difíciles de trabajar, por lo que tener un enfoque práctico garantiza que cada cliente se beneficie de fórmulas potentes y efectivas. Brindar productos frescos a los clientes es un ejemplo de las muchas maneras en que Medik8 asegura la frescura y la potencia de todas nuestras fórmulas.</p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">TECNOLOGÍA DE LIBERACIÓN AL TIEMPO</a>
                                    <div class="guardar">
                                        <p>El ingrediente más eficaz en el cuidado de la piel antienvejecimiento es la vitamina A (retinol). Seamos honestos, formulados mal, pueden causar cierta irritación. Cuando se administra a niveles lo suficientemente altos como para tener un efecto visible sobre el envejecimiento de la piel, a menudo puede ser demasiado para la piel de muchas personas. Pueden tener una erupción con picazón, brotes o desarrollar áreas de sequedad. El tiempo y el dinero desperdiciados en estos tipos tradicionales de productos de retinol son comentarios comunes de los consumidores. Una solución es simplemente disminuir las concentraciones a niveles mínimos, apenas efectivos, pero ese no es nuestro camino. Entonces Medik8 decidió hacer algo diferente al respecto.
                                        <br><br>
                                        Medik8 desarrolló un conjunto de sistemas de Liberación al Tiempo para encapsular el activo. Esto libera de manera suave, lenta y continua la vitamina A, para evitar abrumar la piel y minimizar la irritación. La tecnología de Liberación al Tiempo tiene el beneficio adicional de proteger la vitamina A de su entorno para mejorar su estabilidad con el tiempo. Cada uno de nuestros productos de vitamina A tiene un sistema de encapsulación diferente, pero todos se benefician de la irritación minimizada y la estabilidad mejorada.</p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">QUIRALIDAD</a>
                                    <div class="guardar">
                                        <p>La quiralidad se trata de obtener los mejores resultados de los ingredientes activos y limitar cualquier irritación innecesaria.
                                        <br><br>
                                        La quiralidad proviene de la palabra griega para mano. Al igual que nuestras manos, las moléculas quirales tienen una imagen especular. Imagine los guantes como una representación de un ingrediente activo y su mano izquierda es un receptor de la piel. Dos guantes se ven exactamente iguales, pero su mano izquierda no cabe cómodamente dentro del guante derecho. Si una caja está llena con pares de guantes, solo la mitad de ellos será útil para su mano izquierda aunque la caja parezca estar llena. Mediante el uso de moléculas quirales correctas (el guante izquierdo) se ajustará cómodamente a su piel. Cuando se escribe un ingrediente con una 'L' al frente, por ejemplo ácido L-ascórbico, la 'L' describe que se ha utilizado la forma quiralmente correcta de la molécula.
                                        <br><br>
                                        La quiralidad es importante en el cuidado de la piel por dos razones. En primer lugar, no tiene sentido agregar el doble de ingrediente activo para lograr el mismo resultado que la mitad de un ingrediente quiralmente correcto. Especialmente si se sabe que el ingrediente es irritante. En segundo lugar, el uso de la parte de la molécula que no será utilizada por la piel será inactiva (y por lo tanto inútil) o dañina para la piel.
                                        <br><br>
                                        Medik8 filtra todos sus ingredientes activos para usar solo moléculas quiralmente correctas que serán aceptadas por la piel y le darán excelentes resultados. Para aquellos ingredientes que no tienen una forma quiral, siempre elegimos el formato correcto y más efectivo para evitar irritaciones y garantizar resultados. </p>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">PATENTES</a>
                                    <div class="guardar">
                                        <p>Medik8 se enorgullece de haber patentado nuestras mejores tecnologías y avances en el cuidado de la piel. Nuestro revolucionario suero antioxidante mineral Firewall® fue el resultado de años de investigación independiente. La increíble tecnología antioxidante de cobre PCA que se encuentra en el suero no está disponible en ningún otro lado. <br>
                                        Encontrado en la solución de pigmentación de Medik8, la tecnología de iluminación para la piel del oxyresveratrol (Oxy-R) ha sido patentada. Encontrado en la investigación original de Medik8, este increíble activo inhibe la producción de melanina para mejorar la pigmentación y el tono de la piel sin ningún blanqueamiento.
                                        <br><br>
                                        Tenemos varias otras tecnologías patentadas en virtud de colaboraciones exclusivas y tenemos numerosos inventos con patente pendiente que se han abierto paso en productos clave de Medik8. La innovación es el corazón de Medik8.</p>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <img src="img/blog/sidebar-pigmentation (1).jpg" class="img-fluid" alt="">
                    </div>
                
                
                </div>
                <?php elseif($_GET['title']== 'causa-recovery'): ?>
                    <img src="img/blog/Cause_Prevent1b.jpg" class="img-fluid" alt="">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="titulo-principal">Causa & Prevención</h1>
                            <p>La piel deshidratada es un problema que todos enfrentamos en algún momento de nuestras vidas. Algunos de nosotros nacemos con piel seca natural, a muchos les quitan la hidratación los duros vientos del invierno, mientras que otros pierden su humedad en el proceso de recuperación de tratamientos profesionales y peelings químicos. Pero en todos los casos, hay una solución. La solución de Recovery de Medik8 está específicamente diseñada para cuidar y reabastecer una barrera cutánea excepcionalmente dañada para restaurar los niveles ideales de hidratación en los tipos de piel seca, comprometida y deshidratada.</p>
                        </div>
                        <div class="col-md-8">
                        
                            <h4>SECO VS DESHIDRATADO</h4>
                            <p>Mucha gente cree que la piel seca y deshidratada es la misma, pero esta es la diferencia: la piel deshidratada no tiene agua, que es vital para que la tez se vea repulpada y saludable, mientras que la piel seca carece de lípidos naturales de la piel (aceites).</p>
                            <h4>PIEL SECA</h4>
                            <p>La piel seca es un tipo de piel con la que naces. Esto significa que tu piel produce naturalmente menos aceite. Aunque no puede cambiar su tipo de piel, puede usar un régimen alimentario nutritivo para recargar sus niveles de aceite.</p>
                            <h4>PIEL DESHIDRATADA</h4>
                            <p>La piel deshidratada es una señal de una barrera cutánea deteriorada: la capa superior de la piel tiene una barrera protectora natural formada por lípidos y células de la piel. Las células de la piel se empaquetan como ladrillos con lípidos que actúan como su mortero. Esta estructura ayuda a evitar que irritantes y agresores entren en la piel y también evita que se escape el agua. Cuando la barrera de la piel se deteriora, permite que el agua se escape, dejando la tez deshidratada.</p>
                            <p>La piel deshidratada puede ser experimentada por todos, incluso los tipos de pieles grasas. Puede ser causado por el sol, el agua dura, el aire acondicionado e incluso el envejecimiento (a medida que envejecemos nuestra piel tiene más dificultades para sostener el agua). La piel deshidratada se verá opaca y se sentirá tirante, mientras que la piel seca aparecerá escamosa y áspera.</p>
                            <p>A veces, la deshidratación puede verse agravada por el uso de productos de cuidado de la piel agresivos que despojan a la piel de sus aceites naturales y deterioran la barrera protectora de la piel. Los tratamientos profesionales como las exfoliaciones químicas también pueden comprometer la barrera de la piel, lo que hace que pierda agua y se deshidrate.</p>
                            <h4>LA DIFERENCIA MEDIK8</h4>
                            <p>Abordamos los síntomas de sequedad y deshidratación de frente. Empleamos un marco llamado ‘H.E.O.’ en todos nuestros hidratantes e hidratantes. HEO significa hidratantes, emolientes y oclusivas. Los hidratantes incluyen ingredientes como el ácido hialurónico y la glicerina que tienen una afinidad natural por las moléculas de agua, atraen H2O a sí mismos para rehidratar la piel. Los emolientes son lípidos similares a los que forman la barrera protectora natural de la piel. Estos ayudan a reforzar la barrera para detener el escape de agua y mantener la piel en buen estado. Finalmente, las oclusivas son moléculas grandes que no pueden penetrar en la piel. Se sientan sobre la tez, formando una barrera física entre la piel y el medio ambiente. Esto evita que la atmósfera quite agua de la piel.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="img/blog/Cause-_-Prevention-a_1.jpg" class="img-fluid p-2" alt="">
                                    <p>Si su piel está más deshidratada que seca, considere potenciar su rutina de cuidado de la piel con Hydr8™ B5, una hidratante líquida lleno de ácido hialurónico, multi-peso, que hidrata la piel en todos los niveles. Hydr8 B5 puede sobrecargar cualquier otro producto de cuidado de la piel que pone encima.</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="img/blog/Recovery-Landing-Page-b_1_.jpg" class="img-fluid p-2" alt="">
                                    <p>Para una piel excepcionalmente seca y comprometida, pruebe Ultimate Recovery™ Intense: una crema intensa y rica específicamente diseñada para esta afección. Formando una barrera protectora contra el medio ambiente, Ultimate Recovery Intense ayuda a acelerar el proceso de reparación natural de la piel.</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="img/blog/Cause-_-Prevention-b.jpg" class="img-fluid p-2" alt="">
                                    <p>Para los tipos de piel más maduros que naturalmente pierden agua rápidamente, recomendamos seguir nuestra filosofía de vitamina C en solución Skin Ageing por la mañana, seguido de protector solar y vitamina A por la noche. Esta combinación ayudará a regenerar la barrera natural de la piel a la vez que disminuirá las líneas finas y las arrugas. </p>
                                </div>
                                <div class="col-md-6">
                                    <img src="img/blog/Cause_Prevent1c.jpg" class="img-fluid p-2" alt="">
                                    <p><a href="http://digitalscrab.com/lista.php?id=8">COMPRAR LA SOLUCIÓN RECOVERY</a></p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <img src="img/blog/sidebar-recovery.jpg" class="img-fluid" alt="">
                            <div class="caja-gris">
                                <h2 class="titulo-principal">La piel deshidratada no tiene agua, lo que es vital para que la tez se vea repulpada y saludable, mientras que la piel seca carece de aceites naturales</h2>
                            </div>
                        </div>
                    
                    
                    </div>
                <?php elseif($_GET['title']== 'lideres'): ?>
                    <img src="img/blog/LeadVitC1a.jpg" class="img-fluid" alt="">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="titulo-principal">Causa & Prevención</h1>
                            <p>Aclamada como una superestrella antienvejecimiento y una parte central del régimen de Medik8, la vitamina C es imprescindible en cualquier rutina matutina de cuidado de la piel.</p>
                        </div>
                        <div class="col-md-8">
                        
                            <p>Hay muchas formas diferentes de vitamina C. Sin embargo, todas trabajan para lograr el mismo objetivo final: piel luminosa, juvenil y protegida. La vitamina C funciona con las células de su piel para estimular la producción de colágeno y, a la vez, ayuda a bloquear la enzima que causa la pigmentación. Considerado como uno de los mejores antioxidantes en el cuidado de la piel, la vitamina C es capaz de combatir los radicales libres que pueden causar envejecimiento prematuro. Los radicales libres son moléculas altamente reactivas con un electrón despareado. Privados de un electrón, intentan completar su par robando un electrón de otras moléculas.</p>
                            <img src="img/blog/Antioxidant___Free_Radical.jpg" alt="" class="img-fluid">
                            <p>Nuestro cuerpo tiene un sistema de defensa natural de antioxidantes, que les da a los radicales libres un electrón de repuesto para evitar que dañen nuestras células de la piel. Cuando hay más radicales libres que antioxidantes, la piel se abruma en un proceso llamado estrés oxidativo donde no puede protegerse por completo del daño de los radicales libres. Los radicales pueden atacar las moléculas de colágeno, el ADN celular y las membranas celulares para debilitarlas. Esto perjudica la regeneración celular que conduce a la flacidez y la piel arrugada.</h4>
                            <p>La vitamina C proporciona al sistema antioxidante natural del cuerpo un impulso para ayudarlo a combatir los radicales libres; protegiendo la piel de sus efectos dañinos. Los antioxidantes son excepcionalmente importantes en nuestra rutina matutina para brindar protección durante todo el día contra el medioambiente, por lo tanto, incorpore vitamina C o Firewall®.</p>
                            <p>Si bien la vitamina C es excepcional para detectar los signos del envejecimiento, existe un pequeño desafío. La vitamina C pura (ácido L-ascórbico) es ridículamente inestable en formulaciones a base de agua. En el agua, la vitamina C se oxida y provoca una cascada de reacciones en la que pierde su poder e incluso puede convertirse en un prooxidante, lo que significa que puede formar radicales libres. Cuando la vitamina C se vuelve inestable, a menudo los productos pueden volverse amarillos, lo que es una señal segura de que debe dejar de usar el producto. Esto deja a muchos clientes frustrados e infelices. Pero no en Medik8. No creemos que tenga que ceder: el suero de vitamina C perfecto es estable, se siente increíble en la piel y proporciona una protección excepcional de la piel contra los antioxidantes. Hemos formulado 3 formas diferentes de vitamina C para que no tenga que conformarse.</p>
                           
                            
                            
                        </div>
                        <div class="col-md-4">
                            <img src="img/blog/sidebar-csa (1).jpg" class="img-fluid" alt="">
                            
                        </div>
                        <div class="col-12">
                            <a href="lista.php?categoria=1" class="link-t text-center d-block">COMPRAR AHORA</a>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Esta es la vitamina C para los puristas que buscan resultados. Hemos tomado medidas excepcionales para asegurarnos de que nuestro Pure C15™, que contiene un 15% de ácido ascórbico, sea muy estable antes de abrirlo y dure al menos 8 semanas una vez abierto. Entregado en dos botellas separadas, obtienes 2 x 8 semanas de suministro de vitamina C, por lo que es una excelente relación calidad-precio.
                                    <br><br>
                                    Hemos optimizado el pH de nuestra fórmula para asegurarnos de que el ácido ascórbico tenga el mayor efecto, pero con una irritación mínima. Producimos la fórmula en una cámara saturada de nitrógeno, en lugar de aire, para evitar que el ácido ascórbico entre en contacto con el oxígeno y se vuelva inestable. El ácido ascórbico se combina con vitamina E y glutatión, otros dos antioxidantes que se encuentran naturalmente en el cuerpo.
                                    <br><br>
                                    Este complejo antioxidante imita el sistema defensivo natural de la piel y forma una red antioxidante recargable. Los antioxidantes funcionan sinérgicamente para aumentar su poder antioxidante en general, mientras se regeneran entre sí para una potencia de larga duración. Esto significa que la vitamina C no se interrumpe para estimular la producción de colágeno y para ayudar a inhibir la formación de hiperpigmentación, para una piel más brillante y de aspecto más joven.</p>
                                </div>
                                <div class="col-md-6">
                                    <h4>TETRAHEXILDECIL ASCORBATO</h4>
                                    <p>Un derivado soluble en aceite de vitamina C, <a href="blog.php?title=glosario">tetrahexildecil ascorbato</a> tiene un nombre largo y una larga vida útil. Súper estable e ideal para penetrar profundamente dentro de la barrera lipídica de la piel, este derivado proporciona un punto de entrada fácil a la gama de vitamina C, con muy poca irritación. Incluido en nuestra línea C-Tetra® junto con aceites beneficiosos y emolientes, el <a href="blog.php?title=glosario">tetrahexildecil ascorbato</a> es perfecto para enfocar líneas y arrugas dejando la piel nutrida y cuidada.</p>
                                    <h4>ÁCIDO L-ASCÓRBICO ETILADO</h4>
                                    <p>Por último, pero no menos importante, presentamos nuestra forma más poderosa de vitamina C en Super C30™. La molécula se basa en el <a href="blog.php?title=glosario">ácido ascórbico</a>ácido ascórbico pero tiene una cadena de carbono unida a la parte más reactiva de la molécula, lo que impide que se oxide. Esto significa que el <a href="blog.php?title=glosario">ácido ascórbico</a> etilado retiene toda la eficacia de la vitamina C pura sin ninguno de los problemas de estabilidad. Espere un ligero cosquilleo cuando aplique esto debido a su potencia, que desaparecerá en unos minutos. Solo utilizamos Vitamina C <a href="blog.php?title=glosario">quiralmente correcta</a> en todos nuestros productos para garantizar que alcance todo su potencial en la piel.</p>
                                </div>
                            </div>
                            <h4 class="text-center">¿NECESITA AYUDA PARA ENCONTRAR LA VITAMINA C CORRECTA PARA USTED?
AQUÍ ESTÁ NUESTRA GUÍA ÚTIL:</h4>
<img src="img/blog/Vitamin-C-Table_1.jpg" alt="" class="img-fluid">
                        </div>
                    
                    
                    </div>
                    <?php elseif($_GET['title']== 'rutas'): ?>
                    <img src="img/blog/LeadVitC1a.jpg" class="img-fluid" alt="">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h1 class="titulo-principal">Las 6 Rutas para Calmar</h1>
                            <p>En Medik8, nos gusta mantener lo simple. Si bien la piel sensibilizada es una preocupación complicada para el cuidado de la piel, le proporcionamos a su piel todos los medios necesarios para reducir al enrojecimiento visible con 6 enfoques diferentes. Encuentra nuestras 6 rutas para calmarse en <a href="productos.php?id=10">Calmwise™ Colour Correct</a>, una solución todo en uno para pieles propensas a enrojecimiento.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>1. ANTI-INFLAMACIÓN</h4>
                            <p>La inflamación, roja y dolorida puede dejar la piel irritada, incómoda y caliente. Medik8 usa <a href="blog.php?title=glosario">bisabolol</a>, un extracto de la flor de manzanilla, que inhibe las señales inflamatorias para ayudar a controlar la irritación y el enrojecimiento.<a href="blog.php?title=glosario">bisabolol</a> El Aloe Vera también se usa para ayudar a aliviar y calmar la tez.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>2. FORTALECIMIENTO DE LA PIEL</h4>
                            <p>La barrera natural de la piel juega un papel importante en la prevención de la pérdida de agua y en la detención de alérgenos e irritantes que causan inflamación en la piel. La <a href="blog.php?title=glosario">niacinamida</a> ayuda a estimular la producción de ceramidas, un lípido importante en la barrera natural de la piel, para mantener la tez protegida.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>3. LIMITACIÓN DEL ENROJECIMIENTO</h4>
                            <p>La inflamación puede causar la dilatación de los vasos sanguíneos, lo que finalmente aumenta el flujo de sangre debajo de la superficie de la piel y deja el cutis enrojecido e inflamado. La <a href="blog.php?title=glosario">cafeína</a> actúa como un constrictor de los vasos sanguíneos, lo que ayuda a regular el volumen y el flujo sanguíneo a través de la piel mientras reduce el enrojecimiento.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>4. CAPILARES SALUDABLES</h4>
                            <p>Los nuevos capilares sanguíneos que se forman son un efecto secundario de la inflamación crónica y pueden hacer que el enrojecimiento sea visible desde la superficie de la piel. La <a href="blog.php?title=glosario">perfluorodecalina</a> es un transportador de oxígeno que puede suprimir la formación de capilares sanguíneos más nuevos, dejando el cutis uniforme y libre de rubor.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>5. RESPUESTA CALMANTE</h4>
                            <p>La inflamación en la piel activa los glóbulos blancos y otras respuestas inmunes. El <a href="blog.php?title=glosario">Aloe Vera</a> y Bakuchiol de las semillas de babchi de la India ayudan a bloquear la activación de la respuesta inmune que puede causar enrojecimiento, dejando la piel libre de estrés y calmada.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>6. COBERTURA INSTÁNEA</h4>
                            <p>La teoría de color complementaria se ha utilizado en <a href="productos.php?id=10">Calmwise™ Colour Correct</a>. Rojo y verde se sientan uno frente al otro en la rueda de colores, por lo que los pigmentos minerales verdes ayudan a difuminar el enrojecimiento de la piel y equilibrar el tono de la piel. Esto crea un velo de enfoque suave que es la base ideal para el maquillaje.</p>
                        </div>
                        <div class="col-4">
                            <img src="img/blog/color.jpg" alt="" class="d-block mx-auto img-fluid">
                        </div>
                    
                    </div>
                <?php elseif($_GET['title']== 'oxy'): ?>
                    <img src="img/blog/AboutOxy1a.jpg" class="img-fluid" alt="">
                    <div class="row ">
                        <div class="col-12">
                            <h1 class="titulo-principal">Causa & Prevención</h1>
                            
                        </div>
                        <div class="col-md-8">
                            <p>Una tez brillante es el último marcador de una complexión saludable, pero sabemos demasiado bien lo difícil que puede ser lograr un brillo radiante si tiene problemas de hiperpigmentación (manchas oscuras, melasma, daño solar y similares) . Es por eso que nos dedicamos a encontrar un nuevo ingrediente abrillantador de la piel que pueda ofrecer resultados sin igual mientras nutre y cuida la piel. Los resultados de nuestra investigación descubrieron oxyresveratrol (Oxy-R), una molécula de alto rendimiento que restaura rápidamente la luminosidad sin dañar o decolorar la piel.</p>
                            <h4>UN NUEVO ENFOQUE</h4>
                            <p>En el pasado, la hidroquinona se usaba ampliamente para tratar la hiperpigmentación. Pero recientemente ha habido cierta controversia en torno a su seguridad. Siempre listo para innovar con ingredientes más nuevos y seguros, Medik8 desarrolló el revolucionario suero White Balance® Brightening Serum con la estrella de nuestra solución de pigmentación – Oxy-R.</p>
                            <h4>VOLVER A LA NATURALEZA</h4>
                            <p>Naturalmente presente en moras blancas nativas del norte de China, el oxyresveratrol es excepcionalmente bueno para bloquear la tirosinasa, la enzima que controla la producción de melanina. Menos pigmento significa que la hiperpigmentación es mucho menos probable que ocurra. De hecho, se descubrió que el oxyresveratrol es 32 veces mejor para inhibir la tirosinasa que el ácido kójico.1 Oxy-R también es un antioxidante, lo que significa que proporciona una protección superior de la piel contra los efectos del envejecimiento de los radicales libres y reduce la inflamación en toda la piel.</p>
                            <h4>ENVASE INNOVADOR</h4>
                            <p>Sin embargo, es notoriamente difícil de formular con Oxy-R. En White Balance® Brightening Serum utilizamos Oxy-R de alta resistencia que es súper inestable cuando se mezcla con agua. Tanto es así, que tuvimos que utilizar un sistema de embalaje completamente nuevo para acomodarlo. Afortunadamente, nuestros científicos de Medik8 estaban listos para el desafío. Nuestra solución fue mantener Oxy-R en la tapa, separarse del resto de la fórmula hasta que el producto se active para su uso mediante el embalaje especial activado por clic. Nuestras botellas inteligentes sumergen el polvo Oxy-R en el suero y cuando se agita la botella se activa. Después de la activación, el color del suero cambia de claro a amarillo pálido, porque este es el color natural de Oxy-R. <br><br>

    El embalaje es solo el primer paso para nuestro producto súper estable. Una vez que se ha hecho clic en el envase y se ha mezclado el Oxy-R con la fórmula, el oxy-R puede mantenerse potente durante al menos 6 semanas. Usualmente, en las concentraciones que usamos, esto solo sería una cuestión de días, sin embargo, gracias a nuestra tecnología de estabilización recientemente patentada, podemos proporcionar una frescura y potencia prolongada para cada uso. Por supuesto, podríamos haber reducido el nivel de Oxy-R a un nivel tan bajo que no se haya desestabilizado; sin embargo, Medik8 no compromete los resultados. También ofrecemos botellas individuales de 2 x 10 ml para que obtenga el mayor valor por su dinero con cada clic.
    <br><br>
    Oxy-R es la estrella de nuestra línea de pigmentación. Su excepcional poder de iluminación se presenta en White Balance® Everyday Protect, White Balance® Overnight Repair, White Balance® Brightening Serum y Brightening Powder Cleanse™. Todos estos productos hacen uso de la tecnología de estabilización patentada de Medik8 y proporcionan una bella luminosidad para un tono de piel saludable y uniforme. ¿Ya los has probado?</p>
                            
                            
                        </div>
                        <div class="col-md-4">
                            <img src="img/blog/AboutOxy1d.jpg" class="img-fluid py-2" alt="">
                            <img src="img/blog/AboutOxy1b.jpg" class="img-fluid py-2" alt="">
                            <img src="img/blog/AboutOxy1c.jpg" class="img-fluid py-2" alt="">
                            
                        </div>
                    
                    
                    </div>
                    <?php elseif($_GET['title']== 'heo'): ?>
                        <img src="img/blog/H.E.O-a.jpg" class="img-fluid" alt="">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="titulo-principal">Marco H.E.O.® </h1>
                                <img src="img/blog/H.E.O-Sum.jpg" alt="" class="img-fluid">
                                <p>Nuestra teoría simple para crear los mejores humectantes se llama HEO. Abordamos tanto la piel seca como la deshidratada con nuestras formulaciones inteligentes, alimentar la piel con humedad y bloquear la pérdida de agua. Sería perdonado por pensar que todas las bases son iguales cuando se trata de hidratación, pero esto no es correcto. En Medik8 utilizamos nuestro marco HEO de marca registrada para definir las proporciones correctas de estos bloques de construcción clave.</p>
                            </div>
                            <div class="col-md-8">
                                <h4>HIDRATANTES</h4>
                                <p>Con una afinidad natural por las moléculas de agua, los hidratantes actúan como un imán que atrae H2O hacia ellos mismos. No solo pueden llevar el agua hacia arriba desde las capas inferiores de la piel a las capas superiores deshidratadas, sino que también pueden agarrarse a las moléculas de agua del aire y encerrarlas firmemente en la piel. El agua es esencial en todas las funciones de la piel, media reacciones, ayuda con las enzimas y juega un papel muy importante en la curación de heridas. Esté atento a los excelentes hidratantes como el ácido hialuróonico y la glicerina en nuestras fórmulas. Estos activos amantes de la piel se adhieren a las moléculas de agua y las bloquean con fuerza. El más vendido Hydr8 B5™ está lleno de ácido hialurónico imán de agua para hidratar profundamente y nutrir a través de las capas de la piel.</p>
                            
                                
                            </div>
                            <div class="col-md-4">
                                <img src="img/blog/Cause-_-Prevention-a.jpg" class="img-fluid py-2" alt="">
                            </div>
                            <div class="col-md-8">
                                
                                <h4>EMOLIENTES</h4>
                                <p>Las capas superiores de nuestra piel están formadas por células de la piel en un mar de lípidos, moléculas solubles en aceite que ayudan a proteger nuestro cutis de los irritantes y la pérdida de agua. La falta de lípidos en la piel puede causar una barrera deteriorada que conduce a una multitud de problemas, incluida la piel seca y escamosa. Los emolientes como el escualeno y las ceramidas son lípidos idénticos a los de la piel, lo que significa que ocurren naturalmente dentro de la piel. Por lo tanto, pueden deslizarse directamente hacia la barrera protectora de la piel para reforzarla. Esto significa que puede escaparse menos agua de la piel, y la condición de la complexión se mejora enormemente. Advanced Night Restore incluye una gran cantidad de emolientes, además de ceramidas para restablecer el equilibrio de lípidos y lograr una piel sana.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/blog/H.E.O-b.jpg" class="img-fluid py-2" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4>OCLUSIVOS</h4>
                                <p>La barrera protectora de la piel a veces necesita una capa adicional de refuerzo. Ahí es donde entran los oclusivos. Las moléculas grandes que no pueden penetrar en la piel se sientan en la parte superior de la piel y proporcionan una barrera física entre la piel y el medio ambiente. Esto ayuda a bloquear la pérdida de agua y a mantener la humedad cerrada. El peso más grande del ácido hialurónico puede actuar como oclusivo (razón por la cual Hydr8 B5™ utiliza ácido hialurónico multi-peso). Forman un depósito de agua en la superficie de la piel para no solo bloquear la pérdida de agua sino también para alimentar la piel con hidratación.</p>

                            </div>
                            <div class="col-md-4">
                            <img src="img/blog/H.E.O-c.jpg" class="img-fluid py-2" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4>RATIOS</h4>  
                                <p>H.E.O. tiene que ver con el equilibrio. Optimizamos cada producto individualmente para que tenga la proporción perfecta de hidratación, emoliente y oclusión para brindar el golpe ideal de nutrición.
        <br><br>
        Tome nuestra solución de Recovery por ejemplo. Diseñados específicamente para pieles dañadas que necesitan un poco de cariño, cada producto necesita desesperadamente un gran impacto de los tres componentes H.E.O., particularmente emolientes y oclusivas que ayudan a imitar la barrera protectora natural de la piel. En nuestra línea Blemish queremos mantener el brillo a raya y, a la vez, proporcionar una piel propensa a las manchas con un toque de hidratación para mantenerla nutridos y felices. Eso significa mucho más H y un poco menos E y O. En nuestras cremas de ojos nos mantenemos alejados de demasiados oclusivos para limitar su papel en la formación de milia, pero nos aseguramos de que nuestros niveles de emoliente e hidratante sean altos para las líneas de deshidratación y piel delicada. En algunos productos nos centramos en cada componente individual de H.E.O.
        <br><br>
        Combinado, un trío H.E.O. equilibrado nutre la piel desde adentro hacia afuera. La tez se deja hidratada, flexible y mejor protegida del medio ambiente. Hemos optimizado las combinaciones de H.E.O. en cada uno de nuestras hidratantes.</p> 
                                    <img src="img/blog/HE0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-4">
                            <img src="img/blog/sidebar-recovery.jpg" class="img-fluid py-2" alt="">
                            </div>
                        
                        
                        </div>
                        <?php elseif($_GET['title']== 'pielbella'): ?>
                            <div class="row">
                                <div class="col-12">
                                    <iframe width="100%" height="800" src="https://www.youtube.com/embed/GfnNyLI7K8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <h1 class="titulo-principal">Piel Bella de por Vida</h1>
                                    <p>Somos expertos en cuidado de la piel profesional anti-edad. Entendemos la piel. Cuidadosamente desarrolladas con experiencia y precisión, nuestras 6 soluciones se enfocan en desafíos comunes de la piel. Desde antienvejecimiento e imperfecciones hasta pigmentación y enrojecimiento, podemos ayudar en todos los casos.</p>
                                </div>
                                <div class="col-md-8">
                                    <h4>¿POR QUÉ MEDIK8?</h4>
                                    <p>Nuestros productos están diseñados para adaptarse a la vida cotidiana y brindar resultados efectivos y duraderos para que todos puedan disfrutar de Piel Bella de por Vida.
                                    <br><br>
                                    Medik8 es diferente en muchos sentidos, pero lo más importante es que nos apasiona liberar a los usuarios de productos para el cuidado de la piel de la posibilidad de elegir entre excelentes resultados y una experiencia estimulante, auténtica y hermosa.
                                    <br><br>
                                    Con Medik8, puede tener ambos.</p>
                                    <h4>PIEL BELLA DE POR VIDA</h4>
                                    <p>Esta es nuestra misión. Ayudar a las personas a mantener una piel sana y hermosa. ¿Cómo logramos Piel Bella de por Vida? Es fácil, simplemente siga nuestra filosofía única de CSA.</p>
                                    <h4>CUIDADO DE LA PIEL QUE AMA, CONFÍA Y CREA</h4>
                                    <p>Nuestra promesa es crear productos hermosos que le encantarán usar, confiar y estar orgullosos de recomendar. Más que un hashtag, # MiMedik8 tiene que ver con experiencias personales y compartidas. ¿Cómo se relaja con Medik8 después de un largo día? ¿Tiene recomendaciones o sugerencias que quiera compartir? Cuéntanos usando #MiMedik8 en las redes sociales y puede aparecer en nuestras páginas. ¿O por qué no ver lo que otros fanáticos de Medik8 recomiendan? Nos encanta saber de usted.</p>
                                    <h4>MEDIK8 COMIENZA CON OCHO</h4>
                                    <p>Nunca nos comprometemos con los resultados para lograr una experiencia hermosa. Nuestra combinación de 8 principios básicos respalda nuestra promesa para usted. Es la razón por la cual Medik8 se ha convertido en una marca de renombre mundial respaldada por dermatólogos, médicos y especialistas profesionales en el cuidado de la piel y recomendada por amigos como la mejor solución para cualquier preocupación relacionada con el cuidado de la piel.</p>
                                    <div class="row text-center mt-5">
                                        <div class="col-md-6">
                                            <h4>1. SIMPLE</h4>
                                            <p>Medik8 tiene la misión de desmitificar el cuidado de la piel contra el envejecimiento. Creemos que aparentar 40 años cuando tienes 50 es tan simple como seguir nuestra filosofía antienvejecimiento 'vitamina C más protector solar por el día, vitamina A por la noche'. Llamamos a esto 'CSA'. Puede leer más sobre nuestra filosofía de CSA aquí. Encuentre los productos adecuados para sus necesidades antienvejecimiento en nuestra solución Skin Ageing.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>2. A MEDIDA</h4>
                                            <p>Si bien el antienvejecimiento es nuestro núcleo, Medik8 también proporciona un cuidado de la piel específico para una variedad de problemas de la piel. Entendemos que los clientes a menudo quieren que su cuidado de la piel les haga más de un función. Es por eso que podemos ayudar a eliminar imperfecciones o pigmentación y, a la vez, ayudar a prevenir el envejecimiento prematuro de la piel. Vea nuestra gama de soluciones en la tienda Medik8.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>3. LIMPIO</h4>
                                            <p>Sabemos que agregar y que mantener fuera. Sin modas ni tendencias. Sin parabenos, ftalatos o sulfatos, sin microperlas. Algunos ingredientes se debilitan cuando están más concentrados. Los investigadores de Medik8 trabajan incansablemente para encontrar el punto óptimo en cada formulación, la concentración que ofrece los mejores resultados con una irritación mínima. A veces eso significa que menos es más. Medik8 usa ingredientes clínicamente probados con investigaciones originales detrás de ellos. También utilizamos moléculas quiralmente correctas. </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>4. ARTESANO</h4>
                                            <p>Muchos de los ingredientes más activos en el cuidado profesional de la piel son increíblemente inestables y difíciles de trabajar. Nos comprometemos a entregar productos de fuerza profesional al mercado tan recientemente como sea posible. Nuestros sueros son hechos a mano en pequeños lotes en nuestros laboratorios del Reino Unido por nuestro maestro mezclador en nuestros propios laboratorios con certificación ISO. Esto es para asegurar que nuestros productos aún sean poderosos y efectivos cuando lleguen a nuestros clientes. Puede estar seguro de la mayor estabilidad y potencia. Lea más acerca de nuestros procesos únicos.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>5. PENSAMIENTO LIBRE</h4>
                                            <p>Somos una empresa independiente. Esto nos permite ser totalmente libres en el desarrollo de productos e ideas. Podemos llevar productos a nuestros clientes rápidamente. Desarrollamos todas nuestras ideas y productos en nuestra propia empresa en nuestros propios laboratorios de vanguardia.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>6. PROFESIONAL</h4>
                                            <p>Solo encontrará Medik8 en clínicas, spas y sitios web especializados con formación profesional. Esto garantiza que recibirá la atención, el cuidado y el asesoramiento personalizado sobre cuidado de la piel que se merece. Encuentre su distribuidor local aquí.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>7. TECNOLOGÍA</h4>
                                            <p>Es importante que los ingredientes activos puedan alcanzar la ubicación correcta dentro de la piel para proporcionar resultados. Usamos tecnologías de liposomas y microemulsiones que funcionan como "burbujas" protectoras alrededor de las moléculas para garantizar que los ingredientes puedan alcanzar el lugar correcto, evitando quedar atrapados en las capas superiores de la piel y causar irritación. Desarrollamos y frecuentemente patentamos nuestra propia investigación original. Nos encanta colaborar con universidades y académicos.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>8. ÉTICA</h4>
                                            <p>Por supuesto, somos 100% libres de crueldad animal. También estamos dedicados a minimizar nuestro impacto en el medio ambiente siempre que podamos. Nuestros procesos de fabricación son lo más eficientes posible, sin interferir con los resultados. Medik8 utiliza papel reciclado para todos sus envases y 40% de vidrio reciclado en nuestras botellas de suero. Incluso nuestros edificios funcionan con fuentes de energía 100% renovables. Lea más sobre nuestros valores eco.</p>
                                        </div>
                                    </div>
                                    <div class="caja-gris text-center">
                                        <h4 class="py-4">LO QUE DICEN LOS EXPERTOS</h4>
                                        <h5>Alice Hart Davies - Sunday Times - “Por la noche, pruebe uno de los retinoides de estilo nuevo que ofrecen todos los beneficios del retinol (renovación más rápida de la piel y piel más brillante, fresca y menos arrugada) sin las desventajas habituales tales como sequedad y descamación como r-Retinoate® de Medik8”.</h5>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <img src="img/blog/sidebar-medik8.jpg" class="img-fluid py-2" alt="">
                                </div>
                               
                            
                            
                            </div>
                            <?php elseif($_GET['title']== 'aydtratamientos'): ?>
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="titulo-principal">Antes & Después</h1>
                                    <p>Los tratamientos y productos de cuidado de la piel pueden transformar la apariencia de su piel. En Medik8, creemos que una de las maneras más efectivas de demostrar que nuestros productos y peelings están funcionando es mostrarle los resultados de la vida real a personas reales.</p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h4>BETA PEEL™</h4>
                                    <p>Nuestro revolucionario programa de peeling diseñado para pieles propensas a las imperfecciones muestra algunos de nuestros resultados de cuidado de la piel más espectaculares. Un programa de 3 peelings en el transcurso de 6 semanas produjo una piel de aspecto significativamente más claro, con una importante reducción en la aparición de imperfecciones e inflamación. En estas imágenes, se combinó un ciclo de Beta Peel con los kits de preparación y post tratamiento Medik8.</p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <img src="img/blog/beta-peel.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h4>WHITE PEEL™</h4>
                                    <p>Diseñado específicamente para ayudar a un tono de piel irregular, White Peel se enfoca en áreas de hiperpigmentación para dejar la piel suave, con tono igual y luminosa. Un curso de 3 peelings durante 6 semanas produjo un tono y una textura de piel más regular, con una reducción de las manchas. </p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <img src="img/blog/white-peel.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h4 class="text-center">FULL LASH & BROW™</h4>
                                    <p class="text-center">Nuestro increíble suero para pestañas y cejas ayuda a mejorar su apariencia en solo 8 semanas.</p>
                                    <a href="" class="text-center">COMPRAR AHORA</a>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <img src="img/blog/lash-brow.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h4>R-RETINOATE® <br>YOUTH ACTIVATING CREAM</h4>
                                    <p>Un verdadero avance en el cuidado de la piel contra el envejecimiento, el r-Retinoate reduce rápidamente la apariencia de las líneas finas al tiempo que suaviza la textura de la piel.</p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <img src="img/blog/r-retinoate-youth.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-12">
                                    <h4 class="text-center">R-RETINOATE® REJUVENATING EYE SYSTEM</h4>
                                    <p class="text-center">La más reciente incorporación de la familia de r-Retinoato, el Rejuvenating Eye System produce un sorprendente efecto de relleno sobre las patas de gallo y la textura debajo de los ojos.</p>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <img src="img/blog/eye-system.jpg" class="img-fluid" alt="">
                                    <p> Reducción visible de la profundidad de las arrugas y apariencia de patas de gallo*
                                    (Izquierda - Semana 0, Derecha - Semana 4)</p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <img src="img/blog/r-retinoate-rejuvinating.jpg" class="img-fluid" alt="" class="img-fluid">
                                    <p>Reducción visible de la profundidad de las arrugas debajo del área del ojo, mejora visible de la textura*
                                        (Inquierda - Semana 0, Derecha - Semana 4</p>
                                </div>
                                <div class="col-12">
                                    <h4 class="text-center">CRYSTAL RETINAL 10™</h4>
                                    <p class="text-center">Nuestro revolucionario suero de vitamina A produce resultados intensos, hasta 11 veces más rápido que el retinol tradicional.</p>
                                </div>

                                <div class="col-md-6">
                                    <img src="img/blog/crystal-retinal-10-b.jpg" class="img-fluid" alt="">
                                    <p> Las líneas finas y las arrugas se suavizan visiblemente, la textura irregular se suaviza y la pigmentación se reduce visiblemente.*
                                        (Arriba - Antes de la Semana 0, Abajo - Después de la Semana 12)</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="img/blog/Crystal-Retinal-10.jpg" alt="" class="img-fluid">
                                    <p>Reducción de la apariencia de patas de gallo, líneas finas y arrugas. La piel se ve notablemente más suave, más brillante y más revitalizada. Con el uso continuo, las mejoras se vuelven aún más notables con el tiempo.*
                                    (Izquierda - Antes de la Semana 0, Derecha - Después de la Semana 12)</p>
                                </div>
                               
                            
                            
                            </div>
                            <?php elseif($_GET['title']== 'prensa'): ?>
                            <div class="row">
                                    <img src="img/blog/Whatdopresssay1a.jpg" alt="" class="img-fluid">
                                    <div class="col-12">
                                        <h1 class="titulo-principal">¿Qué dice la prensa?</h1>
                                        <p><i>Los expertos de la industria y los periodistas de belleza por igual se han enamorado de Medik8. Y como no agradecer cuando finalmente puedes obtener los resultados visibles que deseas con ingredientes activos que funcionen, todo en un hermoso embalaje en su salón local? Estos son algunos de nuestros favoritos y los productos que adoran..</i></p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="quote">
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p><i>Mejor Producto Ganador de los Lectores de 2015. Si aún no has probado Firewall por ti mismo, es algo que estoy segura que funciona. Estoy emocionada de ver mi sentimiento hecho eco por la comunidad de Truth in Aging.</i></p>
                                            <span class="peque">Marta Wohrle, Truth in Ageing Founder</span>
                                        </div>
                                        <div class="quote">
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p><i>Escuchamos revolución y avance mucho: esta es una vez que estas palabras se aplican realmente. Estoy tan impresionado con los resultados de r-Retinoate, que lo hemos introducido a nivel nacional en todas nuestras clínicas.</i></p>
                                            <span class="peque">Dr Patrick Bowler, Medical Director of Courthouse Clinics and Founder Member/Fellow of British College of Aesthetic Medicine (BCAM)</span>
                                        </div>
                                        <div class="quote">
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p><i>Un equipo de prebióticos y probióticos en Balance Moisturizer de Medik8, aprobado por el editor de belleza, asegura que los niveles de bacterias de la piel estén en equilibrio, lo que minimiza los tipo que causan el acné. Hola, rostro impecable.</i></p>
                                            <span class="peque">Jacqueline Kilikita, Beauty Writer at Elle UK</span>
                                        </div>
                                        <div class="quote">
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p><i>Cuando dijeron que el r-Retinoato era más poderoso que el retinol pero que podía usarse durante el día y era adecuado para pieles sensibles, tuve que comprobar que no era un error. Medik8 envió todos los estudios. Guau - realmente impresionada con la ciencia y se siente y huele muy bien también.</i></p>
                                            <span class="peque">Dr Uliana Gout, Cosmetic Physician and Founder of London Aesthetic Medicine Services Ltd.</span>
                                        </div>
                                        <div class="quote">
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p><i>Hydr8 B5 es uno de los mejores sueros de ácido hialurónico que hay.</i></p>
                                            <span class="peque">Laura Capon, Fashion and Beauty Writer, Cosmopolitan UK</span>
                                        </div>
                                        <div class="quote">
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p><i>He encontrado un producto para el acné que hace lo que muchos miles de otros productos para el acné prometen: deshacerse del acné de la noche a la mañana.</i></p>
                                            <span class="peque">Faith Xue, Editorial Director, Byrdie.com</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="img/blog/sidebar-medik8.jpg" alt="" class="img-fluid">
                                    </div>
                            </div>
                            <?php elseif($_GET['title']== 'bastidores'): ?>
                            <div class="row">
                                    <div class="col-12">
                                        <h1 class="titulo-principal">Las Personas Detrás de Medik8</h1>
                                        <p>Con el compromiso de brindarle un cuidado de la piel hermoso que le aporte los resultados que siempre ha soñado, hemos reunido a un equipo de personas talentosas con una gran experiencia que informan todo lo que hacemos. ¿Los conoceremos?</p>
                                    </div>
                                    <div class="col-md-8">
                                       <h4>INVESTIGACIÓN Y DESARROLLO</h4>
                                       <p>La innovación va de la mano con la investigación y el desarrollo en Medik8. Desafiamos la norma en cada producto que creamos para asegurar que nuestros clientes reciban resultados sobresalientes. Nuestro equipo de científicos de formulación interna se compromete a romper los límites y desarrollar fórmulas que antes no se habían pensado o percibido como imposibles de hace.
                                        <br><br>
                                        Siempre estamos pendientes de nuevas investigaciones y literatura, y aprovechamos las oportunidades para desarrollar productos con innovaciones nuevas y emocionantes. Esta es la razón por la cual muchos de los productos de Medik8 tienen tecnologías únicas increíbles. Por ejemplo, el desarrollo revolucionario de r-Retinoate®, Crystal Retinal™ y muchas tecnologías patentadas y pendientes de patente en muchas otras soluciones.
                                        <br><br>
                                        Conozca a Daniel, quien estudió Química en la Universidad de Leeds y es el Director de Formulación y Desarrollo de Medik8. Se unió a Medik8 hace casi una década como formulador de productos y ahora lidera un departamento lleno de bioquímicos, científicos de formulación e innovadores de envases. Daniel ha liderado la colaboración con académicos externos como nuestro profesor de bioquímica de la Universidad local. Durante su carrera en cuidado personal, Daniel ha desarrollado más de 80 formulaciones únicas. Es un experto de la industria en protectores solares y pigmentación y es el inventor de dos patentes iluminadores para la piel. También es el innovador detrás de las tecnologías de hidratación inteligente H.E.O. de Medik8.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="img/blog/BehindScenes1b.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="img/blog/BehindScenes1c.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        
                                        <h4>FORMACIÓN</h4>
                                        <p>Medik8 tiene un compromiso con la formación. Al igual que nuestros productos, nuestros programas educativos se investigan y desarrollan para garantizar que la experiencia de Medik8 sea la misma en todo el mundo. Medik8 se vende típicamente sólo a través de puntos de venta profesionales, esto requiere que todos los que vendan nuestros productos tengan la misma profundidad de conocimiento. Esto proporciona a los clientes los mismos tratamientos de calidad medispa y las mejores recomendaciones de productos, estén donde estén en el mundo.
    <br><br>
    Contamos con un equipo dedicado a brindar esta formación y apoyo a los equipos de capacitación y ventas, así como a sus socios comerciales. El equipo dirige clases, eventos de capacitación y seminarios web de nuestro Centro de capacitación cerca de Londres, Reino Unido, y viaja por todo el mundo para capacitar a profesionales sobre los productos y protocolos de Medik8.
    <br><br>
    Conozca a Alison, Gerente Senior de Educación Global de Medik8. Con más de 20 años de experiencia como terapeuta y Director de Negocios Spa, posteriormente obteniendo títulos docentes en anatomía y fisiología, ciencias y modalidades de electroterapia. Ha desarrollado desde cero los programas de educación y capacitación de Medik8 y ahora está administrando el Centro de capacitación de Medik8 con su propio equipo de educación.</p>
                                    </div>
                                    <div class="col-md-8">
                                       <h4>OPERACIONES Y FABRICACIÓN</h4>
                                       <p>Cada intrincada innovación elaborada en nuestros laboratorios tiene que producirse a una escala relativamente grande. El reto es hacer que cada lote sea el mismo que el "lote perfecto" todas y cada una de las veces. Es por eso que nos embarcamos en la certificación ISO. Utilizando técnicas colaborativas, mejoramos continuamente nuestros procesos y refinamos cada paso. El resultado es que cada producto es de la más alta calidad; mezclados con cariño por personas apasionadas por hacer productos frescos y estables en el laboratorio.

                                        Conoce a Vinny, nuestro Master Blender. Ha estado trabajando con la compañía desde que contaba con pocas personas sólidas y pasó de mezclar productos a mano a máquinas de gestión que combinan 7 toneladas de producto en una hora.

                                        Al igual que nuestro desarrollo de productos, todos los sueros Medik8 se fabrican en nuestras propias instalaciones en el Reino Unido. Tomamos las mejores prácticas de las industrias médica y farmacéutica y las aplicamos a los procesos de fabricación de Medik8. También gestionamos nuestra propia logística para garantizar un alto nivel de calidad de principio a fin cuando se realiza un pedido. Como empresa británica en un momento de cambios, nos enorgullece cumplir con los estándares de fabricación europeos para que pueda confiar en la calidad constante que recibirá en todos y cada uno de los productos. Trabajamos arduamente para obtener la certificación ISO tanto para los estándares de fabricación de cosméticos como para los estándares de gestión de calidad que nos esforzamos por mantener día tras día en todo lo que hacemos.

                                        Llamamos a este sistema interno de extremo a extremo <a href="https://www.medik8.com/blog/think-lab-make-tell.html">"Pensar. Laboratorio. Hacer. Decir."</a> (post en inglés)</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="img/blog/BehindScenes1d.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="img/blog/BehindScenes1a.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        
                                        <h4>SERVICIO AL CLIENTE</h4>
                                       <p>Queremos que cada cliente de Medik8 tenga una gran experiencia. Recibir niveles superiores de servicio es fundamental para nuestro ADN e insistimos en que cada cliente de Medik8 se sienta especial y personalmente atendido. Tenemos una maravillosa Gerente de Experiencia del Cliente, Louise, quien probablemente sea la persona más útil del mundo. Diga “Hola” a nosotros, siempre queremos escuchar lo que tiene que decir.</p>
                                    </div>
                            </div>
                            <?php elseif($_GET['title']== 'diferencia'): ?>
                            <div class="row">
                                    <img src="img/blog/AntiAgeing.jpg" alt="" class="img-fluid">
                                    <div class="col-12">
                                        <h1 class="titulo-principal">La diferencia antienvejecimiento de Medik8</h1>
                                        <p>Nuestra filosofía antienvejecimiento central es simple. Vitamina C más protector solar por la mañana, vitamina A por la noche. Creemos que esto proporciona la máxima protección contra los dañinos rayos UV y los radicales libres al estimular la producción de colágeno y elastina, en última instancia, conduce a una piel más joven. Pero no nos detuvimos allí. Nuestra gama completa antienvejecimiento ofrece una protección integral de 360 grados contra todas las causas del envejecimiento de la piel, que puede leer <a href="blog.php?id=38">aquí</a> . En nuestra línea Advanced, asumimos los factores ambientales que podrían ser la causa del envejecimiento prematuro. En nuestra amplia gama de productos de limpieza, utilizamos exfoliantes de doble acción para estimular las células de la piel y obtener, en última instancia, una piel más saludable y juvenil, y en cada crema hidratante garantizamos niveles óptimos de hidratación para combatir las líneas de deshidratación.</p>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="acordeon">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="">UTECNOLOGÍA ANTIGLICACIÓN</a>
                                                    <div class="guardar">
                                                        <p>La glicación es causada por los azúcares acumulados de la dieta que se unen a las fibras de colágeno y elastina creando productos finales de glicación avanzada (AGEs). Como resultado, el colágeno se deforma y la rotación celular se reduce. Esto puede llevar a una piel arrugada y envejecida. En la línea Advanced usamos carnosina, un activo antiglicación que bloquea el enlace del azúcar con el colágeno. Incluso puede revertir los vínculos que ya se han hecho, lo que ayuda a regenerar una textura de piel más juvenil.</p>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="">TECNOLOGÍA ANTI-CONTAMINACIÓN</a>
                                                    <div class="guardar">
                                                        <p>La contaminación puede venir en muchas formas diferentes: humo de cigarrillo, pequeñas partículas en el aire y ozono. Estos pueden filtrarse en la piel y desencadenar la producción de radicales libres. Los productos Advanced de Medik8 usan <a href="blog.php?title=glosario">extracto de semilla de moringa</a> , un poderoso antioxidante que puede formar un escudo urbano en la piel para eliminar los radicales libres.</p>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="">TECNOLOGÍA ANTI LUZ AZUL</a>
                                                    <div class="guardar">
                                                        <p>A pesar de lo aterrador que sea, las pantallas electrónicas pueden causar un envejecimiento prematuro de la piel. La luz azul es de una longitud de onda muy similar a la dañina luz UV y se ha demostrado que causa hiperpigmentación y estimula el daño de los radicales libres en la piel. En Advanced, utilizamos el <a href="blog.php?title=glosario">extracto de semilla de cacao teobroma</a> , un antioxidante natural que ataca los radicales libres dañinos y ayuda a mantener los niveles de colágeno en la piel.</p>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="">TECNOLOGÍA ANTI-INFRARROJOS</a>
                                                    <div class="guardar">
                                                        <p>Capaz de degradar las moléculas de colágeno que conduce a la piel áspera con líneas finas y arrugas, los infrarrojos son otro tipo de rayos del sol que puede ser peligroso. Afortunadamente, la <a href="blog.php?title=glosario">carnosina</a> incluida en nuestra línea Advanced es capaz de inhibir el proceso que descompone el colágeno, dejando atrás una piel repulpada y de aspecto juvenil.</p>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="">AHAS Y BHAS</a>
                                                    <div class="guardar">
                                                        <p>La exfoliación de las células muertas de la piel es clave para una tez brillante, luminosa y de aspecto juvenil. Los alfa hidroxiácidos (AHA), como el <a href="blog.php?title=glosario">ácido láctico</a> y el <a href="blog.php?title=glosario">mandélico</a>, trabajan para descomponer el "pegamento" entre las células muertas de la piel para que puedan eliminarse fácilmente. Esto ayuda a acelerar el recambio celular, promover una piel más saludable y aumentar las líneas finas. Los beta hidroxiácidos (BHA), como el <a href="blog.php?title=glosario">ácido salicílico</a>, son solubles en aceite, por lo que pueden actuar dentro de los poros para descomponer el aceite y las células de la piel que pueden causar imperfecciones. Esto promueve una tez sana y equilibrada, libre de imperfecciones. Los AHA y BHA se pueden encontrar en nuestra gama de limpiadores exfoliantes.</p>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="">HIDRATACIÓN DEFINITIVA</a>
                                                    <div class="guardar">
                                                        <p>Las señales de envejecimiento en realidad pueden empeorar por la deshidratación. Esta es la razón por la cual muchos de nuestros productos antienvejecimiento utilizan hidratantes excepcionales, como el ácido hialurónico, para mantener la piel nutrida y próspera. Nuestras fórmulas de crema utilizan el <a href="blog.php?title=heo">Marco H.E.O.</a> – contienen hidratantes, emolientes y oclusivas (moléculas que evitan la pérdida de agua a través de la superficie de la piel). Esto asegura que los niveles de humedad de la piel se reponen con cuidado para una piel suave, repulpada e hidratada.</p>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="img/blog/sidebar-medik8.jpg" alt="" class="img-fluid">
                                    </div>
                                    

        <?php endif; ?>
    
    <?php else: ?>

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
                <?php if($_GET['id'] !== '36'): ?>
                <div class="col-md-4">
                    <img src="img/blog/<?php echo $blog['url_barra'] ?>" class="img-fluid" alt="">
                    <?php if($blog['texto_barra'] !== ''): ?>
                    <div class="caja-gris">
                        <h2 class="titulo-principal"><?php echo $blog['texto_barra'] ?></h2>
                    </div>

                    <?php endif ?>
                </div>
                <?php endif ?>
            </div>
            <?php endif; ?>
    <?php endif; ?>
    
    </div>


    <div class="seccion-blogs mt-5">
        <?php if(isset($_GET['title'])): ?>
            <?php if($_GET['title'] == 'valores' && $_GET['title'] == 'dentro' && $_GET['title'] == 'colaboracion'): ?>
            <h3>MÁS SOBRE LA SOLUCIÓN REDNESS</h3>
            <?php endif ?>
            <div class="row">            
                    <?php if($_GET['title'] =='valores' ): ?>
                        
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/blog/Whatgoesinside1a.jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <a href="blog.php?title=dentro"><h5>Qué Hay Dentro de Medik8</h5></a>
                                    <p>Con años de experiencia en formulación, sabemos exactamente qué debería contener y qué debería quedar fuera de una formulación...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/blog/Quality1a (1).jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <a href="blog.php?id=45"><h5>Dedicados a la Calidad</h5></a>
                                    <p>No sólo son nuestras formulaciones elaboradas en nuestros laboratorios internos en en el Reino Unido, nuestros productos...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/blog/Collaboration1a.jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <a href="blog.php?title=colaboracion"><h5>Nos Encanta Colaborar</h5></a>
                                    <p>Trabajar con otros ayuda a generar conocimiento. Medik8 se enorgullece de trabajar en colaboración con socios de todo el mundo...</p>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <a href="blog.php?id=46"><h5>Somos Profesionales</h5></a>
                                    <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                                </div>
                            </div>
                        </div>

                    <?php elseif($_GET['title'] =='dentro' ): ?>

                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/blog/valores.jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <a href="blog.php?title=valores"><h5>Pensamos como marca natural</h5></a>
                                    <p>El bienestar ambiental es una causa cercana a muchos de nuestros corazones. En Medik8, reducimos nuestra huella ambiental...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/blog/Quality1a (1).jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <a href="blog.php?id=45"><h5>Dedicados a la Calidad</h5></a>
                                    <p>No sólo son nuestras formulaciones elaboradas en nuestros laboratorios internos en en el Reino Unido, nuestros productos...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/blog/Collaboration1a.jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <a href="blog.php?title=colaboracion"><h5>Nos Encanta Colaborar</h5></a>
                                    <p>Trabajar con otros ayuda a generar conocimiento. Medik8 se enorgullece de trabajar en colaboración con socios de todo el mundo...</p>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <a href="blog.php?id=46"><h5>Somos Profesionales</h5></a>
                                    <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                                </div>
                            </div>
                        </div>


                    <?php elseif($_GET['title'] =='colaboracion' ): ?>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="img/blog/valores.jpg" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <a href="blog.php?title=valores"><h5>Pensamos como marca natural</h5></a>
                                        <p>El bienestar ambiental es una causa cercana a muchos de nuestros corazones. En Medik8, reducimos nuestra huella ambiental...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="img/blog/Whatgoesinside1a.jpg" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <a href="blog.php?title=dentro"><h5>Qué Hay Dentro de Medik8</h5></a>
                                        <p>Con años de experiencia en formulación, sabemos exactamente qué debería contener y qué debería quedar fuera de una formulación...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="img/blog/Quality1a (1).jpg" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <a href="blog.php?id=45"><h5>Dedicados a la Calidad</h5></a>
                                        <p>No sólo son nuestras formulaciones elaboradas en nuestros laboratorios internos en en el Reino Unido, nuestros productos...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <a href="blog.php?id=46"><h5>Somos Profesionales</h5></a>
                                        <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                                    </div>
                                </div>
                            </div>

                            <?php elseif($_GET['title'] =='pielbella' ): ?>
                                   
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/PCSA1.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?id=1"><h5>Filosofía CSA</h5></a>
                                                <p>Nuestra misión es desmitificar el cuidado de la piel contra el envejecimiento. En Medik8 creemos que el secreto para parecer más...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/OurStory1a.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?id=49"><h5>El Fundador</h5></a>
                                                <p>Elliot Isaacs estudió fisiología en la Universidad de Leeds junto con farmacología y bioquímica. Después de desarrollar un producto...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/How-do-we-help-your-business-1a.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?title=bastidores"><h5>Entre los Bastidores</h5></a>
                                                <p>Con el compromiso de brindarle un cuidado de la piel hermoso que le aporte los resultados que siempre ha soñado, hemos reunido a un equipo de personas...</p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?id=48"><h5>Investigación Original</h5></a>
                                                <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/UniqueTech1a.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?title=tecnologias"><h5>Tecnologías Únicas</h5></a>
                                                <p>En Medik8, nos enorgullecemos de ser pioneros de las tecnologías de vanguardia en cuidado de la piel. Investigamos exhaustivamente...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php elseif($_GET['title'] =='tecnologias' ): ?>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/GfnNyLI7K8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="card-body">
                                                <a href="blog.php?title=pielbella"><h5>Piel Bella de por Vida</h5></a>
                                                <p>Somos expertos en cuidado de la piel profesional anti-edad. Entendemos la piel. Cuidadosamente desarrolladas con experiencia...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/PCSA1.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?id=1"><h5>Filosofía CSA</h5></a>
                                                <p>Nuestra misión es desmitificar el cuidado de la piel contra el envejecimiento. En Medik8 creemos que el secreto para parecer más...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/OurStory1a.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?id=49"><h5>El Fundador</h5></a>
                                                <p>Elliot Isaacs estudió fisiología en la Universidad de Leeds junto con farmacología y bioquímica. Después de desarrollar un producto...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?id=48"><h5>Investigación Original</h5></a>
                                                <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php elseif($_GET['title'] =='bastidores' ): ?>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/GfnNyLI7K8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="card-body">
                                                <a href="blog.php?title=pielbella"><h5>Piel Bella de por Vida</h5></a>
                                                <p>Somos expertos en cuidado de la piel profesional anti-edad. Entendemos la piel. Cuidadosamente desarrolladas con experiencia...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/PCSA1.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?id=1"><h5>Filosofía CSA</h5></a>
                                                <p>Nuestra misión es desmitificar el cuidado de la piel contra el envejecimiento. En Medik8 creemos que el secreto para parecer más...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?id=48"><h5>Investigación Original</h5></a>
                                                <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                        <img src="img/blog/UniqueTech1a.jpg" class="img-fluid" alt="">
                                            <div class="card-body">
                                                <a href="blog.php?title=tecnologias"><h5>Tecnologías Únicas</h5></a>
                                                <p>En Medik8, nos enorgullecemos de ser pioneros de las tecnologías de vanguardia en cuidado de la piel. Investigamos exhaustivamente...</p>
                                            </div>
                                        </div>
                                    </div>
                            
                    
                    <?php endif ?>
                
            </div>
        <?php elseif(isset($_GET['id'])): ?>
            
            <div class="row">
            
                <?php if($_GET['id'] == 45 ): ?>

                <div class="col-md-3">
                    <div class="card">
                        <img src="img/blog/valores.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=valores"><h5>Pensamos como marca natural</h5></a>
                            <p>El bienestar ambiental es una causa cercana a muchos de nuestros corazones. En Medik8, reducimos nuestra huella ambiental...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/Whatgoesinside1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=dentro"><h5>Qué Hay Dentro de Medik8</h5></a>
                            <p>Con años de experiencia en formulación, sabemos exactamente qué debería contener y qué debería quedar fuera de una formulación...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/Collaboration1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=colaboracion"><h5>Nos Encanta Colaborar</h5></a>
                            <p>Trabajar con otros ayuda a generar conocimiento. Medik8 se enorgullece de trabajar en colaboración con socios de todo el mundo...</p>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?id=46"><h5>Somos Profesionales</h5></a>
                            <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                        </div>
                    </div>
                </div>
                <?php elseif($_GET['id'] ==46 ): ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/blog/valores.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=valores"><h5>Pensamos como marca natural</h5></a>
                            <p>El bienestar ambiental es una causa cercana a muchos de nuestros corazones. En Medik8, reducimos nuestra huella ambiental...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/blog/Whatgoesinside1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=dentro"><h5>Qué Hay Dentro de Medik8</h5></a>
                            <p>Con años de experiencia en formulación, sabemos exactamente qué debería contener y qué debería quedar fuera de una formulación...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/blog/Quality1a (1).jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?id=45"><h5>Dedicados a la Calidad</h5></a>
                            <p>No sólo son nuestras formulaciones elaboradas en nuestros laboratorios internos en en el Reino Unido, nuestros productos...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?id=46"><h5>Somos Profesionales</h5></a>
                            <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                        </div>
                    </div>
                </div>
                <?php endif ?>
                <?php if($_GET['id'] == 1 ): ?>

                <div class="col-md-3">
                    <div class="card">
                    <iframe width="100%" height="180" src="https://www.youtube.com/embed/GfnNyLI7K8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="card-body">
                            <a href="blog.php?title=pielbella"><h5>Piel Bella de por Vida</h5></a>
                            <p>Somos expertos en cuidado de la piel profesional anti-edad. Entendemos la piel. Cuidadosamente desarrolladas con experiencia...</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/OurStory1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?id=49"><h5>El Fundador</h5></a>
                            <p>Elliot Isaacs estudió fisiología en la Universidad de Leeds junto con farmacología y bioquímica. Después de desarrollar un producto...</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?id=48"><h5>Investigación Original</h5></a>
                            <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/UniqueTech1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=tecnologias"><h5>Tecnologías Únicas</h5></a>
                            <p>En Medik8, nos enorgullecemos de ser pioneros de las tecnologías de vanguardia en cuidado de la piel. Investigamos exhaustivamente...</p>
                        </div>
                    </div>
                </div>
                <?php elseif($_GET['id'] ==49 ): ?>
                <div class="col-md-3">
                    <div class="card">
                    <iframe width="100%" height="180" src="https://www.youtube.com/embed/GfnNyLI7K8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="card-body">
                            <a href="blog.php?title=pielbella"><h5>Piel Bella de por Vida</h5></a>
                            <p>Somos expertos en cuidado de la piel profesional anti-edad. Entendemos la piel. Cuidadosamente desarrolladas con experiencia...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/How-do-we-help-your-business-1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=bastidores"><h5>Entre los Bastidores</h5></a>
                            <p>Con el compromiso de brindarle un cuidado de la piel hermoso que le aporte los resultados que siempre ha soñado, hemos reunido a un equipo de personas...</p>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/WhatisProf1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?id=48"><h5>Investigación Original</h5></a>
                            <p>Medik8 es una marca profesional de cuidado de la piel. Esto significa que somos vendidos principalmente por profesionales...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/UniqueTech1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=tecnologias"><h5>Tecnologías Únicas</h5></a>
                            <p>En Medik8, nos enorgullecemos de ser pioneros de las tecnologías de vanguardia en cuidado de la piel. Investigamos exhaustivamente...</p>
                        </div>
                    </div>
                </div>
                
                <?php elseif($_GET['id'] ==48 ): ?>
                <div class="col-md-3">
                    <div class="card">
                    <iframe width="100%" height="180" src="https://www.youtube.com/embed/GfnNyLI7K8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="card-body">
                            <a href="blog.php?title=pielbella"><h5>Piel Bella de por Vida</h5></a>
                            <p>Somos expertos en cuidado de la piel profesional anti-edad. Entendemos la piel. Cuidadosamente desarrolladas con experiencia...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/PCSA1.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?id=1"><h5>Filosofía CSA</h5></a>
                            <p>Nuestra misión es desmitificar el cuidado de la piel contra el envejecimiento. En Medik8 creemos que el secreto para parecer más...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/How-do-we-help-your-business-1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=bastidores"><h5>Entre los Bastidores</h5></a>
                            <p>Con el compromiso de brindarle un cuidado de la piel hermoso que le aporte los resultados que siempre ha soñado, hemos reunido a un equipo de personas...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="img/blog/UniqueTech1a.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <a href="blog.php?title=tecnologias"><h5>Tecnologías Únicas</h5></a>
                            <p>En Medik8, nos enorgullecemos de ser pioneros de las tecnologías de vanguardia en cuidado de la piel. Investigamos exhaustivamente...</p>
                        </div>
                    </div>
                </div>
                <?php endif ?>


            </div>
        <?php endif ?>
    </div>
        
    
    
</section>

  











<?php include 'includes/templates/footer.php' ?>
    