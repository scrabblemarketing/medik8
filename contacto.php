<?php include 'includes/templates/header.php' ?>


<div class="barra-seccion">

    <ul class="container nav justify-content-start">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Página de inicio ></a>
        </li>
        <li class="nav-item">
            <?php if(isset($_GET['id'])){ ?>
            <a href="blog.php?id=<?php echo $blog['id_blog'] ?>" class="nav-link"><?php echo $blog['slug'] ?></a>
            <?php }else{ ?>
                <a href="blog.php" class="nav-link">Contacto</a>
            <?php } ?>
        </li>
    </ul>

</div>
<section class="contacto container py-4">

    <div class="row">
        <div class="col-md-6 p-4">
            <h2 class="text-uppercase">Envianos un mensaje</h2>
                <form action="sendmail.php" method="post" class="contacto-form">
                    <div class="form-group">
                        <label for="nombre">Nombre <span>*</span></label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico <span>*</span></label>
                        <input type="email" class="form-control" name="email" id="">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Contenido <span>*</span></label>
                        <textarea class="form-control" name="mensaje" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn boton-link" value="Enviar Mensaje">
                    </div>
                </form>
        </div>
        <div class="col-md-6 p-4">
            <h2>MEDIK8 ATENCIÓN AL CLIENTE</h2>
            <p>Como nuestros clientes leales, esperamos brindarle el mejor servicio y los mejores productos. Si está buscando su clínica o salón más cercano, quiere dejarnos sus comentarios o necesita ayuda para realizar un pedido, no dude en ponerse en contacto con un miembro de nuestro útil equipo de servicio al cliente.</p>
            <p><i class="fas fa-map-marker-alt"></i> Av Angamos Oeste 351-355 of 1202, Miraflores</p>
            <p><i class="far fa-envelope"></i> <a href="mailto:info@medik8.com.pe">info@medik8.com.pe</a></p>
            <p><i class="fas fa-phone"></i> <a href="#">(01) 2415029</a>
                <br>Lunes a Viernes: 09:00-18:30
                <br>Sábados: 9:00 - 15:00
            </p>
        </div>
    </div>
</section>












<?php include 'includes/templates/footer.php' ?>






