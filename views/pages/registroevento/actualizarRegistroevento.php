<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar Evento</h1>
          <div class="form-group">
          <label for="actualizarNumDorsalevento">NumDorsal</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarNumDorsalevento" class="form-control" type="number" name="actualizarNumDorsalevento">
          </div>

          <div class="form-group">
          <label for="actualizarTiempoCarreraevento">Tiempo Carrera</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarTiempoCarreraevento" class="form-control" type="time" name="actualizarTiempoCarreraevento">
          </div>




          <div class="form-group">
                    <label for="text">Registro</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_RegistroIDevento">
               
                    <?php
                     foreach ($registro  as $registros) {
                        ?>
                    
                    

                     <option value='<?php echo $registros["RegistroID"];?>'><?php echo $registros["ObjetivoPatrocinio"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>




          <div class="form-group">
                    <label for="text">Eventos</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_EventoIDevento">
               
                    <?php
                     foreach ($evento  as $eventos) {
                        ?>
                    
                    

                     <option value='<?php echo $eventos["EventoID"];?>'><?php echo $eventos["NombreEvento"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>

          <?php

               $actualizarEvento = ControladorRegistroEvento::ctrActualizarRegistroRegistroEven();
 
 
 
               if($actualizarEvento == "ok")
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