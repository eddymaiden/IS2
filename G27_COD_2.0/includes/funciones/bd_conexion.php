<?php 
        $conn = new mysqli("localhost", "root", "/*TU CONTRASEÑA*/","eatnow",8889);
        $conn->set_charset( utf8 );
        if($conn->connect_error){
            echo $error->$conn->connect_error;
        } 
    ?>