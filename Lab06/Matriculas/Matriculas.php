<?php

include('../conexion.php');

//abrir conexion a BD
$conexion = conectar();

//consulta SQL
$sql = "SELECT * FROM matricula m INNER JOIN curso c ON m.curso_id = c.curso_id INNER JOIN alumno a ON m.alumno_id = a.alumno_id";

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
    <title>Matriculas</title>
</head>
<body>
    <h1>Matriculas</h1>

    <a href="agregar_matricula.html">Nueva Matricula</a>
    <table>
        <thead style="background-color: lightseagreen;">
            <tr>
                <td>Id</td>
                <td>Id del Curso</td>
                <td>Id del Alumno</td>
                <td>Nombre del alumno</td>
                <td>&nbsp;</td>
            </tr>
        </thead>
        <tbody style="text-align:center">
            <?php

            while ($matricula = mysqli_fetch_array($resultado)) {
                $matricula_id = $matricula['matricula_id'];
                $curso_id = $matricula['curso_id'];
                $alumno_id = $matricula['alumno_id'];
                $nombres = $matricula['nombres'];

                echo '<tr>';
                echo '<td>' . $matricula_id . '</td>';
                echo '<td>' . $curso_id . '</td>';
                echo '<td>' . $alumno_id . '</td>';
                echo '<td>' . $nombres . '</td>';
                echo '<td> <a href="#">Editar</a> | <a href="#">Eliminar</a> </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>