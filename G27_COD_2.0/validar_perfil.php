<?php
  session_start();
  if(isset($_SESSION['sesion_id'])) {
    $sesion_id=$_SESSION['sesion_id'];

  }
  
  if (isset($_POST['boton'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $ubicacion = $_POST['ubicacion'];
    $gluten = $_POST['gluten'];
    $lactosa = $_POST['lactosa'];
    $soja = $_POST['soja'];
  }
  require_once('includes/funciones/bd_conexion.php');
    if($nombre==''){
    
    }else{
    try {
        $sql = "UPDATE `usuario` SET `nombre` = '$nombre' WHERE `usuario`.`id` = '$sesion_id'; ";
        if (mysqli_query($conn, $sql)) {
          
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
        catch (\Exception $e) {
        echo $e->getMessage();
      }
  }
  if($apellidos==''){
    
}else{
try {
    $sql = "UPDATE `usuario` SET `apellido` = '$apellidos' WHERE `usuario`.`id` = '$sesion_id'; ";
    if (mysqli_query($conn, $sql)) {
      
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }
}
if($email==''){
    
}else{
try {
    
    $sql = "UPDATE `usuario` SET `email` = '$email' WHERE `usuario`.`id` = '$sesion_id'; ";
    if (mysqli_query($conn, $sql)) {
      
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }

}
if($ubicacion==''){
    
}else{
try {
    
    $sql = "UPDATE `usuario` SET `ciudad` = '$ubicacion' WHERE `usuario`.`id` = '$sesion_id'; ";
    if (mysqli_query($conn, $sql)) {
      
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }
  
}
if($gluten==1){
  try {
    
    $sql = "INSERT INTO `usuario_tiene_alergeno` (`id_usuario`, `id_alergeno`) VALUES ('$sesion_id', '$gluten');";
    if (mysqli_query($conn, $sql)) {
      
  } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }

}else{
  try {
    
    $sql = "DELETE FROM  `usuario_tiene_alergeno` WHERE  id_usuario='$sesion_id' AND id_alergeno='1'; ";
    if (mysqli_query($conn, $sql)) {
      
  } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }
}
if($lactosa==2){
  try {
    
    $sql = "INSERT INTO `usuario_tiene_alergeno` (`id_usuario`, `id_alergeno`) VALUES ('$sesion_id', '$lactosa');";
    if (mysqli_query($conn, $sql)) {
      
  } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }

}else{
  try {
    
    $sql = "DELETE FROM  `usuario_tiene_alergeno` WHERE  id_usuario='$sesion_id' AND id_alergeno='2'; ";
    if (mysqli_query($conn, $sql)) {
      
  } else {
     // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }
}
if($soja==3){
  try {
    
    $sql = "INSERT INTO `usuario_tiene_alergeno` (`id_usuario`, `id_alergeno`) VALUES ('$sesion_id', '$soja');";
    if (mysqli_query($conn, $sql)) {
      
  } else {
     // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }

}else{
  try {
    
    $sql = "DELETE FROM  `usuario_tiene_alergeno` WHERE  id_usuario='$sesion_id' AND id_alergeno='3'; ";
    if (mysqli_query($conn, $sql)) {
      
  } else {
     // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
    catch (\Exception $e) {
    echo $e->getMessage();
  }
}
?> 
<?php 



$conn->close();

header("location: http://localhost/G27_COD_1.0/perfil.php");
   ?>