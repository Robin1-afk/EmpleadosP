<?php
include_once('../Model/empleado.php');


$id = $_GET['id'];
$getEmpleado = new empleado;
$data = $getEmpleado->deleteEmpleado($id);
?>