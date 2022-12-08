<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro Evento</h1>

               <div class="form-group">
          <label for="registroNombreEvento">Nombre Evento</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="registroNombreEvento" class="form-control" type="text" name="registroNombreEvento">
          </div>


          <div class="form-group">
          <label for="registroFechaInicio">Fecha Inicio</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="registroFechaInicio" class="form-control" type="date" name="registroFechaInicio">
          </div>

          
          <div class="form-group">
            <label for="registroValor">Valor</label>
            
                <div class="input-group">
            
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                        </div>
                            
                <input id="registroValor" class="form-control" type="number" name="registroValor">
          </div>



               <div class="form-group">
                    <label for="text">Participantes Max</label>
     
                 <div class="input-group">
     
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                           </span>
                      </div>
                      
                      <input id="RegistroParticipantesMax" class="form-control" type="number" name="RegistroParticipantesMax">
                 </div>

               </div>



               <div class="form-group">
                    <label for="text">Nombre Maraton</label>
                    <div class="input-group">
                    <select class="form-select" aria-label="Disabled select example"  name="RegistroFK_MaratonID">
               
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
                    <select class="form-select" aria-label="Disabled select example"  name="RegistroFK_TipoEventoID">
               
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

               $registroEvento = ControladorEvento::ctrRegistroEvento();
 
 
 
               if($registroEvento == "ok")
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