<?php

include('db.php');

if(isset($_POST['save'])){

    $nombre= $_POST['nombre'];
    $password = $_POST['password'];
    
    $consulta= "INSERT INTO empleados (nombre, apellido) VALUES ('$nombre','$password')";
    $resultado= mysqli_query($conexion, $consulta);

    if(!$resultado){
        echo 'query fail';
    }else{
        echo 'guardado';    
    }


}


?>
