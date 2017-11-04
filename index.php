<!doctype html>
<html lang="en">
  <head>
    <title>Sistema de Riego</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <div class="card text-center border-info">
      <div class="card-header">
        Sistema de Riego
      </div>
      <div class="card-body">
        <h4 class="card-title">Indicaciones:</h4>
        <p class="card-text">Selecciona alguna Accion a realizar (Encender / Apagar) e indicar el tiempo que estara encendiada la bomba en caso de haber seleccionado la accion de Encender.</p>
        
        <form action="instructions.php" method="get">
          <div class="form-row align-items-center">
            <div class="col-sm-3">
              <a href="" class="btn btn-outline-success btn-lg">Encender</a>
            </div>
            <div class="col-sm-3">
              <label class="sr-only" for="inlineFormInputName">Tiempo</label>
              <input type="number" class="form-control mb-2 mb-sm-0" id="time" name="time" min="1" max="255" required="required" placeholder="Tiempo en Minutos">
              <input type="hidden" name="instruction" id="instruction" value="1">
            </div>  
            <div class="col-sm-3">
              <button type="submit" class="btn btn-success btn-lg">Encender</button>
            </div>          
          </div>
        </form>
        <br><br>

        <form action="instructions.php" method="get">
          <div class="form-row ">
            <div class="col-sm-7">
              <input type="hidden" id="time" name="time" value="0">
              <input type="hidden" name="instruction" id="instruction" value="2">
            </div>  
            <div class="col-auto">
              <button type="submit" class="btn btn-danger btn-lg">Apagar</button>
            </div>          
          </div>
        </form>
        
      </div>
      <div class="card-footer text-muted">
        Sandra Lopez Alavrez
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
