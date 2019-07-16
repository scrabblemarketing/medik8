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
        Crear etiqueta
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-10">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Crear etiqueta</h3>

                 
              </div>
              <div class="box-body">
                <form role="form" id="guardar-registro-comun" name="crear-admin" method="post" action="modelo-blog.php">
                    <div class="box-body">

                        <div class="form-group">
                            <?php
                                $sql = "SELECT id_blog, titulo_blog FROM blog";
                                $res = $conn->query($sql);
                                $titulos = $res->fetch_assoc()
                            ?>
                            <select name="id_blog" id="">
                                <?php while($titulo = $res->fetch_assoc()): ?>
                                    <option value="<?php echo $titulo['id_blog'] ?>"><?php echo $titulo['titulo_blog'] ?></option>
                                <?php endwhile ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Contenido 1</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido 2</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido 3</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido 4</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido 5</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido 6</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido 7</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido 8</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido 9</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido 10</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido 11</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido 12</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido 13</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido 14</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido 15</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido 16</label>
                            <input type="text" class="form-control"  name="titulo[]" placeholder="Titulo">
                            <textarea name="contenido[]" id="" cols="30" rows="10" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                       
			            
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <input type="hidden" name="registro" value="acordeon">
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