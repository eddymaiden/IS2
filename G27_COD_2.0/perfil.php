<?php try {
  session_start();
  $sesion_id=$_SESSION['sesion_id'];
  require_once('includes/funciones/bd_conexion.php');
    $sql = "SELECT * FROM `usuario` WHERE id='$sesion_id'";
          $resultado = $conn->query($sql);
          $fila = $resultado->fetch_assoc();
    $sql2 = "SELECT alergeno.tipo FROM `alergeno` JOIN usuario_tiene_alergeno ON alergeno.id= usuario_tiene_alergeno.id_alergeno
    WHERE usuario_tiene_alergeno.id_usuario='$sesion_id'";
          $resultado2 = $conn->query($sql2);
          while($fila2 = $resultado2->fetch_assoc()){
            $alergenos.= $fila2['tipo'] . '   ';
          }
          
} catch (\Exception $e) {
  //throw $th;
}
$conn->close();
?>






<?php include_once 'includes/templates/header.php';?>
    <section class="perfil">
      <div class="contenido_perfil">
        <div class="contenedor_titulo">
          <h2 class="titulo"> Tu perfil</h2>
          <p class="desc">Aquí podrás ver y editar los datos de tu perfil</p>
        </div>
        <div class="imagen_perfil clearfix ">
          <div class="contenedor_imagen_perfil">
            <img src="img/<?php 
            if($fila['url_imagen']==''){
              echo 'defaul-avatar_0.jpg';
            }else {
              echo $fila['url_imagen'];
            }
            ?>" alt="imagen_perfil">
          </div>
          <div class="contenedor_informacion_imagen_perfil">
            <p>Cambia tu imagen de perfil</p>
            <p>Esta es la imagen con la que la comunidad identificará tu perfil.</p>
            <form action="validar_foto.php" method="POST" enctype ="multipart/form-data">
              <div class="campo">
                <label for="file">foto: </label>
                <input type="file" name="foto" > <br>
              </div>
              <input type="submit" value="Subir foto" name="boton">
            </form>
          </div>
        </div>
        <div class="contenedor_formulario_inicio">
            <p>Nombre: <?php echo $fila['nombre'] ?></p>
            <p>Apellidos:<?php echo $fila['apellido'] ?> </p>
            <p>Email: <?php echo $fila['email'] ?></p>
            <p>Ubicacion de tus platos: <?php echo $fila['ciudad'] ?></p>
            <p>Alérgenos: <?php echo $alergenos ?> </p>
            <div class="button">
              Editar
            </div>
        </div>
        <div class="contenedor_formulario">
          <form class="formulario" method="POST" enctype ="multipart/form-data" action="validar_perfil.php">
            <div class="label clearfix">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="nombre" placeholder="<?php echo $fila['nombre'] ?>">
            </div>
            <div class="label clearfix">
              <label for="apellidos">Apellidos:</label>
              <input type="text" name="apellidos" placeholder="<?php echo $fila['apellido'] ?>">
            </div>
            <div class="label clearfix">
              <label for="email">Email:</label>
              <input type="Email" name="email"  placeholder="<?php echo $fila['email'] ?>">
            </div>
            <div class="label clearfix">
              <label for="ubicación">Ubicación de tus platos:</label>
              <input type="text" name="ubicacion" id="ubicación" placeholder="<?php echo $fila['ciudad'] ?>">
            </div>
            <div class="label alergeno clearfix">
              <label for="alergeno">Mis alergenos:</label>
              <input type="checkbox" name="gluten" id="alergeno1" value="1">gluten
              <input type="checkbox" name="lactosa" id="alergeno2" value="2">lactosa
              <input type="checkbox" name="soja" id="alergeno3" value="3">soja
            </div>
            <input type="submit" value="Guardar" name="boton">
          </form>
        </div>
      </div>
    </section>
    <?php include_once 'includes/templates/footer.php';?>