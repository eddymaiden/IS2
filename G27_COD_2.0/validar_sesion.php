
<?php if(isset($_POST['submit'])){
  $email=$_POST['email'];
  
  try {
    require_once('includes/funciones/bd_conexion.php');
    $sql = "SELECT id FROM `usuario` WHERE email='$email'";
    $resultado = $conn->query($sql);
    $fila = $resultado->fetch_assoc();
    if ($fila['id']>0) {
      // Se abre una sesión.
      session_start();
      $_SESSION['sesion_id'] = $fila['id'];
      // Ya puedes redirigir.
     header("location: http://localhost/G27_COD_1.0/mis_platos.php");
    }
    else{
      include_once 'includes/templates/header_inicio.php';
      ?> <div class="contenedor_titulo"> 
            <br>
            <br>
            <br>    
            <br>
            <br>
            <br>
            <br>      
      <h1 class=titulo>no existe ese usuario</h1>
      </div> <?php
      include_once 'includes/templates/footer.php';
  
    }
    
    
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
   $conn->close();

  }
  else{

  }?>





                  