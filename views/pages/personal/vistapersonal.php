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
  $personal = ControladorPersonal::ctrSeleccionarRegistroPersonal(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Personal</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">FechaNacimiento</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Comentarios</th>
                        <th scope="col">FK_RolID</th>
                        <th scope="col">FK_PosicionID</th>
                    
                        
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($personal as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["Nombres"]; ?></td>
                        <td><?php echo $value["Apellidos"]; ?></td>
                        <td><?php echo $value["FechaNacimiento"]; ?></td>
                        <td><?php echo $value["Genero"]; ?></td>
                        <td><?php echo $value["Comentarios"]; ?></td>
                        <td><?php echo $value["FK_RolID"]; ?></td>
                        <td><?php echo $value["FK_PosicionID"]; ?></td>
                       
                        
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?pages=/personal/actualizarpersonal&PersonalID=<?php echo $value["PersonalID"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["PersonalID"]; ?>" name="eliminarRegistroPersonal">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorPersonal();
                                    $eliminar -> ctrEliminarRegistroPersonal();

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