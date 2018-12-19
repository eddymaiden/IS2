<?php if(isset($_POST['buscar'])) {
    $ciudad= $_POST['nombre_ciudad'];
    $nombre_plato= $_POST['nombre_alimento'];
    if($ciudad!='' && $nombre_plato !=''){
        try {
            $sql = "SELECT  DISTINCT plato.id, plato.nombre, plato.url_imagen, plato.descripcion, plato.precio FROM `plato` INNER JOIN usuario ON plato.id_usuario=usuario.id  JOIN plato_tiene_alergeno ON plato.id=plato_tiene_alergeno.id_plato JOIN usuario_tiene_alergeno ON plato_tiene_alergeno.id_alergeno=usuario_tiene_alergeno.id_alergeno  WHERE usuario_tiene_alergeno.id_usuario='$sesion_id' AND plato.nombre LIKE '%$nombre_plato%' AND ciudad='$ciudad';";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    else if ($ciudad=='' && $nombre_plato !='') {
        try {
    
            "SELECT  DISTINCT plato.id, plato.nombre, plato.url_imagen, plato.descripcion, plato.precio FROM `plato` JOIN plato_tiene_alergeno ON plato.id=plato_tiene_alergeno.id_plato JOIN usuario_tiene_alergeno ON plato_tiene_alergeno.id_alergeno=usuario_tiene_alergeno.id_alergeno  WHERE usuario_tiene_alergeno.id_usuario='$sesion_id' AND plato.nombre LIKE '%$nombre_plato%';";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    else if ($ciudad!='' && $nombre_plato =='') {
        try {
    
            "SELECT  DISTINCT plato.id, plato.nombre, plato.url_imagen, plato.descripcion, plato.precio FROM `plato` INNER JOIN usuario ON plato.id_usuario=usuario.id  JOIN plato_tiene_alergeno ON plato.id=plato_tiene_alergeno.id_plato JOIN usuario_tiene_alergeno ON plato_tiene_alergeno.id_alergeno=usuario_tiene_alergeno.id_alergeno  WHERE usuario_tiene_alergeno.id_usuario='$sesion_id'  AND ciudad='$ciudad';";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    else if ($ciudad=='' && $nombre_plato =='') {
        try {
    
            $sql = "SELECT  DISTINCT plato.id, plato.nombre, plato.url_imagen, plato.descripcion, plato.precio FROM `plato` JOIN plato_tiene_alergeno ON plato.id=plato_tiene_alergeno.id_plato JOIN usuario_tiene_alergeno ON plato_tiene_alergeno.id_alergeno=usuario_tiene_alergeno.id_alergeno  WHERE usuario_tiene_alergeno.id_usuario='$sesion_id';";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
else{
try {
    $sql = "SELECT  DISTINCT plato.id, plato.nombre, plato.url_imagen, plato.descripcion, plato.precio FROM `plato` JOIN plato_tiene_alergeno ON plato.id=plato_tiene_alergeno.id_plato JOIN usuario_tiene_alergeno ON plato_tiene_alergeno.id_alergeno=usuario_tiene_alergeno.id_alergeno  WHERE usuario_tiene_alergeno.id_usuario='$sesion_id';";
    $resultado = $conn->query($sql);
} catch (\Exception $e) {
    echo $e->getMessage();
}
}
?>
 