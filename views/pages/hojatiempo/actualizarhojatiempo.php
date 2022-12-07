<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar hoja tiempo</h1>
          <div class="form-group">
          <label for="FechaInicio">FechaInicio</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FechaInicio" class="form-control" type="text" name="actualizarFechaInicio">
          </div>

          <div class="form-group">
          <label for="FechaFinal">FechaFinal</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FechaFinal" class="form-control" type="text" name="actualizarFechaFinal">
          </div>

          <div class="form-group">
          <label for="ValorPagar">ValorPagar</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="ValorPagar" class="form-control" type="number" name="actualizarValorPagar">
          </div>

          <div class="form-group">
          <label for="fk_PersonalID">fk_PersonalID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="fk_PersonalID" class="form-control" type="number" name="actualizarfk_PersonalID">
          </div>
         
          <?php

               $actualizarHojaTiem = ControladorHojaTiempo::ctrActualizarRegistroHojaTiem();
 
 
 
               if($actualizarHojaTiem == "ok")
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