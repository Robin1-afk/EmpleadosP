
<?php

require_once("layauts/header.php");
require_once("../Model/empleado.php");

?>

<br>
<div class="container">
    <h1>Listar empleados</h1>
    <a href="register.php"class="btn btn-primary" id="btn-nuevo"> <i class="fa-solid fa-user-plus"></i>Crear</a>
    <div class="abs-center">
        <table class="table table-striped">
            
        <thead>
            <tr>
            <th  scope="col"><i class="fa-solid fa-user"></i>User</th>
            <th scope="col"><i>@</i> Email</th>
            <th scope="col"><i class="fa-solid fa-venus-mars"></i>Sexo</th>
            <th scope="col" ><i class="fa-solid fa-briefcase"></i>Area</th>
            <th scope="col"> <i class="fa-solid fa-envelope"></i>Boletin</th>
            <th scope="col">Modificar</th>
            <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $obj = new empleado;
            $query = $obj->getEmpleados();
            foreach ($query as $value){
            ?>
            <tr>
            <td><?php echo $value['nombre']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['sexo']; ?></td>
            <td><?php echo $value['area']; ?></td>
            <td> NULL </td>
            <td><a href="" class=""><i  class=" fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="../Controller/deletController.php?id=<?php echo $value['id']; ?>"><i class=" fa-solid fa-trash-can"></i></a></td>
            </tr>

            <?php } ?>    
           
        </tbody>
        </table>
</div>
</div>

<?php  require_once("layauts/footer.php") ?>