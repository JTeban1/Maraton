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
  $hojaTiempo = ctrRegistroHojaTiem::ctrSeleccionarRegistroHojaTiem(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>genero</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">FechaInicio</th>
                        <th scope="col">FechaFinal</th>
                        <th scope="col">ValorPagar</th>
                        <th scope="col">FK_PersonalID</th>
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($hojaTiempo as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["FechaInicio"]; ?></td>
                        <td><?php echo $value["FechaFinal"]; ?></td>
                        <td><?php echo $value["ValorPagar"]; ?></td>
                        <td><?php echo $value["FK_PersonalID"]; ?></td>
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?paginas=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistroHojaTiempo">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ctrRegistroHojaTiem();
                                    $eliminar -> ctrSeleccionarRegistroHojaTiem();

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