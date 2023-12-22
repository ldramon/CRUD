<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("delete from vehiculos where id_vehiculos=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Vehiculo eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al modificar</div>';
    }  
}
?>