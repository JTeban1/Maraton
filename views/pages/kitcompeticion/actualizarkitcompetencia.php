<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];


     $kitcompetencia = ControladorKitCompetencia ::ctrSeleccionarRegistroKitCompe($item, $valor);

     

}

?>





<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar kit competencia</h1>
          <div class="form-group">
          <label for="actualizarOpcionKit">OpcionKit</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarOpcionKit" class="form-control" value="<?php echo $kitcompetencia["opcionkit"]; ?>" type="text" name="actualizarOpcionKit">
          </div>

          <div class="form-group">
          <label for="actualizarValorKit">ValorKit</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarValorKit" class="form-control" value="<?php echo $kitcompetencia["valorkit"]; ?>" type="number" name="actualizarValorKit">
          </div>

         
          <?php

               $actualizarKitCompe = ControladorKitCompetencia::ctrActualizarRegistroKitCompe();
 
 
 
               if($actualizarKitCompe == "ok")
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