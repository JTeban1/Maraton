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
                                   <?php if($_GET["pages"] == "registrohojatiempo"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/hojatiempo/registrohojatiempo">Registrar Hoja Tiempo</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/hojatiempo/registrohojatiempo">Registrar Hoja Tiempo</a>
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

                    <!-- 8 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Maraton
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistamaraton"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/maraton/vistamaraton">vista Maraton</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/maraton/vistamaraton">vista Maraton</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Maraton-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registromaraton"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/maraton/registromaraton">Registro Maraton</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/maraton/registromaraton">Registro Maraton</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Maraton-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarmaraton"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/maraton/actualizarmaraton">Actualizar Maraton</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/maraton/actualizarmaraton">Actualizar Maraton</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Maraton-->
                              </li>
                              
                         </ul>
                    </div>


                    <!-- 9 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Pais
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistapais"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/pais/vistapais">vista Pais</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/pais/vistapais">vista Pais</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Pais-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registropais"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/pais/registropais">Registro Pais</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/pais/registropais">Registro Pais</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Pais-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarpais"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/pais/actualizarpais">Actualizar Pais</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/pais/actualizarpais">Actualizar Pais</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Pais-->
                              </li>
                              
                         </ul>
                    </div>


                    <!-- 10 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Patrocinio
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistapatrocinio"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/patrocinio/vistapatrocinio">vista Patrocinio</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/patrocinio/vistapatrocinio">vista Patrocinio</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Patrocinio-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registropatrocinio"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/patrocinio/registropatrocinio">Registro Patrocinio</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/patrocinio/registropatrocinio">Registro Patrocinio</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN REGISTRO Patrocinio-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarpatrocinio"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/patrocinio/actualizarpatrocinio">Actualizar Patrocinio</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/patrocinio/actualizarpatrocinio">Actualizar Patrocinio</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Patrocinio-->
                              </li>
                              
                         </ul>
                    </div>


                    <!-- 11 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Personal
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistapersonal"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/personal/vistapersonal">vista Personal</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/personal/vistapersonal">vista Personal</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Personal-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registropersonal"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/personal/registropersonal">Registro Personal</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/personal/registropersonal">Registro Personal</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Personal-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarpersonal"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/personal/actualizarpersonal">Actualizar Personal</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/personal/actualizarpersonal">Actualizar Personal</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Personal-->
                              </li>
                              
                         </ul>
                    </div>

                    <!-- 12 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         posicion
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistaposicion"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/posicion/vistaposicion">vista Posicion</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/posicion/vistaposicion">vista Posicion</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Posicion-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registroposicion"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/posicion/registroposicion">Registro Posicion</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/posicion/registroposicion">Registro Posicion</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Posicion-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarposicion"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/posicion/actualizarposicion">Actualizar Posicion</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/posicion/actualizarposicion">Actualizar Posicion</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Posicion-->
                              </li>
                              
                         </ul>
                    </div>

                    <!-- 13 TABLA -->                   
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Registro
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistaregistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/registro/vistaregistro">vista Registro</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/registro/vistaregistro">vista Registro</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Registro-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registroregistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/registro/registroregistro">Registro Registro</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/registro/registroregistro">Registro Registro</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Registro-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarRegistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/registro/actualizarRegistro">Actualizar Registro</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/registro/actualizarRegistro">Actualizar Registro</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Registro-->
                              </li>
                              
                         </ul>
                    </div>


                     <!-- 14 TABLA --> 
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Registro Evento
                         </button>
                         <ul class="dropdown-menu">

                              <li>
                                   <?php if($_GET["pages"] == "vistaregistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/registroevento/vistaregistroevento">vista Registro Evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/registroevento/vistaregistroevento">vista Registro Evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Registro-->
                              </li>


                              <li><hr class="dropdown-divider"></li>


                              <li>
                                   <?php if($_GET["pages"] == "registroRegistroevento"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/registroevento/registroRegistroevento"> Registro Evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/registroevento/registroRegistroevento">Registro Evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Registro-->
                              </li>

                              <li>
                                   <?php if($_GET["pages"] == "actualizarRegistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/registroevento/actualizarRegistroevento">Actualizar Registro Evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/registroevento/actualizarRegistroevento">Actualizar Registro Evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Registro-->
                              </li>
                              
                         </ul>
                    </div>


                    <!-- 15 TABLA --> 
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Rol 
                         </button>
                         <ul class="dropdown-menu">


                              <li>
                                   <?php if($_GET["pages"] == "vistaregistro"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/rol/vistarol">vista Rol</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/rol/vistarol">vista Rol</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Rol-->
                              </li>


                              <li><hr class="dropdown-divider"></li>

                              <li>
                                   <?php if($_GET["pages"] == "registrorol"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/rol/registrorol">Registro Rol</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/rol/registrorol">Registro Rol</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Rol-->
                              </li>


                              <li>
                                   <?php if($_GET["pages"] == "actualizarRol"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/rol/actualizarRol">Actualizar Rol</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/rol/actualizarRol"> Actualizar Rol</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizar Rol-->
                              </li>

                         </ul>
                    </div>


                    <!-- 16 TABLA --> 
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Tipo Evento 
                         </button>
                         <ul class="dropdown-menu">


                              <li>
                                   <?php if($_GET["pages"] == "vistatipoevento"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/tipoevento/vistatipoevento">vista Tipo evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/tipoevento/vistatipoevento">vista Tipo evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista Tipo evento-->
                              </li>


                              <li><hr class="dropdown-divider"></li>

                              <li>
                                   <?php if($_GET["pages"] == "registrotipoevento"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/tipoevento/registrotipoevento">Registro Tipo evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/tipoevento/registrotipoevento">Registro Tipo evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro Tipo evento-->
                              </li>


                              <li>
                                   <?php if($_GET["pages"] == "actualizartipoevento"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/tipoevento/actualizartipoevento">Actualizar Tipo evento</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/tipoevento/actualizartipoevento">Actualizar Tipo evento</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN actualizar Tipo evento-->
                              </li>

                         </ul>
                    </div>



                    <!-- 17 TABLA --> 
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         usuario 
                         </button>
                         <ul class="dropdown-menu">


                              <li>
                                   <?php if($_GET["pages"] == "vistausuario"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/usuario/vistausuario">vista usuario</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/usuario/vistausuario">vista usuario</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista usuario-->
                              </li>


                              <li><hr class="dropdown-divider"></li>

                              <li>
                                   <?php if($_GET["pages"] == "registrousuario"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/usuario/registrousuario">Registro usuario</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/usuario/registrousuario">Registro usuario</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN REGISTRO usuario-->
                              </li>


                              <li>
                                   <?php if($_GET["pages"] == "actualizarusuario"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/usuario/actualizarusuario">actualizar usuario</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/usuario/actualizarusuario">actualizar usuario</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN ACTUALIZAR usuario-->
                              </li>

                         </ul>
                    </div>


                    <!-- 18 TABLA --> 
                    <div class="btn-group">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Voluntario 
                         </button>
                         <ul class="dropdown-menu">


                              <li>
                                   <?php if($_GET["pages"] == "vistavoluntario"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/voluntario/vistavoluntario">vista Voluntario</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/voluntario/vistavoluntario">vista Voluntario</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN vista usuario-->
                              </li>


                              <li><hr class="dropdown-divider"></li>

                              <li>
                                   <?php if($_GET["pages"] == "registrovoluntario"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/voluntario/registrovoluntario">Registro Voluntario</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/voluntario/registrovoluntario">Registro Voluntario</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Registro usuario-->
                              </li>


                              <li>
                                   <?php if($_GET["pages"] == "actualizarvoluntario"):?>
                                        <li class="nav-item">
                                             <a class="nav-link active" href="index.php?pages=/voluntario/actualizarvoluntario">Actualizar Voluntario</a>
                                        </li>

                                   <?php else: ?>
                                        <li class="nav-item">
                                             <a class="nav-link" href="index.php?pages=/voluntario/actualizarvoluntario">Actualizar Voluntario</a>
                                        </li>

                                   <?php endif ?>

                                   <!--FIN Actualizr usuario-->
                              </li>

                         </ul>
                    </div>





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


               //VISTA ESTADO REGISTRO
               $_GET["pages"] == "/estadoregistro/vistaestadoregistro"||
               $_GET["pages"] == "/estadoregistro/registroestadoregistro"||
               $_GET["pages"] == "/estadoregistro/actualizarestadoregistro"||



               //VISTAS EVENTO
               $_GET["pages"] == "/evento/vistaevento"||
               $_GET["pages"] == "/evento/registroevento"||
               $_GET["pages"] == "/evento/actualizarevento"||


               //VISTAS GENERO
               $_GET["pages"] == "/genero/vistagenero"||
               $_GET["pages"] == "/genero/registrogenero"||
               $_GET["pages"] == "/genero/actualizargenero"||


               //VISTA hoja tiempo
               $_GET["pages"] == "/hojatiempo/vistahojatiempo"||
               $_GET["pages"] == "/hojatiempo/registrohojatiempo"||
               $_GET["pages"] == "/hojatiempo/actualizarhojatiempo"||


               // VISTAS kit Competencia
               $_GET["pages"] == "/kitcompeticion/vistakitcompetencia"||
               $_GET["pages"] == "/kitcompeticion/registrokitcompetencia"||
               $_GET["pages"] == "/kitcompeticion/actualizarkitcompetencia"||

               //VISTA MARATON
               $_GET["pages"] == "/maraton/vistamaraton"||
               $_GET["pages"] == "/maraton/registromaraton"||
               $_GET["pages"] == "/maraton/actualizarmaraton"||


               //VISTA PAIS
               $_GET["pages"] == "/pais/vistapais"||
               $_GET["pages"] == "/pais/registropais"||
               $_GET["pages"] == "/pais/actualizarpais"||
               
                 //VISTA PATROCINIO
               $_GET["pages"] == "/patrocinio/vistapatrocinio"||
               $_GET["pages"] == "/patrocinio/registropatrocinio"||
               $_GET["pages"] == "/patrocinio/actualizarpatrocinio"||

               //VISTA PERSONAL
               $_GET["pages"] == "/personal/vistapersonal"||
               $_GET["pages"] == "/personal/registropersonal"||
               $_GET["pages"] == "/personal/actualizarpersonal"||


               //VISTA POSICION
               $_GET["pages"] == "/posicion/vistaposicion"||
               $_GET["pages"] == "/posicion/registroposicion"||
               $_GET["pages"] == "/posicion/actualizarposicion"||


                 //VISTA REGISTRO
               $_GET["pages"] == "/registro/vistaregistro"||
               $_GET["pages"] == "/registro/registroregistro"||
               $_GET["pages"] == "/registro/actualizarRegistro"||



                //VISTA REGISTRO EVENTO
                $_GET["pages"] == "/registroevento/vistaregistroevento"||
                $_GET["pages"] == "/registroevento/registroRegistroevento"||
                $_GET["pages"] == "/registroevento/actualizarRegistroevento"||


                //VISTA ROL
                $_GET["pages"] == "/rol/vistarol"||
                $_GET["pages"] == "/rol/registrorol"||
                $_GET["pages"] == "/rol/actualizarRol"||


                //VISTA TIPO EVENTO
                $_GET["pages"] == "/tipoevento/vistatipoevento"||
                $_GET["pages"] == "/tipoevento/registrotipoevento"||
                $_GET["pages"] == "/tipoevento/actualizartipoevento"||


                //VISTA USUARIOS
                $_GET["pages"] == "/usuario/vistausuario"||
                $_GET["pages"] == "/usuario/registrousuario"||
                $_GET["pages"] == "/usuario/actualizarusuario"||


                //VISTA VOLUNTARIO
                $_GET["pages"] == "/voluntario/vistavoluntario"||
                $_GET["pages"] == "/voluntario/registrovoluntario"||
                $_GET["pages"] == "/voluntario/actualizarvoluntario"||
               
               
               //
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