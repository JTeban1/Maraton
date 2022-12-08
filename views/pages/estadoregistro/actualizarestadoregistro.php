<?php

if(isset($_GET["estadoID"])){

	$item = "estadoID";
	$valor = $_GET["estadoID"];


     $estadoRegistro = ControladorEstadoRegistro::ctrSeleccionarRegistroEstaRegis($item, $valor);
    

}

?>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

     <form class="p-5 bg-light" method="post">
               <h1>Actualizar estado registro</h1>
          <div class="form-group">
               <label for="actualizarEstadoRegistro">EstadoRegistro</label>
               
                    <div class="input-group">
               
                         <div class="input-group-prepend">
                              <span class="input-group-text">
                                   <i class="fas fa-evelope"></i>
                              </span>
                         </div>
                              

                         <input type="text" class="form-control" value="<?php echo $estadoRegistro["estadoRegitro"]; ?>"  id="actualizarEstadoRegistro" name="actualizarEstadoRegistro">
                         <input type="hidden" name="idestadoR" value='<?php echo $estadoRegistro["estadoID"]; ?>'>
                    </div>
          </div>
          
          <?php

               $actualizarEstaRegis = ControladorEstadoRegistro::ctrActualizarRegistroEstaRegis();
 
 
 
               if($actualizarEstaRegis == "ok")
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