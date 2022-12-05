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
  $evento = ControladorEvento::ctrSeleccionarRegistroEvento(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Evento</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NombreEvento</th>
                        <th scope="col">FechaInicio</th>
                        <th scope="col">Valor</th>
                        <th scope="col">ParticipantesMax</th>
                        <th scope="col">FK_MaratonID</th>
                        <th scope="col">FK_TipoEventoID</th>
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($evento as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["NombreEvento"]; ?></td>
                        <td><?php echo $value["FechaInicio"]; ?></td>
                        <td><?php echo $value["Valor"]; ?></td>
                        <td><?php echo $value["ParticipantesMax"]; ?></td>
                        <td><?php echo $value["FK_MaratonID"]; ?></td>
                        <td><?php echo $value["FK_TipoEventoID"]; ?></td>
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?paginas=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistroEvento">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorEvento();
                                    $eliminar -> ctrSeleccionarRegistroEvento();

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