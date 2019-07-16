
<?php include 'includes/templates/header.php' ?>

<div class="barra-seccion">

    <ul class="container nav justify-content-start">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Página de inicio ></a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">Condiciones Generales</a>
        </li>
    </ul>

</div>
<section class="container">
       <?php if($_GET['title'] == 'terminos-y-condiciones'){
           include 'includes/templates/terminos.php';
       } elseif($_GET['title'] == 'condiciones-de-uso'){
            include 'includes/templates/condiciones.php';
       }
       ?>
</section>

<?php include 'includes/templates/footer.php' ?>