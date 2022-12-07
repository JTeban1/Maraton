<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar maraton</h1>
          <div class="form-group">
          <label for="NombreMaraton">NombreMaraton</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="NombreMaraton" class="form-control" type="text" name="actualizarNombreMaraton">
          </div>

          <div class="form-group">
          <label for="NombreCiudad">NombreCiudad</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="NombreCiudad" class="form-control" type="text" name="actualizarNombreCiudad">
          </div>

          <div class="form-group">
          <label for="NombreCelebracion">NombreCelebracion</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="NombreCelebracion" class="form-control" type="text" name="actualizarNombreCelebracion">
          </div>

          <div class="form-group">
          <label for="fk_PaisID">fk_PaisID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="fk_PaisID" class="form-control" type="number" name="actualizarfk_PaisID">
          </div>
         
          <?php

               $actualizarMaraton = ControladorMaraton::ctrActualizarRegistroMaraton();
 
 
 
               if($actualizarMaraton == "ok")
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