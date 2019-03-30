<?php 
   include('inc/funciones/funciones.php');
   include('inc/funciones/sessiones.php');
   include('inc/templates/header.php');
   include('inc/templates/barra.php');
   include('inc/templates/sidebar.php'); 
 ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Blog
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-10">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Editar Blog</h3>
                <?php
                $id=$_GET['id'];
                $sql = "SELECT * FROM blogs WHERE id_blog=$id";
                $resultado = $conn->query($sql);

                $blog = $resultado->fetch_assoc();

?>
                 
              </div>
              <div class="box-body">
                <form role="form" id="guardar-registro-archivo" enctype="multipart/form-data" name="crear-admin" method="post" action="modelo-blog.php">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nombre_tratamiento" name="titulo_blog" placeholder="Titulo" value="<?php echo $blog['titulo_blog'] ?>">
                        </div>

                        <div class="form-group">
                            <div class="box-header">
                              <h3 class="box-title">Contenido
                                </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <textarea class="textarea" placeholder="Contenido Tratamiento" name="contenido"
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $blog['contenido'] ?></textarea>
                            
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <label for="imagen_producto">Imagen Principal:</label>
                            <img src="../img/blog/<?php echo $blog['url_imagen_principal'] ?>" width="300" style="display:block; margin: 1rem;" alt="">
                            <input type="file" class="form-control" id="imagen_producto" name="imagen_principal">
                            <p class="help-block">1072x640</p>
                        </div>
                        <div class="form-group">
                            <label for="manual_producto">Imagen predeterminada:</label>
                            <img src="../img/muestra/<?php echo $blog['url_imagen_muestra'] ?>" height="200" style="display:block; margin: 1rem;" alt="">
                            <input type="file" class="form-control" id="ad3" name="imagen_muestra">
                            <p class="help-block">370x255</p>
                        </div>
                       
			            
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <input type="hidden" name="registro" value="actualizar">
                      <input type="hidden" name="id" value="<?php echo $id ?> ">
                      <button type="submit" class="btn btn-primary btn-flat">Agregar</button>
                    </div>

                  </form>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </section>
          <!-- /.content -->
          </div>
    </div>
  </div>
  <!-- /.content-wrapper -->


  <?php 
      
include('inc/templates/footer.php'); 
 ?>