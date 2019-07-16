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
        Crear Blog
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-10">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Crear Blog</h3>

                 
              </div>
              <div class="box-body">
                <form role="form" id="guardar-registro" name="crear-admin" method="post" action="modelo-blog.php">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="text" class="form-control"  name="categoria" placeholder="Categoria">
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
                                <textarea class="textarea" placeholder="Contenido categoria" name="contenido"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  name="categoria" placeholder="Etiqueta">
                        </div>

                       
                       
			            
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <input type="hidden" name="registro" value="nuevo">
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