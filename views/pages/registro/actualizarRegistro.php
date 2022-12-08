<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];

     $registro = ControladorRegis::ctrSeleccionarRegistroRegis($item, $valor);
     $corredor = ControladorCorredor::ctrSeleccionarRegistroCorredor($item, $valor);
     $kit = ControladorKitCompetencia::ctrSeleccionarRegistroKitCompe($item, $valor);
     $estado = ControladorEstadoRegistro::ctrSeleccionarRegistroEstaRegis($item, $valor);
     $caridad = ControladorCaridad::ctrSeleccionarRegistroCaridad($item, $valor);
     

}

?>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar registro</h1>
          <div class="form-group">
          <label for="actualizarFechaRegistroregistro">FechaRegistro</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarFechaRegistroregistro" class="form-control" value="<?php echo $registro["FechaRegistro"]; ?>" type="date" name="actualizarFechaRegistroregistro">
               <input type="hidden" name="idregistro" value='<?php echo $registro["RegistroID"]; ?>'>
          </div>

          <div class="form-group">
          <label for="actualizarCostoregistro">Costo</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarCostoregistro" class="form-control" value="<?php echo $registro["Costo"]; ?>" type="number" name="actualizarCostoregistro">
          </div>

          <div class="form-group">
          <label for="actualizarObjetivoPatrocinioregistro">ObjetivoPatrocinio</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarObjetivoPatrocinioregistro" class="form-control" value="<?php echo $registro["ObjetivoPatrocinio"]; ?>" type="text" name="actualizarObjetivoPatrocinioregistro">
          </div>



          <div class="form-group">
                    <label for="text">Corredor</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_CorredorIDregistro">
               <option value='<?php echo $registro["fk_CorredorID"];?>'><?php echo $registro["FechaNacimiento"];?></option>
                    <?php
                     foreach ($corredor  as $corredores) {
                        ?>
                    
                    

                     <option value='<?php echo $corredores["CorredorID"];?>'><?php echo $corredores["FechaNacimiento"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>






          <div class="form-group">
                    <label for="text">Kit</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_kitIDregistro">
               <option value='<?php echo $registro["fk_kitID"];?>'><?php echo $registro["opcionkit"];?></option>
                    <?php
                     foreach ($kit  as $kits) {
                        ?>
                    
                    

                     <option value='<?php echo $kits["kitID"];?>'><?php echo $kits["opcionkit"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>



          <div class="form-group">
                    <label for="text">Estado Registro</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_EstadoRegistroIDregistro">
               <option value='<?php echo $registro["fk_EstadoRegistroID"];?>'><?php echo $registro["estadoRegitro"];?></option>
                    <?php
                     foreach ($estado  as $estados) {
                        ?>
                    
                    

                     <option value='<?php echo $estados["estadoID"];?>'><?php echo $estados["estadoRegitro"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>


          <div class="form-group">
                    <label for="text">Caridad</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_CaridadIDregistro">
               <option value='<?php echo $registro["fk_CaridadID"];?>'><?php echo $registro["NombreCaridad"];?></option>
                    <?php
                     foreach ($caridad  as $caridades) {
                        ?>
                    
                    

                     <option value='<?php echo $caridades["CaridadID"];?>'><?php echo $caridades["NombreCaridad"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>


          <?php

               $actualizarRegis = ControladorRegis::ctrActualizarRegistroRegis();
 
 
 
               if($actualizarRegis == "ok")
               {
                    echo '<script>


                    if(window.history.replaceState)
                    {
                         window.history.replaceState(null,null,window.location.href);
                    }


                    </script>';

                    echo '<div class="alert alert-success">El Usuario ha sido registado</div>';

               }


               ?>


               <button type="submit" class="btn btn-primary">Guardar</button>
          </div>


          </form>

 </div>