<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar evento</h1>
          <div class="form-group">
          <label for="NombreEvento">NombreEvento</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="NombreEvento" class="form-control" type="text" name="actualizarNombreEvento">
          </div>

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
          <label for="Valor">Valor</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Valor" class="form-control" type="number" name="actualizarValor">
          </div>

          <div class="form-group">
          <label for="ParticipantesMax">ParticipantesMax</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="ParticipantesMax" class="form-control" type="text" name="actualizarParticipantesMax">
          </div>

          <div class="form-group">
          <label for="FK_MaratonID">FK_MaratonID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_MaratonID" class="form-control" type="number" name="actualizarFK_MaratonID">
          </div>

          <div class="form-group">
          <label for="FK_TipoEventoID">FK_TipoEventoID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_TipoEventoID" class="form-control" type="number" name="actualizarFK_TipoEventoID">
          </div>
         
          <?php

               $actualizarEvento = ControladorEvento::ctrActualizarRegistroEvento();
 
 
 
               if($actualizarEvento == "ok")
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