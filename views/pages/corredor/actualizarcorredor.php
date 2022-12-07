<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar Corredor</h1>
          <div class="form-group">
          <label for="actualizarFechaNacimiento">Fecha Nacimiento</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarFechaNacimiento" class="form-control" type="date" name="actualizarFechaNacimiento">
          </div>
          <div class="form-group">
                    <label for="text">Genero</label>
                    <div class="input-group">
<<<<<<< HEAD
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_GeneroID">
=======
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_Genero">
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363
               
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

          <div class="form-group">
                    <label for="text">Usuario</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_UsuarioID">
               
                    <?php
                     foreach ($usuario  as $usuarios) {
                        ?>
                    
                    

                     <option value='<?php echo $usuarios["UsuarioID"];?>'><?php echo $usuarios["Nombre"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>
=======
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363



          <div class="form-group">
<<<<<<< HEAD
                    <label for="text">Pais</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_paisID">
               
                    <?php
                     foreach ($pais  as $paises) {
=======
                    <label for="text">Usuario</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_UsuarioID">
               
                    <?php
                     foreach ($usuario  as $usuarios) {
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363
                        ?>
                    
                    

<<<<<<< HEAD
                     <option value='<?php echo $paises["PaisID"];?>'><?php echo $paises["NombrePais"];?></option>
=======
                     <option value='<?php echo $usuarios["UsuarioID"];?>'><?php echo $usuarios["Nombre"];?></option>
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363
                    <?php

                     }
                    ?>
               </select>
          </div>

<<<<<<< HEAD
          </div>


=======


          <div class="form-group">
                    <label for="text">Pais</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_PaisID">
               
                    <?php
                     foreach ($pais  as $paises) {
                        ?>
                    
                    

                     <option value='<?php echo $paises["PaisID"];?>'><?php echo $paises["NombrePais"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>

          </div>



          

         
>>>>>>> 7a4944b27b010e09a90a123070f68d25f15a7363
          <?php

               $actualizarCorredor = ControladorCorredor::ctrActualizarRegistroCorredor();
 
 
 
               if($actualizarCorredor == "ok")
               {
                    echo '<script>


                    if(window.history.replaceState)
                    {
                         window.history.replaceState(null,null,window.location.href);
                    }


                    </script>';

                    echo '<div class="alert alert-success">registro corredor </div>';

               }


               ?>



         

               <button type="submit" class="btn btn-primary">Guardar</button>
          </div>


          </form>




 </div>