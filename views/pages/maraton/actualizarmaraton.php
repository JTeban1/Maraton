<?php

if(isset($_GET["maratonID"])){

	$item = "maratonID";
	$valor = $_GET["maratonID"];


     $maraton = ControladorMaraton ::ctrSeleccionarRegistroMaraton($item, $valor);
     $pais = ControladorPais::ctrSeleccionarRegistroPais($item, $valor);
     

}

?>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

        <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar maraton</h1>

            <div class="form-group">
                <label for="actualizarNombreMaraton">Nombre Maraton</label>
                
                    <div class="input-group">
                
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                </div>
                           
               <input id="actualizarNombreMaraton" class="form-control" value="<?php echo $maraton["NombreMaraton"]; ?>" type="text" name="actualizarNombreMaraton">
               <input type="hidden" name="idmaraton" value='<?php echo $maraton["maratonID"]; ?>'>
          </div>


          <div class="form-group">
                <label for="actualizarNombreCiudad">Nombre Ciudad</label>
                
                    <div class="input-group">
                
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                </div>
                           
               <input id="actualizarNombreCiudad" class="form-control"  value="<?php echo $maraton["NombreCiudad"]; ?>" type="text" name="actualizarNombreCiudad">
          </div>


          <div class="form-group">
                <label for="actualizarNombreCelebracion">Nombre Celebracion</label>
                
                    <div class="input-group">
                
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                </div>
                           
               <input id="actualizarNombreCelebracion" class="form-control" value="<?php echo $maraton["NombreCelebracion"]; ?>" type="text" name="actualizarNombreCelebracion">
          </div>


          <div class="form-group">
                    <label for="text">Pais</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarfk_PaisID">
               <option value='<?php echo $maraton["fk_PaisID"];?>'><?php echo $maraton["NombrePais"];?></option>
                    <?php
                     foreach ($pais  as $paises) {
                        ?>
                    
                    

                     <option value='<?php echo $paises["PaisID"];?>'><?php echo $paises["NombrePais"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>


          


          <?php

               $actualizarMaraton = ControladorMaraton::ctrActualizarRegistroMaraton();
 
 
 
               if($actualizarMaraton == "ok")
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