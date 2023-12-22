<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["placa"]) and !empty($_POST["marca"]) and !empty($_POST["modelo"]) and !empty($_POST["anio"]) and !empty($_POST["color"])) {

        $placa=$_POST["placa"];
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $anio=$_POST["anio"];
        $color=$_POST["color"];

        $sql=$conexion->query("insert into vehiculos(placa,marca,modelo,anio,color) values('$placa', '$marca', '$modelo', '$anio', '$color')");

        if ($sql==1) {
            echo '<div class="alert alert-success">Registro exitoso</div>';
            # code...
        } else {
            echo '<div class="alert alert-success">Fallo al registrar</div>';
            # code...
        }   
    }else{
        echo '<div class="alert alert-success">ALGUN CAMPO FALTA DE REGISTRAR/div>';
    }
}

?>