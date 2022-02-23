<?php

include_once('../Model/empleado.php');

$nombre =$_POST['nombre'];
$correo = $_POST['correo'];
$sexo = $_POST['sexo'];
$area = $_POST['area'];
$descripcion = $_POST['descripcion'];
$id = $_POST['id'];


// echo  $nombre, $correo, $sexo, $area, $descripcion;
// echo $btn;

$getEmpleado = new empleado;

if( $id == 0){

    $data = $getEmpleado->empleados($nombre, $correo, $sexo, $area, $descripcion);
    
}



?>