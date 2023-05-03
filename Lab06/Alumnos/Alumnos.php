<?php

include('../conexion.php');

//abrir conexion a BD
$conexion = conectar();

//consulta SQL
$sql = 'SELECT alumno_id, nombres, ape_paterno, ape_materno FROM alumno';

//ejecutar consulta
$resultado = mysqli_query($conexion, $sql);

//cerrar conexion a BD
desconectar($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    <h1>Alumnos</h1>

    <a href="agregar.html">Nuevo Alumno</a>
    <table>
        <thead style="background-color: lightseagreen;">
            <tr>
                <td>Id</td>
                <td>Nombres</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>&nbsp;</td>
            </tr>
        </thead>
        <tbody>
            <?php

            while ($alumno = mysqli_fetch_array($resultado)) {
                $alumno_id = $alumno['alumno_id'];
                $nombres = $alumno['nombres'];
                $ape_paterno = $alumno['ape_paterno'];
                $ape_materno = $alumno['ape_materno'];

                echo '<tr>';
                echo '<td>' . $alumno_id . '</td>';
                echo '<td>' . $nombres . '</td>';
                echo '<td>' . $ape_paterno . '</td>';
                echo '<td>' . $ape_materno . '</td>';
                echo '<td> <a href="#">Editar</a> | <a href="#">Eliminar</a> </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>