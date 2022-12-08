<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];


     $hojatiempo = ControladorHojaTiempo ::ctrSeleccionarRegistroHojaTiem($item, $valor);
     $personal = ControladorPersonal::ctrSeleccionarRegistroPersonal($item, $valor);
     

}

?>






<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

        <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar hoja tiempo</h1>

            <div class="form-group">
                <label for="actualizarFechaInicio">Fecha Inicio</label>
                
                    <div class="input-group">
                
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                </div>
                           
               <input id="actualizarFechaInicio" class="form-control" value="<?php echo $hojatiempo["FechaInicio"]; ?>" type="date" name="actualizarFechaInicio">
          </div>


          <div class="form-group">
                <label for="actualizarFechaFinal">Fecha Final</label>
                
                    <div class="input-group">
                
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                </div>
                           
               <input id="actualizarFechaFinal" class="form-control"  value="<?php echo $hojatiempo["FechaFinal"]; ?>" type="date" name="actualizarFechaFinal">
          </div>



          <div class="form-group">
                <label for="actualizarValorPagar">Valor a Pagar</label>
                
                    <div class="input-group">
                
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                </div>
                           
               <input id="actualizarValorPagar" class="form-control" value="<?php echo $hojatiempo["ValorPagar"]; ?>" type="number" name="actualizarValorPagar">
          </div>


          <div class="form-group">
                    <label for="text">Personal</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_PersonalID">

               <option value='<?php echo $hojatiempo["fk_PersonalID"];?>'><?php echo $hojatiempo["Nombres"];?></option>

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

               $actualizarHojaTiempo = ControladorHojaTiempo::ctrActualizarRegistroHojaTiem();
 
 
 
               if($actualizarHojaTiempo == "ok")
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