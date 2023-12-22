<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from vehiculos where id_vehiculos=$id ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar Datos de Vehículo</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
            include "controlador/modificar_producto.php";
            while ($datos=$sql->fetch_object()){ ?>

            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Placa</label>
                <input type="text" class="form-control" name="placa" value="<?= $datos->placa?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca" value="<?= $datos->marca?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo" value="<?= $datos->modelo?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Año</label>
                <input type="text" class="form-control" name="anio" value="<?= $datos->anio?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Color</label>
                <input type="text" class="form-control" name="color" value="<?= $datos->color?>">
            </div>
                
            <?php } 

            ?>
            

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar datos del vehiculo</button>
        </form>


</body>
</html>