<!DOCTYPE html>
<html lang="en">
<head>
 

<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <title>Document</title>
</head>
<body>
     

     <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php?paginas=ingreso">Navbar</a>

            





            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="nav nav-justified py-1 nav-pills">

                    <?php if(isset($_GET["pages"])):?>

                         <?php if($_GET["pages"] == "inicio"):?>
                              <li class="nav-item">
                              <a class="nav-link active" href="index.php?pages=inicio">Inicio</a>
                              </li>

                         <?php else: ?>
                              <li class="nav-item">
                              <a class="nav-link " href="index.php?pages=inicio">Inicio</a>
                              </li>

                    <?php endif ?>
                         
                         <!--FIN INICIO-->



                         <?php if($_GET["pages"] == "ingreso"):?>
                              <li class="nav-item">
                              <a class="nav-link active" href="index.php?pages=ingreso">Ingreso</a>
                              </li>

                         <?php else: ?>
                              <li class="nav-item">
                                   <a class="nav-link" href="index.php?pages=ingreso">Ingreso</a>
                              </li>

                         <?php endif ?>

                         <!--FIN INGRESO-->

                         <?php if($_GET["pages"] == "registro"):?>
                              <li class="nav-item">
                                   <a class="nav-link active" href="index.php?pages=registro">Registro</a>
                              </li>
                         <?php else: ?>
                              <li class="nav-item">
                                   <a class="nav-link" href="index.php?pages=registro">Registro</a>
                              </li>

                         <?php endif ?>

                         <!--FIN REGISTRO-->


                    <!-- 1 TABLA -->
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Caridad
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistacaridad"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/caridad/vistacaridad">vista Caridad</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/caridad/vistacaridad">vista Caridad</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN VISTA CARIDAD-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li> 
                                   
                                   <?php if($_GET["pages"] == "registrocaridad"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/caridad/registrocaridad">Registro Caridad</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/caridad/registrocaridad">Registro Caridad</a>
                                        </li>

                                   <?php endif ?>

                              <!--FIN REGISTRO CARIDAD-->
                              </li>


                              <li> 
                                   
                                   <?php if($_GET["pages"] == "actualizarcaridad"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/caridad/actualizarcaridad">Actualizar Caridad</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/caridad/actualizarcaridad">Actualizar Caridad</a>
                                        </li>

                                   <?php endif ?>

                              <!--FIN REGISTRO CARIDAD-->
                              </li>
                              
                         </ul>
                    </div>



                    <!-- 2 TABLA -->
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Corredor
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistacorredor"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/corredor/vistacorredor">vista Corredor</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/corredor/vistacorredor">vista Corredor</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN VISTA Corredor-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registrocorredor"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/corredor/registrocorredor">Registro Corredor</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/corredor/registrocorredor">Registro Corredor</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN VISTA Corredor-->
                              </li>


                              <li>
                                   <?php if($_GET["pages"] == "actualizarcorredor"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/corredor/actualizarcorredor">Actualizar Corredor</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/corredor/actualizarcorredor">Actualizar Corredor</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN VISTA Corredor-->
                              </li>
                              
                         </ul>
                    </div>


                     <!-- 3 TABLA -->
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Estado Registro
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistaestadoregistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/estadoregistro/vistaestadoregistro">vista Estado Registro</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/estadoregistro/vistaestadoregistro">vista Estado Registro</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Estado Registro-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registroestadoregistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/estadoregistro/registroestadoregistro">Registro Estado Registro</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/estadoregistro/registroestadoregistro">Registro Estado Registro</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Estado Registro-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarestadoregistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/estadoregistro/actualizarestadoregistro">Actualizar Estado Registro</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/estadoregistro/actualizarestadoregistro">Actualizar Estado Registro</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Estado Registro-->
                              </li>
                              
                         </ul>
                    </div>


                    <!-- 4 TABLA -->
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Evento
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistaevento"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/evento/vistaevento">vista Evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/evento/vistaevento">vista Evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Evento-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registroevento"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/evento/registroevento">Registro Evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/evento/registroevento">Registro Evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Evento-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarevento"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/evento/actualizarevento">Actualizar Evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/evento/actualizarevento">Actualizar Evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Estado Registro-->
                              </li>
                              
                         </ul>
                    </div>

                     <!-- 5 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Genero
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistagenero"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/genero/vistagenero">vista Genero</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/genero/vistagenero">vista Genero</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Genero-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registrogenero"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/genero/registrogenero">Registro Genero</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/genero/registrogenero">Registro Genero</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Genero-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizargenero"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/genero/actualizargenero">Actualizar Genero</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/genero/actualizargenero">Actualizar Genero</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Evento-->
                              </li>
                              
                         </ul>
                    </div>



                    <!-- 6 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Hoja Tiempo
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistahojatiempo"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/hojatiempo/vistahojatiempo">vista Hoja Tiempo</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/hojatiempo/vistahojatiempo">vista Hoja Tiempo</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Hoaja Tiempo-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registrarhojatiempo"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/hojatiempo/registrarhojatiempo">Registrar Hoja Tiempo</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/hojatiempo/registrarhojatiempo">Registrar Hoja Tiempo</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registrar Hoaja Tiempo-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarhojatiempo"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/hojatiempo/actualizarhojatiempo">Actualizar Hoja Tiempo</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/hojatiempo/actualizarhojatiempo">Actualizar Hoja Tiempo</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Hoaja Tiempo-->
                              </li>
                              
                         </ul>
                    </div>



                    <!-- 7 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Kit Competicion
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistakitcompetencia"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/kitcompeticion/vistakitcompetencia">vista kit competicion</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/kitcompeticion/vistakitcompetencia">vista kit competicion</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Kit competencia-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registrokitcompetencia"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/kitcompeticion/registrokitcompetencia">registro kit competicion</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/kitcompeticion/registrokitcompetencia">registro kit competicion</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN registro Kit competencia-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarkitcompetencia"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/kitcompeticion/actualizarkitcompetencia">Actualizar kit competicion</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/kitcompeticion/actualizarkitcompetencia">Actualizar kit competicion</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Kit competencia-->
                              </li>
                              
                         </ul>
                    </div>

















                 

                    


                   



                    
                    <?php if($_GET["pages"] == "vistacaridad"):?>
                         <li class="nav-item">
                              <a class="nav-link active" href="index.php?pages=/caridad/vistacaridad">vista Caridad</a>
                         </li>

                    <?php else: ?>
                         <li class="nav-item">
                              <a class="nav-link" href="index.php?pages=/caridad/vistacaridad">vista Caridad</a>
                         </li>

                    <?php endif ?>

                    <!--FIN VISTA CARIDAD-->




                    <?php if($_GET["pages"] == "inventario"):?>
                         <li class="nav-item">
                              <a class="nav-link active" href="index.php?pages=area">Registro Area</a>
                         </li>

                    <?php else: ?>
                         <li class="nav-item">
                              <a class="nav-link" href="index.php?pages=area">Registro Area</a>
                         </li>

                    <?php endif ?>





                    <?php if($_GET["pages"] == "salida"):?>
                         <li class="nav-item">
                              <a class="nav-link active" href="index.php?pages=salida">Salir</a>
                         </li>

                    <?php else: ?>
                         <li class="nav-item">
                              <a class="nav-link" href="index.php?pages=salida">Salir</a>
                         </li>

                    <?php endif ?>

               <?php else: ?>

              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php?pages=inicio">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?pages=ingreso">Ingreso</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?pages=">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pages=/caridad/registrocaridad">Registro Caridad</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?pages=/caridad/vistacaridad">Vista Caridad</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?pages=">Registro Area</a>
                  </li>
               <li class="nav-item">
                    <a class="nav-link" href="index.php?pages=">Salir</a>
               </li>
                
              </ul>

              <?php endif ?>

            </div>

          
          </div>
     </nav>

     <div class="container-fluid">

          <div class="container py-5">


          <?php

          #iseet() determina si unaa ariable esta definida y no es null 

          if(isset($_GET["pages"])){

               if($_GET["pages"] == "inicio" ||

               // VISTAS CARIDAD
               $_GET["pages"] == "/caridad/vistacaridad" ||
               $_GET["pages"] == "/caridad/registrocaridad" ||
               $_GET["pages"] == "/caridad/actualizarcaridad"|| 

               //VISTAS CORREDOR
               $_GET["pages"] == "/corredor/vistacorredor"||
               $_GET["pages"] == "/corredor/registrocorredor"||
               $_GET["pages"] == "/corredor/actualizarcorredor"||


               $_GET["pages"] == "/corredor/vistaestadoregistro"||
               $_GET["pages"] == "/corredor/registroestadoregistro"||
               $_GET["pages"] == "/corredor/actualizarestadoregistro"||



               
               $_GET["pages"] == "/corredor/"||
               $_GET["pages"] == "/corredor/"||
               $_GET["pages"] == "/corredor/"||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""||

               $_GET["pages"] == ""||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""||
               $_GET["pages"] == ""|| 
               $_GET["pages"] == ""||
               $_GET["pages"] == ""){

                    include "pages/".$_GET["pages"].".php";


               }else{
                    include "pages/error404.php";
               }      
                    
          }else{

               include "pages/inicio.php";

          }


          ?>

          </div>
     </div>
    </nav>


    
        
</body>
</html>