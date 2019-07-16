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
        Crear Tratamiento
        <small>llena el formulario para crear un Tratamiento</small>
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-10">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Crear Tratamiento</h3>

                 
              </div>
              <div class="box-body">
                <form role="form" id="guardar-registro-archivo" enctype="multipart/form-data" name="crear-admin" method="post" action="modelo-producto.php">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nombre_producto">Titulo:</label>
                            <input type="text" class="form-control" name="titulo_producto" placeholder="Nombre del Tratamiento">
                        </div>
                        <div class="form-group">
                            <div class="box-header">
                                <h3 class="box-title">Frase secundaria
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
                                <textarea class="textarea" placeholder="Contenido del tratamiento" name="contenido"
                                        style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="categoria">Categoria</label>
                            <select name="categoria" id="">
                              <option value="0">-Seleccionar-</option>
                              <?php
                                $sql="SELECT * FROM categoria";
                                $resultado=$conn->query($sql);

                                while($cat = $resultado->fetch_assoc()):
                                  var_dump($cat);
                                  ?>
                                            <option value="<?php echo $cat['id_categoria']?>"><?php echo ($cat['categoria']) ?></option> 
                                  <?php endwhile ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nombre_producto">Precio:</label>
                            <input type="text" class="form-control" name="precio" placeholder="Precio del producto">
                        </div>
                        <div class="form-group">
                        <div class="box-header">
                                <h3 class="box-title">Descripcion corta
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
                                <textarea class="textarea" placeholder="Descripcion corta" name="contenido_corto"
                                        style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="box-header">
                                <h3 class="box-title">Texto Principal
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
                                <textarea class="textarea" placeholder="Texto principal" name="contenido_principal"
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="box-header">
                                <h3 class="box-title">Beneficios
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
                                <textarea class="textarea" placeholder="Indica los beneficios" name="beneficios"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="box-header">
                                <h3 class="box-title">Ingredientes
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
                                <textarea class="textarea" placeholder="Indica los ingredientes" name="ingredientes"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="box-header">
                                <h3 class="box-title">Modo de uso
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
                                <textarea class="textarea" placeholder="Indica los modos de uso" name="modo_uso"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>
                        <div class="box-header">
                                <h3 class="box-title">Texto final 
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
                                <textarea class="textarea" placeholder="Indica los modos de uso" name="texto_final"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="tipo" id="" class="form-control">
                                    <option value="0">-Seleccionar tipo de producto-</option>
                                    <option value="Suero">Suero</option>
                                    <option value="Hidratante">Hidratante</option>
                                    <option value="Protector">Protector Solar</option>
                                    <option value="Limpiador">Limpiador</option>
                                    <option value="Exfoliante">Exfoliante</option>
                                    <option value="Tónico">Tónico</option>
                                    <option value="Mascarilla">Mascarilla</option>
                                    <option value="Especifícos">Especifícos</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Imagen Principal:</label>
                            <input type="file" class="form-control" id="" name="archivo_producto[]">
                            <!-- <p class="help-block">1072x640</p> -->
                        </div>
                        <div class="form-group">
                            <label for="">Imagenes extras:</label>
                            <input type="file" class="form-control" name="archivo_producto[]">
                            <input type="file" class="form-control" name="archivo_producto[]">
                            <input type="file" class="form-control" name="archivo_producto[]">
                            <input type="file" class="form-control" name="archivo_producto[]">
                            <input type="file" class="form-control" name="archivo_producto[]">
                            <!-- <p class="help-block">1072x640</p> -->
                        </div>
                        <div class="form-group">
                            <label for="">Imagen barra lateral:</label>
                            <input type="file" class="form-control" id="" name="archivo_barra">
                            <!-- <p class="help-block">1072x640</p> -->
                        </div>

                        <div class="box-header">
                                <h3 class="box-title">Texto de barra 
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
                                <textarea class="textarea" placeholder="Indica los modos de uso" name="texto_barra"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre_producto">Seleccion:</label>
                            <input type="checkbox" name="puntos[]" id="" value="1"> Sin Color Sintético
                            <input type="checkbox" name="puntos[]" id="" value="2"> Sin Fragancias Artificiales 
                            <input type="checkbox" name="puntos[]" id="" value="3"> Sin Parabenos 
                            <input type="checkbox" name="puntos[]" id="" value="4"> Sin Ftalatos
                            <input type="checkbox" name="puntos[]" id="" value="5"> Donación de Zipper 
                            <input type="checkbox" name="puntos[]" id="" value="6"> Sin Alcohol  
                            <input type="checkbox" name="puntos[]" id="" value="7"> No Testado en Animales 

                            <input type="checkbox" name="puntos[]" id="" value="8"> Apto para Veganos 
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