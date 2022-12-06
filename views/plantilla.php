<!DOCTYPE html>
<html lang="en">
<head>
 

<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">



<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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

                    <!--FIN ingreso-->



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


                    <?php if($_GET["pages"] == "registrocaridad"):?>
                         <li class="nav-item">
                              <a class="nav-link active" href="index.php?pages=/caridad/registrocaridad">Registro Caridad</a>
                         </li>

                    <?php else: ?>
                         <li class="nav-item">
                              <a class="nav-link" href="index.php?pages=/caridad/registrocaridad">Registro Caridad</a>
                         </li>

                    <?php endif ?>

                    <!--FIN INVENTARIO-->



                    
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

               if($_GET["pages"] == "registro" ||
               $_GET["pages"] == "/caridad/registrocaridad" ||
               $_GET["pages"] == "/caridad/vistacaridad" ||
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