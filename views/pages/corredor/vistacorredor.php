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
  $corredor = ControladorCorredor::ctrSeleccionarRegistroCorredor(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>



<h1>Corredores</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha De Nacimiento</th>
                        <th scope="col">FK_Genero</th>
                        <th scope="col">fk_Usuario</th>
                        <th scope="col">FK_PaisID</th>
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($corredor as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["FechaNacimiento"]; ?></td>
                        <td><?php echo $value["fk_GeneroID"]; ?></td>
                        <td><?php echo $value["fk_UsuarioID"]; ?></td>
                        <td><?php echo $value["fk_PaisID"]; ?></td>

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?pages=/corredor/actualizarcorredor&CaridadID=<?php echo $value["CorredorID"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["CorredorID"]; ?>" name="eliminarRegistroCorredor">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorCorredor();
                                    $eliminar -> ctrEliminarRegistroCorredor();

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