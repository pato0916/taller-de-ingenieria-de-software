<?php
include("conexion.php");

$consulta = "SELECT * from marcas";
$respuesta = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clase9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container p-4">
        <div class="container text-center">
            <div class="row">
                <div class="col">

                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">NOMBBRE</span>
                        <input type="text" name="nombre" class="form-control" placeholder="logonissan"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">ORIGEN</span>
                        <select name="origen" class="form-select" aria-label="Default select example">
                            <option selected>seleccionar una opcion</option>
                            <option value="japon">Japon</option>
                            <option value="china">China</option>
                            <option value="francia">Francia</option>
                        </select>
                        
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">LOGO</span>
                        <input type="text" class="form-control" placeholder="nissan" aria-label="Username"
                            aria-describedby="basic-addon1">

                    </div>
                    <input class="btn btn-primary" type="button" value="subir">
                </div>
                
                <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"> <strong>ID</strong> </th>
                                <th scope="col"><strong>NOMBRE</strong></th>
                                <th scope="col"><strong>ORIGEN</strong></th>
                                <th scope="col"><strong>LOGO</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($respuesta)) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["nombre"] . "</td>";
                                echo "<td>" . $row["origen"] . "</td>";
                                echo "<td>" . $row["logo"] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>






            </div>
</body>

</html>