<?php

include_once("../Config/config.php");


class empleado extends Conexion{
    
    public function empleados($nombre, $correo, $sexo, $area, $descripcion){
        $conexion = $this->connect();
        $sql = "INSERT empleado (nombre, email, sexo, area_id, descripcion) 
        VALUES ('$nombre', '$correo', '$sexo', '$area', '$descripcion')";
        mysqli_query($conexion , $sql) or die ("Error al registrar".$conexion->connect_errno);
        // echo "Registro correcto";
    }

    public function getEmpleados(){

        $sql = "SELECT e.* , a.nombre as area
        FROM empleado as e
        LEFT JOIN areas as a on e.area_id = a.id";
        $result = $this->connect()->query($sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }

    public function getAreas(){

        $sql = "SELECT * FROM areas";
        $result = $this->connect()->query($sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getRoles(){

        $sql = "SELECT * FROM roles";
        $result = $this->connect()->query($sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function deleteEmpleado($id){

        $sql= "DELETE FROM empleado WHERE id = $id";
        $result = $this->connect()->query($sql);
        // return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}

?>