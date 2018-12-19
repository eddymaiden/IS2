<?php if(isset($_POST['puntuar'])) {
    
    try{
        require_once('includes/funciones/bd_conexion.php'); 
    
    $puntos= $_POST['puntos'];
    $id_puntuador=$_POST['id_puntuador'];
    $id_puntuado=$_POST['id_puntuado'];
    if($id_puntuador==$id_puntuado){
        include_once 'includes/templates/header.php';
        echo "Error: No te puedes puntuar a ti mismo" . "<br>" ;
         include_once 'includes/templates/footer.php';
    }else{
    $sql = "INSERT INTO usuario_puntua_usuario (id_puntuador, id_puntuado, puntos) VALUES ('$id_puntuador', '$id_puntuado', '$puntos')";
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header("location: http://localhost/G27_COD_1.0/platos.php");
        } else {
            
        }
        mysqli_close($conn);
    }
    }catch(Exception $e){
        $error->$e->getMessage();
        echo $error;
    }

$conn->close();

}?>

