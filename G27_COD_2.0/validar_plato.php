<?php
  session_start();
  if(isset($_SESSION['sesion_id'])) {
    $sesion_id=$_SESSION['sesion_id'];

  }
  
  if (isset($_POST['boton'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $url_foto = $_FILES['foto']['name'];
    $descripcion = $_POST['descripcion'];
    $gluten = $_POST['gluten'];
    $lactosa = $_POST['lactosa'];
    $soja = $_POST['soja'];
  }


  try {
    require_once('includes/funciones/bd_conexion.php');
    $sql = "INSERT INTO plato (nombre, precio, url_imagen, id_usuario, descripcion)
            VALUES ('$nombre', '$precio', '$url_foto','$sesion_id','$descripcion'); ";
    if (mysqli_query($conn, $sql)) {
      $sql = "SELECT id FROM plato WHERE nombre='$nombre' AND precio='$precio' AND id_usuario='$sesion_id'";
      $resultado = $conn->query($sql);
      $platito = $resultado->fetch_assoc();
      $platito1 =$platito['id'];
      if($gluten==1){
        try {
          
          $sql = "INSERT INTO `plato_tiene_alergeno` (`id_plato`, `id_alergeno`) VALUES ('$platito1', '$gluten');";
          if (mysqli_query($conn, $sql)) {
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        }
          catch (\Exception $e) {
          echo $e->getMessage();
        }
      
      }
      if($lactosa==2){
        try {
          
          $sql = "INSERT INTO `plato_tiene_alergeno` (`id_plato`, `id_alergeno`) VALUES ('$platito1', '$lactosa');";
          if (mysqli_query($conn, $sql)) {
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        }
          catch (\Exception $e) {
          echo $e->getMessage();
        }
      
      }
      if($soja==3){
        try {
          
          $sql = "INSERT INTO `plato_tiene_alergeno` (`id_plato`, `id_alergeno`) VALUES ('$platito1', '$soja');";
          if (mysqli_query($conn, $sql)) {
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        }
          catch (\Exception $e) {
          echo $e->getMessage();
        }
      
      }
      

      header("location: http://localhost/G27_COD_1.0/mis_platos.php");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }
   $conn->close();
   ?>

  