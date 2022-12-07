<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar Registro</h1>
          <div class="form-group">
          <label for="FechaRegistroregistro">FechaRegistro</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FechaRegistroregistro" class="form-control" type="Data" name="actualizarFechaRegistroregistro">
          </div>

          <div class="form-group">
          <label for="Costoregistro">Costo</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Costoregistro" class="form-control" type="number" name="actualizarCostoregistro">
          </div>

          <div class="form-group">
          <label for="ObjetivoPatrocinioregistro">ObjetivoPatrocinio</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="ObjetivoPatrocinioregistro" class="form-control" type="textarea" name="actualizarObjetivoPatrocinioregistro">
          </div>

          <div class="form-group">
                    <label for="text">Corredor</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_CorredorIDregistro">
               
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
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_KitIDregistro">
               
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
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_EstadoRegistroIDregistro">
               
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
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_CaridadIDregistro">
               
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

                    echo '<div class="alert alert-success">El Usuario ha sido Actualizar</div>';

               }


               ?>



         

               <button type="submit" class="btn btn-primary">Guardar</button>
          </div>


          </form>




 </div>