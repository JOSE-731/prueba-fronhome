<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Formulario</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand" href="#">From Home</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="Inicio.php">Inicio <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item active">
                 <a class="nav-link" href="Usuario.php">Casa <span class="sr-only">(current)</span></a>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
      <div class="container mx-auto" style="width: 900px;">
        <div class="row">
          <div class="col mt-4">
                <h1><center>INGRESE SUS DATOS</center></h1>
                <form method="POST">
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" autocomplete="off" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Habilidades</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"  name="apellido" autocomplete="off" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">¿Porque eres el mejor para este proyecto?</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="edad" autocomplete="off" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Propuesta</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="pais" autocomplete="off" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Tarea a desarrollar</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="ciudad" autocomplete="off" require>
                        </div>
                    </div>
                    <?php include_once('Agregar.php')?>
                    <div class="mx-auto" style="width: 300px;">
                        <button name="Data" type="submit" class="btn btn-primary btn-lg btn-block">GUARDAR</button>
                        <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=DmwnWslzDGTfbCjPpSgxXvVkddplsgHpkVlxTmNSnPLvZkqNpQjbXKCzSRKzmKpmRWfrKTldlCVL class="btn btn-success">Contacto directo</a>
                    </div>
                </form>
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