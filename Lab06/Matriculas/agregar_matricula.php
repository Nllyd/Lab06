<?php

include('../conexion.php');

$conexion = conectar();

$curso_id = $_POST['curso_id'];
$alumno_id = $_POST['alumno_id'];

$sql = "INSERT INTO matricula (curso_id, alumno_id) VALUES ('$curso_id', '$alumno_id')";

$resultado = mysqli_query($conexion, $sql);

desconectar($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Matricula</title>
</head>
<body>
    <h1>Nueva Matricula</h1>
    <h3>
        <?php

        if(!$resultado){
            echo 'La matricula no fue registrada';
        }
        else{
            echo 'La matricula fue registrada';
        }
        ?>
    </h3>
    <a href="Matriculas.php">Regresar</a>
</body>
</html>