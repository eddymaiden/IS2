<?php if(isset($_POST['chatear'])) {
    require_once('includes/funciones/bd_conexion.php'); 
    session_start();
    $sesion_id=$_SESSION['sesion_id'];
    $plato_id= $_POST['plato_id'];
    
    $sql = "SELECT id_usuario FROM plato WHERE id='$plato_id'";
    $resultado = $conn->query($sql);
    $fila=$resultado->fetch_assoc();
    $id_puntuado= $fila['id_usuario'];
    


$conn->close();
}?>
<?php include_once 'includes/templates/header.php';?>
<section class="chat">
<h2 class="titulo">CHAT</h2>
<div class="contenedor_chat">
    <div>

    </div>
</div>
<form action="puntuar.php" method="post">
<input type="number" id ="puntua" name="puntos" min="0" max="10" >
<input type="hidden" name="id_puntuador" value="<?php echo $sesion_id?>">
<input type="hidden" name="id_puntuado" value="<?php echo $id_puntuado?>">
<br>
<input type="submit" name="puntuar" value="PUNTUAR"> 
</form>


</section>
<?php include_once 'includes/templates/footer.php';?>
