<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar Voluntario</h1>
          <div class="form-group">
          <label for="actualizarNombrevoluntario">Nombres</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarNombrevoluntario" class="form-control" type="text" name="actualizarNombrevoluntario">
          </div>

          <div class="form-group">
          <label for="actualizarApellidovoluntario">Apellidos</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarApellidovoluntario" class="form-control" type="text" name="actualizarApellidovoluntario">
          </div>

<<<<<<< HEAD




          <div class="form-group">
                    <label for="text">Pais</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_Paisvoluntario">
=======

          <div class="form-group">
                    <label for="text">fk_PaisID</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_PaisIDvoluntario">
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363
               
                    <?php
                     foreach ($pais  as $paises) {
                        ?>
                    
                    

                     <option value='<?php echo $paises["PaisID"];?>'><?php echo $paises["NombrePais"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>
<<<<<<< HEAD


=======
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363
          <div class="form-group">
                    <label for="text">Genero</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_Generovoluntario">
               
                    <?php
                     foreach ($genero  as $generos) {
                        ?>
                    
                    

                     <option value='<?php echo $generos["generoID"];?>'><?php echo $generos["genero"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>


<<<<<<< HEAD
=======
          
         
         
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363
          <?php

               $actualizarVoluntario = ControladorVoluntario::ctrActualizarRegistroVoluntario();
 
 
 
               if($actualizarVoluntario == "ok")
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