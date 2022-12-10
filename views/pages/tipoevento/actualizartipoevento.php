<?php

if(isset($_GET["TipoEventoID"])){

	$item = "TipoEventoID";
	$valor = $_GET["TipoEventoID"];


     $tipoevento = ControladorTipoEvento ::ctrSeleccionarRegistroTipoEven($item, $valor);
 
     

}

?>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar tipoenvento</h1>
          <div class="form-group">
          <label for="actualizarNombreTipoEvento">NombreTipoEvento</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarNombreTipoEvento" class="form-control" value="<?php echo $tipoevento["NombreTipoEvento"]; ?>" type="text" name="actualizarNombreTipoEvento">
          </div>





              


          <?php

               $actualizarEvento = ControladorTipoEvento::ctrActualizarRegistroTipoEven();
 
 
 
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