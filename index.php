<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD EN PHP & MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<h1 class="text-center text-secondary">CRUD EN PHP Y MYSQL | BOOTSTRAP - MVC</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_producto.php";
    ?>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">AGREGAR VEHICULO</h3>
            <?php
            include "controlador/registro_persona.php";

            ?>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Placa</label>
                <input type="text" class="form-control" name="placa">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Año</label>
                <input type="text" class="form-control" name="anio">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Color</label>
                <input type="text" class="form-control" name="color">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Agregar</button>
        </form>

        <div class="col-8 p-4">
        <h3 class="text-center text-secondary">DATOS DE VIHICULOS</h3>
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">PLACA</th>
                        <th scope="col">MARCA</th>
                        <th scope="col">MODELO</th>
                        <th scope="col">AÑO</th>
                        <th scope="col">COLOR</th>
                        <th scope="col">AJUSTES</th>
                    </tr>
            </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" select * from vehiculos");
                    while ($datos=$sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_vehiculos ?></td>
                            <td><?= $datos->placa ?></td>
                            <td><?= $datos->marca ?></td>
                            <td><?= $datos->modelo ?></td>
                            <td><?= $datos->anio ?></td>
                            <td><?= $datos->color ?></td>
                            <td>
                                <a href="modificar_producto.php?id= <?= $datos->id_vehiculos ?>">EDITAR</a>
                                <a href="index.php?id= <?= $datos->id_vehiculos ?>">ELIMINAR</a>
                            </td>
                        </tr>

                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>