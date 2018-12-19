<?php include_once 'includes/templates/header_inicio.php';?>
    <?php if(isset($_POST['submit'])){
       $nombre=$_POST['nombre'];
       $apellido=$_POST['apellidos'];
       $email=$_POST['email']; 

       
    ?>
       
    <?php
    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "INSERT INTO usuario (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
        if (mysqli_query($conn, $sql)) {
            ?>
            <br>
            <br>
            <br>    
            <br>
            <br>
            <br>
            <br>
            <div class="contenedor_titulo">
                
            <h1 class=titulo>Gracias por Registrarte</h1>
            </div>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }catch(Exception $e){
        $error->$e->getMessage();
        echo $error;
    }
 
        }?>

</section>
<?php include_once 'includes/templates/footer.php';?>

