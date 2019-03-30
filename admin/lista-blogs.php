<?php 
include('inc/funciones/funciones.php');
include('inc/funciones/sessiones.php');
include('inc/templates/header.php');
include('inc/templates/barra.php');
include('inc/templates/sidebar.php'); 

?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Lista de Blogs</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Edita o elimina Blogs</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Editado</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            try{

                                $sql = "SELECT * FROM blog";
                                $resultado = $conn->query($sql);

                            }catch(Exception $e){
                                echo "Error: " . $e->getMessage();
                            }
                            
                            while($blog = $resultado->fetch_assoc()):
                            ?>
                                <tr>
                                    <td><?php echo $blog['titulo_blog'] ?></td>
                                    <td><?php echo $blog['editado'] ?></td>
                                    <td>
                                        <a href="editar-blog.php?id=<?php echo $blog['id_blog']  ?>"class="btn bg-orange btn-flat margin"> <i class="fa fa-pencil"></i></a>
                                        <a href="#" data-id="<?php echo $blog['id_blog']  ?>" data-type="blog" class="btn bg-maroon btn-flat margin borrar_registro"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>



                            <?php endwhile; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Contenido</th>
                            <th>Categoria</th>
                            <th>Principal</th>
                            <th>Imagen Muestra</th>
                            <th>Acción</th>
                        </tr>
                        </tfoot>
                    </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- col-xs-12 -->
        </div>
        <!-- .row -->
    </section>
            <!-- .content -->


</div>
<!-- .content-wrapper -->














<?php 

include('inc/templates/footer.php'); 

?>