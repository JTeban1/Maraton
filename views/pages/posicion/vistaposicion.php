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
  $posicion = ControladorPosicion::ctrSeleccionarRegistroPosi(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Personal</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NombrePosicion</th>
                        <th scope="col">DescripcionPosicion</th>
                        <th scope="col">TarifaPago</th>
                        
                    
                        
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($posicion as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["NombrePosicion"]; ?></td>
                        <td><?php echo $value["DescripcionPosicion"]; ?></td>
                        <td><?php echo $value["TarifaPago"]; ?></td>
                
                       
                        
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?pages=/posicion/actualizarposicion&PosicionID=<?php echo $value["PosicionID"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["PosicionID"]; ?>" name="eliminarRegistroPosicion">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorPosicion();
                                    $eliminar -> ctrEliminarRegistroPosi();

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