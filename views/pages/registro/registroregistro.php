<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro</h1>
          <div class="form-group">
          <label for="FechaRegistroregistro">FechaRegistro</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FechaRegistroregistro" class="form-control" type="Data" name="registroFechaRegistroregistro">
          </div>

          <div class="form-group">
          <label for="Costoregistro">Costo</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Costoregistro" class="form-control" type="number" name="registroCostoregistro">
          </div>

          <div class="form-group">
          <label for="ObjetivoPatrocinioregistro">ObjetivoPatrocinio</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="ObjetivoPatrocinioregistro" class="form-control" type="textarea" name="registroObjetivoPatrocinioregistro">
          </div>

          <div class="form-group">
          <label for="FK_CorredorIDregistro">FK_CorredorID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_CorredorIDregistro" class="form-control" type="Select" name="registroFK_CorredorIDregistro">
          </div>
          <div class="form-group">
          <label for="FK_KitIDregistro">FK_KitID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_KitIDregistro" class="form-control" type="Select" name="registroFK_KitIDregistro">
          </div>
          <div class="form-group">
          <label for="FK_EstadoRegistroIDregistro">FK_EstadoRegistroID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_EstadoRegistroIDregistro" class="form-control" type="Select" name="registroFK_EstadoRegistroIDregistro">
          </div>
          <div class="form-group">
          <label for="FK_CaridadIDregistro">FK_CaridadID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_CaridadIDregistro" class="form-control" type="Select" name="registroFK_CaridadIDregistro">
          </div>

          




              


          <?php

               $registroRegis = ControladorRegis::ctrRegistroRegis();
 
 
 
               if($registroRegis == "ok")
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