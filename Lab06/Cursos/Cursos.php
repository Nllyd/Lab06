<?php

include('../conexion.php');

//abrir conexion a BD
$conexion = conectar();

//consulta SQL
$sql = 'SELECT curso_id, nombre_curso, creditos FROM curso';

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
    <title>Cursos</title>
</head>
<body>
    <h1>Cursos</h1>

    <a href="agregar_curso.html">Nuevo Curso</a>
    <table>
        <thead style="background-color: lightseagreen;">
            <tr>
                <td>Id</td>
                <td>Nombres</td>
                <td>Creditos</td>
                <td>&nbsp;</td>
            </tr>
        </thead>
        <tbody>
            <?php

            while ($curso = mysqli_fetch_array($resultado)) {
                $curso_id = $curso['curso_id'];
                $nombre_curso = $curso['nombre_curso'];
                $creditos = $curso['creditos'];

                echo '<tr>';
                echo '<td>' . $curso_id . '</td>';
                echo '<td>' . $nombre_curso . '</td>';
                echo '<td>' . $creditos . '</td>';
                echo '<td> <a href="#">Editar</a> | <a href="#">Eliminar</a> </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>