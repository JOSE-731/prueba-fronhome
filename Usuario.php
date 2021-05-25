
<?php 
include_once('Conexion.php');

$Consulta = 'SELECT * FROM detalles where id = 39';
$Pconsulta = $pdo->prepare($Consulta);
$Pconsulta->execute();
$Resultado = $Pconsulta-> fetchAll();

$Cxonsulta = 'SELECT * FROM detalles where id = 40';
$Pxconsulta = $pdo->prepare($Cxonsulta);
$Pxconsulta->execute();
$Rxesultado = $Pxconsulta-> fetchAll();


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Usuario</title>
    <style>
     .navbar-light .navbar-nav .active>.nav-link  {
                color: white;
            }

            .navbar-light .navbar-nav .nav-link{
                color: white;
            }

    </style>
  </head>
  <body>
      
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                    <a class="navbar-brand" href="#">From Home</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="Sesion.php">Entrar <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="float-right nav-link" href="#">Registrarse<span class="sr-only">(current)</span></a>
                        </li>
                        
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>


                <div class="container-fluid mt-5">
            <div class="row">
              <div class="col col-7">
              <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Propuestas
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card">
                    <div class="card-header">
                      Featured
                    </div>
                    <?php foreach($Resultado as $data):?>
                    <h1>Tus proyectos</h1>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo"Nombre proyecto ".$data['nombre']?></h5>
                      <p class="card-text"><?php echo"Habilidades necesaria" . $data['apellido']?></p>
                      <p class="card-text"><?php echo"Proyecto " . $data['ciudad']?></p>
                      <a href="#" class="btn btn-primary">Ver propuesta</a>
                    </div>
                    <?php endforeach?>
                  </div>

                  <div class="card-body">
                  <?php foreach($Rxesultado as $datxa):?>
                     <h1>Propuestas</h1>
                      <h5 class="card-title"><?php echo"Nombre proyecto ".$datxa['nombre']?></h5>
                      <p class="card-text"><?php echo"Habilidades necesaria" . $datxa['apellido']?></p>
                      <p class="card-text"><?php echo"Proyecto " . $datxa['ciudad']?></p>
                      <a href="#" class="btn btn-primary">Ver propuesta</a>
                    </div>
                    <?php endforeach?>
                </div>
              </div>
              
              
            </div>
              </div>
        <div class="col col-5">
          <div>
           <div class="card">
            <div class="card-body">
             <h1><center>  David Diaz</center></h1>
              <br><br>
              <form action="Formulario.php">
              <h1> Publicar proyecto <button class="btn btn-primary">Publicar</button> </h1>
              </form>
              
            </div>
          </div>
          </div>
        </div>
      </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>