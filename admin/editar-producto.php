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
        Editar Tratamiento
        <small>llena el formulario para editar un tratamiento</small>
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-8">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Edita el tratamiento</h3>

                <?php
                    $id_producto = $_GET['id'];
                    $sql = "SELECT * FROM productos WHERE id_producto = $id_producto";
                    $respuesta = $conn->query($sql);

                    $product = $respuesta->fetch_assoc();
                ?>
                 
              </div>
              <div class="box-body">
                <form role="form" id="guardar-registro-archivo" enctype="multipart/form-data" name="crear-admin" method="post" action="modelo-producto.php">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="titulo_producto">Titulo Producto:</label>
                            <input type="text" class="form-control" id="titulo_producto" name="titulo_producto" placeholder="Nombre del tratamiento" value="<?php echo $product['titulo_producto'] ?>">
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
                                        style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['frase_producto'] ?>"</textarea>
                            
                            </div>
                        </div>
                    
                        <div class="form-group">
                          <label for="categoria">Categoria</label>
                            <select name="categoria" id="">
                              <option value="0">-Seleccionar-</option>
                              <?php
                                $ql="SELECT * FROM categoria";
                                $resultado=$conn->query($ql);

                                while($cat = $resultado->fetch_assoc()):
                                  if($cat['id_categoria'] == $product['id_cat']):
                                  ?>
                                      <option value="<?php echo $cat['id_categoria']?>" selected><?php echo ($cat['categoria']) ?></option> 
                                      <?php else: ?>
                                      <option value="<?php echo $cat['id_categoria']?>"><?php echo ($cat['categoria']) ?></option>  
                                  <?php 
                                  endif;
                                  endwhile ?>
                            </select>
                        </div>

                        
                      <div class="form-group">
                                <?php $seleccion = json_decode($product['seleccion']) ?>
                                <?php
                                    // var_dump($seleccion);
                                    if(empty($seleccion)):
                                ?>
                        <div class="form-group">
                            <label for="nombre_producto">Seleccion:</label>
                            <p><input type="checkbox" name="puntos[]" id="" value="1"> Sin Color Sintético</p>
                            <p><input type="checkbox" name="puntos[]" id="" value="2"> Sin Fragancias Artificiales </p>
                            <p><input type="checkbox" name="puntos[]" id="" value="3"> Sin Parabenos </p>
                            <p><input type="checkbox" name="puntos[]" id="" value="4"> Sin Ftalatos</p>
                            <p><input type="checkbox" name="puntos[]" id="" value="5"> Donación de Zipper </p>
                            <p><input type="checkbox" name="puntos[]" id="" value="6"> Sin Alcohol  </p>
                            <p><input type="checkbox" name="puntos[]" id="" value="7"> No Testado en Animales </p>

                            <p><input type="checkbox" name="puntos[]" id="" value="8"> Apto para Veganos </p>
                        </div>
                                    <?php else: ?>
                            <label for="nombre_producto">Seleccion:</label>
                            <p><input type="checkbox" name="puntos[]" <?php echo ($seleccion[0] == 1) ? 'checked' : '' ?> id="" value="1"> Sin Color Sintético</p>
                            <p><input type="checkbox" name="puntos[]" <?php echo ($seleccion[1] == 2) ? 'checked' : '' ?> id="" value="2"> Sin Fragancias Artificiales </p>
                            <p><input type="checkbox" name="puntos[]" <?php echo ($seleccion[2] == 3) ? 'checked' : '' ?> id="" value="3"> Sin Parabenos </p>
                            <p><input type="checkbox" name="puntos[]" <?php echo ($seleccion[3] == 4) ? 'checked' : '' ?> id="" value="4"> Sin Ftalatos</p>
                            <p><input type="checkbox" name="puntos[]" <?php echo ($seleccion[4] == 5) ? 'checked' : '' ?> id="" value="5"> Donación de Zipper </p>
                            <p><input type="checkbox" name="puntos[]" <?php echo ($seleccion[5] == 6) ? 'checked' : '' ?> id="" value="6"> Sin Alcohol  </p>
                            <p><input type="checkbox" name="puntos[]" <?php echo ($seleccion[6] == 7) ? 'checked' : '' ?> id="" value="7"> No Testado en Animales </p>

                            <p><input type="checkbox" name="puntos[]" <?php echo ($seleccion[7] == 8) ? 'checked' : '' ?> id="" value="8"> Apto para Veganos </p>
                        </div>
                        <?php endif ?>

                        <div class="form-group">
                            <label for="nombre_producto">Precio:</label>
                            <input type="text" class="form-control" name="precio" placeholder="Precio del producto" value="<?php echo $product['precio'] ?>">
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
                                        style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['texto_descripcion'] ?></textarea>
                            
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
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['texto_principal'] ?></textarea>
                            
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
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['beneficios'] ?></textarea>
                            
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
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['ingredientes'] ?></textarea>
                            
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
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['modo_uso'] ?></textarea>
                            
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
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['texto_final'] ?></textarea>
                            
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <select name="tipo" id="" class="form-control">
                                    <option value="0">-Seleccionar tipo de producto-</option>
                                    <option <?php echo ($product['tipo'] == 'Suero') ? 'selected' : '' ?> value="Suero">Suero</option>
                                    <option <?php echo ($product['tipo'] == 'Hidratante') ? 'selected' : '' ?> value="Hidratante">Hidratante</option>
                                    <option <?php echo ($product['tipo'] == 'Protector') ? 'selected' : '' ?> value="Protector">Protector Solar</option>
                                    <option <?php echo ($product['tipo'] == 'Limpiador') ? 'selected' : '' ?> value="Limpiador">Limpiador</option>
                                    <option <?php echo ($product['tipo'] == 'Exfoliante') ? 'selected' : '' ?> value="Exfoliante">Exfoliante</option>
                                    <option <?php echo ($product['tipo'] == 'Tónico') ? 'selected' : '' ?> value="Tónico">Tónico</option>
                                    <option <?php echo ($product['tipo'] == 'Mascarilla') ? 'selected' : '' ?> value="Mascarilla">Mascarilla</option>
                                    <option <?php echo ($product['tipo'] == 'Especifícos') ? 'selected' : '' ?> value="Especifícos">Especifícos</option>
                            </select>
                        </div>


                        <div class="form-group">
                        <?php $imagenes = json_decode($product['url_imagenes']); ?> 
                            <label for="">Imagen Principal:</label>
                            <img src="../img/productos/<?php echo $imagenes[0] ?>" width="150px" alt="">
                            <input type="file" class="form-control" id="" name="archivo_producto[]">
                            <!-- <p class="help-block">1072x640</p> -->
                        </div>
                        <div class="form-group">
                            <label for="">Imagenes extras:</label>
                            <?php
                                
                                for($i =1; $i < count($imagenes); $i++):
                            ?>
                                <img src="../img/productos/<?php echo $imagenes[$i] ?>" width="150px" alt="">
                                <input type="file" class="form-control" name="archivo_producto[]">
                            <?php endfor ?>
                            
                            <input type="file" class="form-control" name="archivo_producto[]">
                            <input type="file" class="form-control" name="archivo_producto[]">
                            <!-- <p class="help-block">1072x640</p> -->
                        </div>
                        <div class="form-group">
                            <label for="">Imagen barra lateral:</label>
                            <img src="../img/productos/<?php echo $product['url_barra'] ?>" width="150px" alt="">
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
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['texto_barra'] ?></textarea>
                            
                            </div>
                        </div>
                       
                       
			            
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <input type="hidden" name="registro" value="actualizar">
                      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                      <button type="submit" class="btn btn-primary">Agregar</button>
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


                 
          
           
                        
                       
                       
                        
                       
                                             
                       
			 