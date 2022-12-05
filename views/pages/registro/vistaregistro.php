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
  $registro = ControladorRegis::ctrSeleccionarRegistroRegis(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Registro</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">FechaRegistro</th>
                        <th scope="col">Costo</th>
                        <th scope="col">ObjetivoPatrocinio</th>
                        <th scope="col">FK_CorredorID</th>
                        <th scope="col">FK_KitID</th>
                        <th scope="col">FK_EstadoRegistroID</th>
                        <th scope="col">FK_CaridadID</th>
                        
                    
                        
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($registro as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["FechaRegistro"]; ?></td>
                        <td><?php echo $value["Costo"]; ?></td>
                        <td><?php echo $value["ObjetivoPatrocinio"]; ?></td>
                        <td><?php echo $value["FK_CorredorID"]; ?></td>
                        <td><?php echo $value["FK_KitID"]; ?></td>
                        <td><?php echo $value["FK_EstadoRegistroID"]; ?></td>
                        <td><?php echo $value["FK_CaridadID"]; ?></td>
                
                       
                        
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?paginas=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistroRegis">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorRegis();
                                    $eliminar -> ctrSeleccionarRegistroRegis();

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