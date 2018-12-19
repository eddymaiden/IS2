<?php if(isset($_POST['buscar'])) {
    $ciudad= $_POST['nombre_ciudad'];
    $nombre_plato= $_POST['nombre_alimento'];
    if($ciudad!='' && $nombre_plato !=''){
        try {
    
           $sql = "SELECT plato.id, plato.nombre, plato.url_imagen, plato.descripcion, plato.precio FROM `plato` INNER JOIN usuario ON plato.id_usuario=usuario.id WHERE plato.nombre LIKE '%$nombre_plato%' AND ciudad='$ciudad'" ;
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    else if ($ciudad=='' && $nombre_plato !='') {
        try {
    
            $sql = "SELECT plato.id, plato.nombre, plato.url_imagen, plato.descripcion, plato.precio FROM `plato` WHERE plato.nombre LIKE '%$nombre_plato%'" ;
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    else if ($ciudad!='' && $nombre_plato =='') {
        try {
    
            $sql = "SELECT plato.id, plato.nombre, plato.url_imagen, plato.descripcion, plato.precio FROM `plato` INNER JOIN usuario ON plato.id_usuario=usuario.id WHERE usuario.ciudad='$ciudad'" ;
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    else if ($ciudad=='' && $nombre_plato =='') {
        try {
    
            $sql = "SELECT * FROM `plato`";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
else{
try {
    $sql = "SELECT * FROM `plato`";
    $resultado = $conn->query($sql);
} catch (\Exception $e) {
    echo $e->getMessage();
}
}
?>