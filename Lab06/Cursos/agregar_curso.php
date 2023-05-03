<?php

include('../conexion.php');

$conexion = conectar();

$nombre_curso = $_POST['nombre_curso'];
$creditos = $_POST['creditos'];

$sql = "INSERT INTO curso (nombre_curso, creditos) VALUES ('$nombre_curso', '$creditos')";

$resultado = mysqli_query($conexion, $sql);

desconectar($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Curso</title>
</head>
<body>
    <h1>Nuevo Curso</h1>
    <h3>
        <?php

        if(!$resultado){
            echo 'El curso no fue registrado';
        }
        else{
            echo 'El curso fue registrado';
        }
        ?>
    </h3>
    <a href="Cursos.php">Regresar</a>
</body>
</html>