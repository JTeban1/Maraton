<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar Caridad</h1>
          <div class="form-group">
          <label for="actualizarNombreCaridad">Nombre Caridad</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarNombreCaridad" class="form-control" type="text" name="actualizarNombreCaridad">
          </div>

          <div class="form-group">
          <label for="actualizarDescripcionCaridad">Descripcion Caridad</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarDescripcionCaridad" class="form-control" type="text" name="actualizarDescripcionCaridad">
          </div>



               <div class="form-group">
                    <label for="text">Logo Caridad</label>
     
                 <div class="input-group">
     
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                           </span>
                      </div>
                      
                      <input id="img" class="form-control" type="file" name="actualizarLogoCaridad" accept=".jpg , .png , .gif">
                 </div>

               </div>


          <?php

               $actualizarCaridad = ControladorCaridad::ctrActualizarRegistroCaridad();
 
 
 
               if($actualizarCaridad == "ok")
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