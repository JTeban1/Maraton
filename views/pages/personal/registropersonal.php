<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro personal</h1>
          <div class="form-group">
          <label for="Nombrepersonal">Nombres</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Nombrepersonal" class="form-control" type="text" name="registroNombrepersonal">
          </div>

          <div class="form-group">
          <label for="Apellidopesonal">Apellidos</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Apellidopesonal" class="form-control" type="text" name="registroApellidopesonal">
          </div>

          <div class="form-group">
          <label for="FechaNacimientopersonal">FechaNacimiento</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FechaNacimientopersonal" class="form-control" type="Date" name="registroFechaNacimientopersonal">
          </div>
          <div class="form-group">
          <label for="Generopersonal">Genero</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Generopersonal" class="form-control" type="text" name="registroGeneropersonal">
          </div>
          <div class="form-group">
          <label for="Comentariopersonal">Comentarios</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="GeneroperComentariopersonalsonal" class="form-control" type="text" name="registroComentariopersonal">
          </div>




          <div class="form-group">
                    <label for="text">Rol</label>
                    <div class="input-group">
                    <select class="form-select" aria-label="Disabled select example"  name="registrofk_RolID">
               
                    <?php
                     foreach ($rol  as $roles) {
                        ?>
                    
                    

                     <option value='<?php echo $roles["rolID"];?>'><?php echo $roles["rol"];?></option>
                    <?php

                     }
                    ?>
                    </select>
                    </div>

               </div>





               <div class="form-group">
                    <label for="text">Posicion</label>
                    <div class="input-group">
                    <select class="form-select" aria-label="Disabled select example"  name="registrofk_PosicionID">
               
                    <?php
                     foreach ($posicion  as $posiciones) {
                        ?>
                    
                    

                     <option value='<?php echo $posiciones["PosicionID"];?>'><?php echo $posiciones["NombrePosicion"];?></option>
                    <?php

                     }
                    ?>
                    </select>
                    </div>

               </div>



         

          <?php

               $registroPersonal= ControladorPersonal::ctrRegistroPersonal();
 
 
 
               if($registroPersonal == "ok")
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