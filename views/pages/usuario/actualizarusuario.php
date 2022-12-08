<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];


     $usuario = ControladorUsuario ::ctrSeleccionarRegistroUsuario($item, $valor);
     $rol = ControladorRol::ctrSeleccionarRegistroRol($item, $valor);
    
     

}

?>




<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Actualizar Usuario</h1>
          <div class="form-group">
          <label for="actualizarEmailusuario">Email</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarEmailusuario" class="form-control" value="<?php echo $usuario["Email"]; ?>" type="email" name="actualizarEmailusuario">
          </div>

          <div class="form-group">
          <label for="actualizarContrasenausuario">Contrasenas</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarContrasenausuario" class="form-control" value="<?php echo $usuario["Contrasena"]; ?>" type="password" name="actualizarContrasenausuario">
               <input type="hidden" name="idusuario" value='<?php echo $usuario["UsuarioID"]; ?>'>
          </div>

          <div class="form-group">
          <label for="actualizarNombreusuario">Nombres</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarNombreusuario" class="form-control" value="<?php echo $usuario["Nombre"]; ?>" type="text" name="actualizarNombreusuario">
          </div>

          <div class="form-group">
          <label for="actualizarApellidousuario">Apellido</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="actualizarApellidousuario" class="form-control" value="<?php echo $usuario["Apellido"]; ?>" type="text" name="actualizarApellidousuario">
          </div>






          <div class="form-group">
                    <label for="text">Rol</label>
                    <div class="input-group">
               <select class="form-select" aria-label="Disabled select example"  name="actualizarFK_RolIDusuario">
               <option value='<?php echo $usuario["fk_RolID"];?>'><?php echo $usuario["NombreEvento"];?></option>
                    <?php
                     foreach ($rol  as $roles) {
                        ?>
                    
                    

                     <option value='<?php echo $roles["EventoID"];?>'><?php echo $roles["NombreEvento"];?></option>
                    <?php

                     }
                    ?>
               </select>
          </div>

          



              


          <?php

               $actualizarusuario = ControladorUsuario::ctrActualizarRegistroUsuario();
 
 
 
               if($actualizarusuario == "ok")
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