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
  $voluntario = ControladorVoluntario::ctrSeleccionarRegistroVoluntario(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>


<h1>Voluntario</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">FK_CodigoPais</th>
                        <th scope="col">FK_Genero</th>
                
                    
                    
                        
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($voluntario as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["Nombres"]; ?></td>
                        <td><?php echo $value["Apellidos"]; ?></td>
                        <td><?php echo $value["FK_CodigoPais"]; ?></td>
                        <td><?php echo $value["FK_Genero"]; ?></td>

                        
                        
                
                       
                        
                        

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?paginas=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistroVoluntario">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorVoluntario();
                                    $eliminar -> ctrSeleccionarRegistroVoluntario();

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