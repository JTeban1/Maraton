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
  $caridad = ControladorCaridad::ctrSeleccionarRegistroCaridad(null,null);

  //echo'<pre>'; print_r($usuario); echo '</pre>'

?>

<h1>INICIO</h1>

<div class="container-fluid">
          <div class="container py-5">

               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Caridad</th>
                        <th scope="col">Descripcion Caridad</th>
                        <th scope="col">Logo Caridad</th>
                        <th>Acciones</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    <?php foreach ($caridad as $key => $value): ?>


                      <tr>
                        
                        <td scope="row"><?php echo ($key+1) ; ?></td>
                        <td><?php echo $value["NombreCaridad"]; ?></td>
                        <td><?php echo $value["DescripcionCaridad"]; ?></td>
                        <td><img style="width: 100px;" src="data:image/jpg;base64, <?php echo base64_encode($value['LogoCaridad']) ?>"   > </td>

                        <td>
                            <div class="btn-agroup">


                            <div class="btn-group">

                              <div class="px-1">
                              
                              <a href="index.php?paginas=editar&id=<?php echo $value["CaridadID"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>

                              </div>

                              <form method="post">

                                  <input type="hidden" value="<?php echo $value["CaridadID"]; ?>" name="eliminarRegistroCaridad">
                                  
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>

                                  <?php

                                    $eliminar = new ControladorCaridad();
                                    $eliminar -> ctrEliminarRegistroCaridad();

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