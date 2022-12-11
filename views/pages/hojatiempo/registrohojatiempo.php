<?php

     $item = null;
     $valor = null;

     $personal = ControladorPersonal::ctrSeleccionarRegistroPersonal($item, $valor);



?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

        <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro hoja tiempo</h1>

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
                <label for="registroFechaFinal">Fecha Final</label>
                
                    <div class="input-group">
                
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                </div>
                           
               <input id="registroFechaFinal" class="form-control" type="date" name="registroFechaFinal">
          </div>



          <div class="form-group">
                <label for="registroValorPagar">Valor a Pagar</label>
                
                    <div class="input-group">
                
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                </div>
                           
               <input id="registroValorPagar" class="form-control" type="number" name="registroValorPagar">
          </div>


          <div class="form-group">
                    <label for="text">Personal</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="registrofk_PersonalID">
               
                    <?php
                     foreach ($personal  as $personales) {
                        ?>
                    
                    

                     <option value='<?php echo $personales["PersonalID"];?>'><?php echo $personales["Nombres"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>


          


          <?php

               $registroHojaTiempo = ControladorHojaTiempo::ctrRegistroHojaTiem();
 
 
 
               if($registroHojaTiempo == "ok")
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