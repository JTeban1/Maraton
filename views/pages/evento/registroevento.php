<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro Evento</h1>

               <div class="form-group">
          <label for="FechaNacimiento">Nombre Evento</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FechaNacimiento" class="form-control" type="text" name="registroNombreEvento">
          </div>


          <div class="form-group">
          <label for="FechaNacimiento">Fecha Inicio</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FechaNacimiento" class="form-control" type="date" name="registroFechaInicio">
          </div>

          
          <div class="form-group">
            <label for="fk_UsuarioID">Valor</label>
            
                <div class="input-group">
            
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-evelope"></i>
                            </span>
                        </div>
                            
                <input id="Fk_UsuarioID" class="form-control" type="text" name="registroValor">
          </div>



               <div class="form-group">
                    <label for="text">fk_PaisID</label>
     
                 <div class="input-group">
     
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                           </span>
                      </div>
                      
                      <input id="fk_PaisID" class="form-control" type="file" name="fk_paisID">
                 </div>

               </div>


          <?php

               $registroCorredor = ControladorCorredor::ctrRegistroCorredor();
 
 
 
               if($registroCorredor == "ok")
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