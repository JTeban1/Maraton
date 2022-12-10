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
  $kitCompetencia = ControladorKitCompetencia::ctrSeleccionarRegistroKitCompe(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Kit Competencia</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">OpcionKit</th>
                        <th scope="col">ValorKit</th>
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($kitCompetencia as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["opcionkit"]; ?></td>
                        <td><?php echo $value["valorkit"]; ?></td>
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?pages=/kitcompeticion/actualizarkitcompetencia&kitID=<?php echo $value["kitID"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["kitID"]; ?>" name="eliminarRegistroKitCompetencia">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorKitCompetencia();
                                    $eliminar -> ctrEliminarRegistroKitCompe();

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