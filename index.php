<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="./scripts.js"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center cen pt-5 mt-5">
        <!-- IMAGENES ---------------------------------------------------------------------------------------------------------->
        <div id= "infoActividad" class="col-md-4 formulario">
          <div class="form-group text-center pb-2">
            <h1 class="text-light">Tu actividad</h1>
            <div class="col-md-12 imgs">

              <?php
                if(isset($_POST['crearActividad']) && $_POST['tipo']!=""){// Comprobamos que la variable que recibimos de 'TIPO' este defida  o no este vacia.
                
                    $imageName = strtolower($_POST['tipo']) . '.jpg';//Convertir a minusculas, el valor de 'Tipo' se lo sumamos a 'jpg' y lo guardamos en la variable imageName
                    echo"<img class=\"fit-image\" src= \"../backendProject/img/" . $imageName ."\"/>";//construimos la ruta con el valor que se inttroduce. 
                };
              ?>
              <?php
                if(isset($_POST['crearActividad']) && $_POST['tipo']!=""){

                  // Los valores los regoge del formulario del atributo 'name'
                  $titulo=$_POST['titulo'];
                  $fecha=$_POST['fecha'];
                  $ciudad=$_POST['ciudad'];
                  $tipo=$_POST['tipo'];

                  echo "<br><br>";
                  echo "<b>Que --> </b>" . $titulo."<br>";
                  echo "<b>Cuando --> </b>" . $fecha."<br>";
                  echo "<b>Donde --> </b>" . $ciudad;
                };
              ?>
            </div>
          </div>
        </div>
        <!-- FORMULARIO ------------------------------------------------------------------------------------------------------>
        <div class="col-md-4 formulario">
          <!-- le decimos que se mantenga en la mismma pagina, que el post lo recoja de la mismma pag -->
          <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group text-center pb-2">
              <h1 class="text-light">ACTIVIDADES</h1>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="titulo" placeholder="Titulo" />
            </div>
            <div class="form-group">
              <input type="date" class="form-control" name= "fecha" placeholder="Fecha" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" />
            </div> 
            <div class="form-group">
              <div id="tipo">Tipo</div>
              <select type="text" class="form-control" name = "tipo" placeholder="Tipo">
                <option class="form-control">Musica</option>
                <option class="form-control">Cine</option>
                <option class="form-control">Copas</option>
                <option class="form-control">Viajes</option>
              </select>
            </div>
            <div class="form-group">
              <input type="radio" name= "gratis"> Acceso publico y gratuito
            </div>
            <div class="form-group pb-4 pt-5">
              <input 
                type="submit"
                class="btn btn-block ingresar"
                value="Crear actividad"
                name="crearActividad"
                onclick=mostrarActividad();
              />
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap----------------------------------------------------------------------------------------------------- -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
