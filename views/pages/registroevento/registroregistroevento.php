<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro Evento</h1>
          <div class="form-group">
          <label for="NumDorsalevento">NumDorsal</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="NumDorsalevento" class="form-control" type="number" name="registroNumDorsalevento">
          </div>

          <div class="form-group">
          <label for="TiempoCarreraevento">TiempoCarrera</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="TiempoCarreraevento" class="form-control" type="text" name="registroTiempoCarreraevento">
          </div>

          <div class="form-group">
          <label for="FK_RegistroIDevento">FK_RegistroID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_RegistroIDevento" class="form-control" type="Select" name="registroFK_RegistroIDevento">
          </div>

          <div class="form-group">
          <label for="FK_EventoIDevento">FK_EventoID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_EventoIDevento" class="form-control" type="Select" name="registroFK_EventoIDevento">
          </div>

          




              


          <?php

               $registroEvento = ControladorRegistroEvento::ctrRegistroRegistroEven();
 
 
 
               if($registroEvento == "ok")
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