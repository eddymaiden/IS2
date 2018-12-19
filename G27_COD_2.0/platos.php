<?php include_once 'includes/templates/header.php';?>


<?php require_once('includes/funciones/bd_conexion.php'); 
session_start();
$sesion_id=$_SESSION['sesion_id'];
$ciudad= $_POST['nombre_ciudad'];
$nombre_plato= $_POST['nombre_alimento'];
$sql2 = "SELECT alergeno.tipo FROM `alergeno` JOIN usuario_tiene_alergeno ON alergeno.id= usuario_tiene_alergeno.id_alergeno WHERE usuario_tiene_alergeno.id_usuario='$sesion_id'";
          $resultado2 = $conn->query($sql2);
          $fila2= $resultado2->fetch_assoc();
          if(isset($fila2)){
            require_once('includes/funciones/con_alergenos.php');
            }
            else{
                require_once('includes/funciones/sin_alergenos.php');
            }
?>


<section class="platos">
<h2 class="titulo">Platos</h2>
    <ul class="lista-platito clearfix">
        <?php 
          while($platos = $resultado->fetch_assoc()) { ?>
            <li>
                <div class="platito">
                    <a  class="platito-info" href="#plato<?php echo $platos['id'];?>">
                        <img src="img/<?php echo $platos['url_imagen']?>" alt=""> 
                    </a>
                    <form action="chat.php" method="POST">
                        <input type="hidden" name="plato_id" value="<?php echo $platos['id'];?>">
                        <input type="submit" class="chatear" name="chatear" value="CHATEAR">
                        </form> 
               </div>
            </li>
            <div style="display:none;">
                <div class="platito-info" id="plato<?php echo $platos['id'];?>">
                            <h2><?php echo $platos['nombre'];?></h2>
                            <img src="img/<?php echo $platos['url_imagen'];?>" alt="">
                        <p><?php echo $platos['descripcion']; ?></p>
                 </div>
            </div> 
         <?php }

         
           $conn->close();
        ?>
    </ul>        
</section>
<?php include_once 'includes/templates/footer.php';?>