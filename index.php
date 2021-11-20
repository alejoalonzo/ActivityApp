<!-- dev: Alejandro, github: @alonzoalejo -->


<!-- -----------------------------------------SESSION--------------------------------------------------------------------------------------- -->
<?php //require "controladores/actividad.php";?>
<?php require "controladores/controladorUsuarios.php";?>
<?php require "controladores/controladorActividad.php";?>

<?php 
  session_start();//Inicializar la session siempre.
  comprobarLogin();
  comprobarActividad();
?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->



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
    <script src="scrps/scripts.js"></script>
    <!-- iconos de fontAwesome -->
    <script src="https://kit.fontawesome.com/09fe00cf62.js" crossorigin="anonymous"></script>
    <title>Activity App</title>
  </head>


  <body>
    <!-- MENSAJE DE BIENVENIDA ------------------------------------------------------------------------------------------------>
    <div class="container">
      <div class="row pt-2 mt-2 mb-2">
        <div class="col">
        </div>
        <div class="col-md-auto">
        </div>
        <div class="col col-lg-12">
          <h1 class="display-4">Hola, <?php echo  $_SESSION["usuario"]?></h1>
        </div>
      </div>
    </div>  
    <!------------------------------------------------------------------------------------------------------------------------>

    
    <div class="container">
      <div class="row justify-content-center cen pt-5 mt-5">
        <!-- IMAGENES ---------------------------------------------------------------------------------------------------------->
        <div id= "infoActividad" class="col-md-4 formulario">
          <div class="form-group text-center pb-2">
            <h1 class="text-light">Tu actividad</h1>
            <div class="col-md-12 imgs">
            
            <?php
              $activities = listarActividades();
              foreach($activities as $actividadSerializada):// iteramos para guardar en el array y hay que deserealizar.
                $actividad = unserialize($actividadSerializada);?>
                <div>
                    <!-- En  cada iteracion llamo a la imagen con el objeto.atributo ==> $actividad.tipo -->
                    <!-- Importante, no debe haber espacios entre el SRC y el php en mmedio sino se rompe el link -->
                            
                    <img class="fit-image" src= "img/<?php echo $actividad->tipo; ?>.jpg" />
                </div>
                <div>
                    <!-- y tambien imprimo toda la información de la misma manera con el get y el objeto -->
                    <?php echo  "<br><br>"?>
                    <?php echo "<b>Que --> </b>" . $actividad->titulo."<br>"?>
                    <?php echo "<b>Cuando --> </b>" . $actividad->fecha."<br>"?>
                    <?php echo "<b>Donde --> </b>" . $actividad->ciudad."<br>"?>
                    <?php echo  "<br><br>"?>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
        </div>
        <!-- FORMULARIO ------------------------------------------------------------------------------------------------------>

        <div  id="claseVariable" class="col-md-4 soloFormulario">
          <!-- le decimos que se mantenga en la mismma pagina, que el post lo recoja de la mismma pag -->
          <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group text-center pb-2">
              <h1 class="text-light">ACTIVIDADES</h1>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="titulo" placeholder="Titulo" required/>
            </div>
            <div class="form-group">
              <input type="date" class="form-control" name= "fecha" placeholder="Fecha" required/>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required/>
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
              <input type="radio" name= "gratis"> Es gratuito
            </div>
            <div class="form-group pb-4 pt-5">
              <input 
                type="submit"
                class="btn btn-block ingresar"
                value="Crear actividad"
                name="crearActividad" 
              />
              <?php
              //Otro condicional para mostrar llamar al JS que muestra la el div contenedor.
              if(isset($_POST['crearActividad']) && $_POST['tipo']!=""){ 
                //Las fuciones de JS se pueden llamar asi
                echo "<script>";
                echo "mostrarActividad();";
                echo "</script>";
              }
              ?>
            </div>
          </form>
        </div> 
      </div>

      <!-- LOGOUT ------------------------------------------------------------------------------------------------------>
      <div class="row justify-content-center cen pt-5 mt-5 mb-5">
        <button type="button" class="btn btn-light">
          <a href="logout.php" >
            <i class="fas fa-sign-out-alt"></i>
          </a></button>
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
