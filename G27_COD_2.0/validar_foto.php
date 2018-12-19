<?php
  session_start();
  if(isset($_SESSION['sesion_id'])) {
    $sesion_id=$_SESSION['sesion_id'];

  }
  if (isset($_POST['boton'])) {
    $url_foto = $_FILES['foto']['name'];
  }

  try {
    require_once('includes/funciones/bd_conexion.php');
    $sql = "UPDATE `usuario` SET `url_imagen` = '$url_foto' WHERE `usuario`.`id` = '$sesion_id'; ";
    if (mysqli_query($conn, $sql)) {
      
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }
  $conn->close();
  header("location: http://localhost/G27_COD_1.0/perfil.php");
  ?>

