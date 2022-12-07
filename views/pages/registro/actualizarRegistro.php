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
                           
               <input id="actualizarFechaRegistroregistro" class="form-control" type="date" name="actualizarFechaRegistroregistro">
          </div>

          <div class="form-group">
          <label for="actualizarCostoregistro">Costo</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarCostoregistro" class="form-control" type="number" name="actualizarCostoregistro">
          </div>

          <div class="form-group">
          <label for="actualizarObjetivoPatrocinioregistro">ObjetivoPatrocinio</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarObjetivoPatrocinioregistro" class="form-control" type="text" name="actualizarObjetivoPatrocinioregistro">
          </div>



          <div class="form-group">
                    <label for="text">Corredor</label>
                    <div class="input-group">
<<<<<<< HEAD
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_CorredorIDregistro">
=======
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_CorredorIDregistro">
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363
               
                    <?php
                     foreach ($corredor  as $corredores) {
                        ?>
                    
                    

                     <option value='<?php echo $corredores["CorredorID"];?>'><?php echo $corredores["FechaNacimiento"];?></option>
                    <?php

                     }
                    ?>
               </select>
<<<<<<< HEAD
          </div>






          <div class="form-group">
                    <label for="text">Kit</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_kitIDregistro">
               
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
               
                    <?php
                     foreach ($caridad  as $caridades) {
                        ?>
                    
                    

                     <option value='<?php echo $caridades["CaridadID"];?>'><?php echo $caridades["NombreCaridad"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>

=======
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


              

>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363

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