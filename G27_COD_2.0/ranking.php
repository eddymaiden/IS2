<?php 
try {
    require_once('includes/funciones/bd_conexion.php');
    $sql="SELECT AVG(puntos), usuario_puntua_usuario.id_puntuado, usuario.url_imagen, usuario.nombre, usuario.ciudad FROM usuario_puntua_usuario JOIN usuario ON usuario_puntua_usuario.id_puntuado=usuario.id  GROUP BY id_puntuado  ORDER BY AVG(puntos) DESC LIMIT 10;";
    $resultado = $conn->query($sql);
    }
      catch (\Exception $e) {
      echo $e->getMessage();
    }
    $conn->close();
?>

<?php include_once 'includes/templates/header.php';?>
<section class="ranking">
<h2 class="titulo">Ranking</h2>
<?php
$posicion = 1; 
while($fila=$resultado->fetch_assoc()){ ?>
        <div class="jugador clearfix" id="jugador<?php echo $fila['id_puntuado'];?>">
            <p>#<?php echo $posicion ?></p>
            <img src="img/<?php echo $fila['url_imagen']?>" alt="imagen_usuario">
            <p><?php echo $fila['nombre'];?></p>
            <p><?php echo $fila['ciudad'];?></p>
            <p><i class="fas fa-star"></i><?php 
            $puntos = $fila['AVG(puntos)'];
            $english_format_number = number_format($puntos, 2, '.', '');
            echo $english_format_number;?></p>
        </div>
   <?php $posicion++;
    } 
?>
</section>
<?php include_once 'includes/templates/footer.php';?>