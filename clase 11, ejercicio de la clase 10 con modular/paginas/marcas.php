<?php

// include("conexion.php");
require_once 'conexion.php';

$consulta = "SELECT * FROM marcas";
$respuesta = mysqli_query($conexion, $consulta);

?>


<div class="container p-4">
        <div class="row">
            <div class="col">
                <form action="funciones/guardar.php" method="POST">

                    <div class="input-group mb-2">

                        <span class="input-group-text" id="basic-addon1">NOMBRE</span>
                        <input type="text" name="nombre" class="form-control" placeholder="Nissan" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">ORIGEN</span>

                        <select name="origen" class="form-select" aria-label="Default select example">
                            <option selected>Seleccione una opcion</option>
                            <option value="japon">Japon</option>
                            <option value="china">China</option>
                            <option value="francia">Francia</option>
                        </select>

                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">LOGO</span>
                        <input type="text" name="logo" class="form-control" placeholder="logo-marca.jpg"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <input type="submit" value="GUARDAR" class="btn btn-primary">
                </form>
            </div>

            <div class="col">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><strong>ID</strong></th>
                            <th scope="col"><strong>NOMBRE</strong></th>
                            <th scope="col"><strong>ORIGEN</strong></th>
                            <th scope="col"><strong>LOGO</strong></th>
                            <th scope="col"><strong>OPCIONES</strong></th>
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
                            echo "<td>";
                            echo "<a href='funciones/eliminar.php?id_enviado=". $row["id"] . "'>";
                            echo "<button class='btn btn-sm btn-dark ms-2'>ELIMINAR</button>";
                            echo "</a>";
                            echo "<a href='index.php?p=marcas?id_enviado=". $row["id"] . "'>";
                            echo "<button class='btn btn-sm btn-primary ms-2'>EDITAR</button>";
                            echo "</a>";
                            echo "</td>";
                        }
                        ?>
                    <tbody>
                </table>
            </div>
        </div>
    </div>