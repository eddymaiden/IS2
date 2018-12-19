<?php
  session_start();
  if(isset($_SESSION['sesion_id'])) {
    $sesion_id=$_SESSION['sesion_id'];
  ?>
 <?php include_once 'includes/templates/header.php';?>
    <section class="mis_platos">
      <div class="contenido_mis_platos">
        <h2 class="titulo">Tus platos </h2>
        <h2><a href="#publicados">publicados</a> / <a href="#vendidos">vendidos</a></h2>
        <p class="desc">Aquí podrás subir platos y gestionar los que ya tienes</p>
        <span class="anchor" id="plato_nuevo"></span>
        <div class="plato_nuevo clearfix">
          <div class="button">
            <i class="fas fa-plus"></i>
          </div>
          <p>Subir un plato más a mi catálogo</p>
        </div>
        <form class="formulario" method="POST" action="validar_plato.php" enctype ="multipart/form-data">
            <div class="caja">
              <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" size="10" required>
              </div>
              <div class="campo">
                <label for="precio">precio: </label>
                <input type="text" name="precio"  size="10" required>
              </div>
              <div class="campo">
                <label for="file">foto: </label>
                <input type="file" name="foto" > <br>
              </div>
              <div class="campo">
                <textarea name="descripcion" rows="8" cols="60" required placeholder="descrición de tu plato"></textarea>
              </div>
              <div class="campo alergeno clearfix">
              <label for="alergeno"> <b>NO</b> contiene:</label>
              <input type="checkbox" name="gluten" id="alergeno1" value="1">gluten
              <input type="checkbox" name="lactosa" id="alergeno2" value="2">lactosa
              <input type="checkbox" name="soja" id="alergeno3" value="3">soja
            </div>
              <input type="submit" value="Subir plato" name="boton">
            </div>
        </form>

        <span class="anchor" id="publicados"></span>
        <h3 class="titulo">Publicados</h3>
        <!--PUBLICADOS-->
        <?php 
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT * FROM `plato` WHERE id_usuario='$sesion_id'";
          $resultado = $conn->query($sql);
         while ($fila = $resultado->fetch_assoc()) {
          ?>
          
        
          <div class="plato publicado  clearfix">
            <div class="imagen_plato">
              <img src="img/<?php echo $fila['url_imagen'];?>" alt="imagen_plato">
            </div>
            <p> <?php echo $fila['nombre']; ?> </p>
            <p class="precio_plato"> <?php echo $fila['precio']; ?>€</p>
          </div>
  
             <?php
            
         } 
          
         
          
        } catch (\Exception $e) {
          echo $e->getMessage();
        }
         $conn->close();
      
        ?>
        
        <!-- VENDIDOS-->
        <div class="ocultar">
          <span class="anchor" id="vendidos"></span>
          <h3 class="titulo">Vendidos</h3>
          <div class="plato publicado  clearfix">
            <div class="imagen_plato">
              <img src="img/hamburguesa-de-ternera-gallega.jpg" alt="imagen_plato">
            </div>
            <p>Hamburguesa</p>
            <p>$10</p>
          </div>
          <div class="plato publicado  clearfix">
            <div class="imagen_plato">
              <img src="img/nuggets-de-pollo-caseros.jpg" alt="imagen_plato">
            </div>
            <p>Nugggets</p>
            <p>$11.5</p>
          </div>
        </div>
      </div>
  </div>
  </section>
  </div>
  <?php include_once 'includes/templates/footer.php';
  }
  ?>