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
  $patrocinio = ControladorPatrocinio::ctrSeleccionarRegistroPatrocinio(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Patrocinio</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NombrePatrocinador</th>
                        <th scope="col">Monto</th>
                        <th scope="col">FK_RegistroID</th>
                    
                        
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($patrocinio as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["NombrePatrocinador"]; ?></td>
                        <td><?php echo $value["Monto"]; ?></td>
                        <td><?php echo $value["FK_RegistroID"]; ?></td>
                       
                        
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?paginas=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistroPatrocinio">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorPatrocinio();
                                    $eliminar -> ctrSeleccionarRegistroPatrocinio();

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