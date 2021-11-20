function mostrarActividad() {
  document.getElementById("infoActividad").style.display = "block";

  // ademas de mostrar actividad, le cambio el fondo al formulario
  // var elemento = document.getElementById("claseVariable");
  // if (elemento.className == "formulario") {
  //     elemento.className == "soloFormulario";
  // }
}

function contrasenaIncorrecta() {
  Swal.fire({
    confirmButtonColor: "#5b789b",
    icon: "error",
    title: "Oops...",
    text: "El usuario o la contraseña son incorrectos",
    footer: '<a href="./registro.php">No estoy registrado</a>',
  });
}

//********************* NOTAS ************************************************** */

// <!-- VERSION ALTERNATIVA. partir el codgo php en 2 y en el medio meter el html "SIntaxis alternativa" -->
// <?php
//   if(isset($_POST['crearActividad']) && $_POST['tipo']!=""):?>
//       <img class="fit-image" src= "../backendProject/img/ <?php echo $_POST['tipo']?> .jpg" />
// <?php endif ?>
//https://www.php.net/manual/en/control-structures.alternative-syntax.php
