<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro Voluntario</h1>
          <div class="form-group">
          <label for="Nombrevoluntario">Nombres</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Nombrevoluntario" class="form-control" type="text" name="registroNombrevoluntario">
          </div>

          <div class="form-group">
          <label for="Apellidovoluntario">Apellidos</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Apellidovoluntario" class="form-control" type="text" name="registroApellidovoluntario">
          </div>

          <div class="form-group">
          <label for="FK_CodigoPaisvoluntario">FK_CodigoPais</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_CodigoPaisvoluntario" class="form-control" type="Select" name="registroFK_CodigoPaisvoluntario">
          </div>

          <div class="form-group">
          <label for="FK_Generovoluntario">FK_Genero</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_Generovoluntario" class="form-control" type="Select" name="registroFK_Generovoluntario">
          </div>




              


          <?php

               $registroVoluntario = ControladorVoluntario::ctrRegistroVoluntario();
 
 
 
               if($registroVoluntario == "ok")
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