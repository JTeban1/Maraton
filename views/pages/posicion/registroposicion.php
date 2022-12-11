<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro posicion</h1>
          <div class="form-group">
          <label for="registroNombrePosicionposicion">NombrePosicion</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
<!--<<<<<< HEAD -->
               <input id="NombrePosicionposicion" class="form-control" type="text" name="registroNombrePosicionposicion">
<!-- ======= -->
                         
               <input id="registroNombrePosicionposicion" class="form-control" type="text" name="registroNombrePosicionposicion">
<!-- 36af26245a003e96d554f3153039a2a652d11027 -->
          </div>

          <div class="form-group">
          <label for="registroDescripcionPosicion">DescripcionPosicion</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="registroDescripcionPosicion" class="form-control" type="text" name="registroDescripcionPosicion">
          </div>

          <div class="form-group">
          <label for="registroTarifaPagoposicion">TarifaPago</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="registroTarifaPagoposicion" class="form-control" type="number" name="registroTarifaPagoposicion">
          </div>

         

          <?php

               $registroPosi = ControladorPosicion::ctrRegistroPosi();
 
 
 
               if($registroPosi == "ok")
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