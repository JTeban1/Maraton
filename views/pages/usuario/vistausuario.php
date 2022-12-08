<?php
 /*if(!isset($_SESSION["validarIngreso"])){

  echo '<script>window.location = "index.php?paginas=ingreso";</script>';
  return;
 }else{
  if($_SESSION["validarIngreso"] != "ok" ){

    echo '<script>window.location = "index.php?paginas=ingreso";</script>';
    return;
 }
 }*/
  $usuario = ControladorUsuario::ctrSeleccionarRegistroUsuario(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Usuario</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contrasena</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">FK_RolID</th>
                    
                    
                        
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($usuario as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["Email"]; ?></td>
                        <td><?php echo $value["Contrasena"]; ?></td>
                        <td><?php echo $value["Nombres"]; ?></td>
                        <td><?php echo $value["Apellido"]; ?></td>
                        <td><?php echo $value["FK_RolID"]; ?></td>
                        
                        
                
                       
                        
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?pages=/usuario/actualizarusuario&UsuarioID=<?php echo $value["UsuarioID"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["UsuarioID"]; ?>" name="eliminarRegistroUsuario">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorUsuario();
                                    $eliminar -> ctrEliminarRegistroUsuario();

                                  ?>

                              </form>			

			                       </div>
                        </td>  
                      </tr> 


                    <?php endforeach ?>

                    </tbody>
                  </table>
          </div>
     </div>