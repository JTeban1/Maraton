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
  $maraton = ControladorMaraton::ctrSeleccionarRegistroMaraton(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Maraton</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NombreMaraton</th>
                        <th scope="col">NombreCiudad</th>
                        <th scope="col">NombreCelebracion</th>
                        <th scope="col">FK_CodigoPaisID</th>
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($maraton as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["NombreMaraton"]; ?></td>
                        <td><?php echo $value["NombreCiudad"]; ?></td>
                        <td><?php echo $value["NombreCelebracion"]; ?></td>
                        <td><?php echo $value["NombrePais"]; ?></td>
                        
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?pages=/maraton/actualizarmaraton&maratonID=<?php echo $value["maratonID"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["maratonID"]; ?>" name="eliminarRegistroMaraton">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorMaraton();
                                    $eliminar -> ctrEliminarRegistroMaraton();

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