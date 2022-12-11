<?php

if(isset($_GET["EventoID"])){

	$item = "EventoID";
	$valor = $_GET["EventoID"];


     $evento = ControladorEvento ::ctrSeleccionarRegistroEvento($item, $valor);
     $maraton = ControladorMaraton::ctrSeleccionarRegistroMaraton($item, $valor);
     $evento = ControladorEvento::ctrSeleccionarRegistroEvento($item, $valor);
     

}

?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar Evento</h1>

               <div class="form-group">
          <label for="actualizarNombreEvento">Nombre Evento</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarNombreEvento" class="form-control" value="<?php echo $evento["NombreEvento"]; ?>" type="text" name="actualizarNombreEvento">
               <input type="hidden" name="idevento" value='<?php echo $evento["EventoID"]; ?>'>
          </div>


          <div class="form-group">
          <label for="actualizarFechaInicio">Fecha Inicio</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarFechaInicio" class="form-control" value="<?php echo $evento["FechaInicio"]; ?>" type="date" name="actualizarFechaInicio">
          </div>

          
          <div class="form-group">
            <label for="actualizarValor">Valor</label>
            
                <div class="input-group">
            
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                        </div>
                            
                <input id="actualizarValor" class="form-control" value="<?php echo $evento["Valor"]; ?>" type="text" name="actualizarValor">
</div>

          <div class="form-group">
                    <label for="actualizarParticipantesMax">Participantes Max</label>
     
                 <div class="input-group">
     
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                           </span>
                      </div>
                      
                      <input id="actualizarParticipantesMax" class="form-control" value="<?php echo $evento["ParticiantesMax"]; ?>" type="int" name="actualizarParticipantesMax">
                 </div>

               </div>



                    <div class="form-group">
                         <label for="text">Nombre Maraton</label>
                         <div class="input-group">
                         <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_MaratonID">

                         <option value='<?php echo $evento["fk_MaratonID"];?>'><?php echo $evento["NombreMaraton"];?></option>

                         <?php
                         foreach ($maraton  as $maratones) {
                         ?>
                         
                         

                         <option value='<?php echo $maratones["maratonID"];?>'><?php echo $maratones["NombreMaraton"];?></option>
                         <?php

                         }
                         ?>
                         </select>
                    </div>

                    
               </div>



               <div class="form-group">
                    <label for="text">Tipo Evento</label>
                    <div class="input-group">
                    <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_TipoEventoID">
                    <option value='<?php echo $evento["fk_TipoEventoID"];?>'><?php echo $evento["NombreTipoEvento"];?></option>
                    <?php
                     foreach ($evento  as $eventos) {
                        ?>
                    
                    

                     <option value='<?php echo $eventos["TipoEventoID"];?>'><?php echo $eventos["NombreTipoEvento"];?></option>
                    <?php

                     }
                    ?>
                    </select>
               </div>

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

                    echo '<div class="alert alert-success">registro corredor </div>';

               }


               ?>



         

               <button type="submit" class="btn btn-primary">Guardar</button>
          </div>


          </form>




 </div>