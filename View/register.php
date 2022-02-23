<?php

require_once("layauts/header.php");
require_once("../Model/empleado.php");


?>
<br>
<div class="container">
<h1>Crear empleado</h1>
<div class="alert alert-primary" role="alert">
  Los campos con asteriscos (*) son obligatorios
</div>
  <div class="abs-center2">

  <form action="../Controller/empleadosController.php" method="post" class="border p-3 form">
        <div class="row g-3 align-items-center">
        <div class="col-auto row">
        <label for="inputPassword6" class="col-form-label">Nombre completo *</label>
        </div>
        <div class="col">
        <input type="" id="name" name="nombre" class="form-control" aria-describedby="passwordHelpInline">
        </div>
        </div>
<br>
            <div class="row g-3 align-items-center">
            <div class="col-auto row">
            <label for="inputPassword6" class="col-form-label">Correo electronico *</label>
            </div>
            <div class="col">
            <input type="" id="inputPassword6" name="correo" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            </div>
<br>


                    <div class="row g-3 align-items-center">
                    <div class="col-auto row">
                    <label for="inputPassword6" class="col-form-label ">Sexo del empleado*    </label>
                    </div>
                    <div class="col">
                    <input class="form-check-input " type="radio" name="sexo"  value="F" id="flexRadioDefault1">Femenino
                    <br>
                    <input class="form-check-input" type="radio" name="sexo" value="M" id="flexRadioDefault1">Masculino

                    </div>
                    </div>

            <br>
                        <div class="row g-3 align-items-center">
                        <div class="col-auto row">
                        <label for="inputPassword6" class="col-form-label">Area del empleado*</label>
                        </div>
                        <div class="col">
                        <select name="area" class="form-select" aria-label="Default select example">
                        <option selected value="0">seleccione ....</option>
                        <?php
                              $obj = new empleado;
                              $query = $obj->getAreas();
                              foreach ($query as $value){
                              ?>

                        <option value="<?php echo $value['id'] ?>"><?php echo $value['nombre'] ?></option>

                        <?php } ?>
                      </select>            
                      </div>
                        </div>
            <br>
                              <div class="row g-3 align-items-center">
                              <div class="col-auto row">
                              <label for="inputPassword6" class="col-form-label">Descripcion *</label>
                              </div>
                              <div class="col">
                              <textarea id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="descripcion" id="" cols="30" rows="5"></textarea>  
                              </div>
                              </div>

            <br>


                                    <div class="row g-3 align-items-center">
                                    <div class="col-auto row">
                                    <label for="inputPassword6" class="col-form-label ">Roles empleado*    </label>
                                    </div>
                                    <div class="col">
                                    <?php
                              $obj = new empleado;
                              $query = $obj->getRoles();
                              foreach ($query as $value){
                              ?>
                                    <input class="form-check-input " type="checkbox" name="flexRadioDefault" id="flexRadioDefault1"><?php echo $value['nombre']; ?>   <br> <?php  }?>

                                    </div>
                                    </div>



 

      <button type="submit" class="btn btn-primary" name="id" value="0">Guardar</button>
    </form>

  </div>
</div>

<?php  require_once("layauts/footer.php") ?>