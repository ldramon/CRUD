<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["placa"]) and !empty($_POST["marca"]) and !empty($_POST["modelo"]) and !empty($_POST["anio"]) and !empty($_POST["color"])) {
        $id=$_POST["id"];
        $placa=$_POST["placa"];
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $anio=$_POST["anio"];
        $color=$_POST["color"];
        $sql=$conexion->query("update vehiculos set placa='$placa', marca='$marca', modelo='$modelo', anio='$anio', color='$color' where id_vehiculos='$id' ");
        if ($sql==1) {
            header("location:index.php");
        }else{
            echo "<div class='alert alert-warning'>Error al modificar datos</div>";
            
        }

    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}
?>