<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar posicion</h1>
          <div class="form-group">
          <label for="NombrePosicionposicion">NombrePosicion</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="NombrePosicionposicion" class="form-control" type="text" name="actualizarNombrePosicionposicion">
          </div>

          <div class="form-group">
          <label for="DescripcionPosicion">DescripcionPosicion</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="DescripcionPosicion" class="form-control" type="textarea" name="actualizarDescripcionPosicion">
          </div>

          <div class="form-group">
          <label for="TarifaPagoposicion">TarifaPago</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="TarifaPagoposicion" class="form-control" type="number" name="actualizarTarifaPagoposicion">
          </div>

         

          <?php

               $actualizarPosi = ControladorPosicion::ctrActualizarRegistroPosi();
 
 
 
               if($actualizarPosi == "ok")
               {
                    echo '<script>


                    if(window.history.replaceState)
                    {
                         window.history.replaceState(null,null,window.location.href);
                    }


                    </script>';

                    echo '<div class="alert alert-success">El Usuario ha sido actualizado</div>';

               }


               ?>



         

               <button type="submit" class="btn btn-primary">Guardar</button>
          </div>


          </form>




 </div>