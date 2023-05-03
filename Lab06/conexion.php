<?php
//abrir conexion
function conectar(){
    $conexion = mysqli_connect('localhost','root','usbw','lab06');
    return $conexion;
}

//cerrar conexion
function desconectar($conn){
    mysqli_close($conn); 
}
?>