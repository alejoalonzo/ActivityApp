function mostrarActividad(){
    document.getElementById("infoActividad").style.display="block";  
    
    // ademas de mostrar actividad, le cambio el fondo al formulario
    // var elemento = document.getElementById("claseVariable");
    // if (elemento.className == "formulario") {
    //     elemento.className == "soloFormulario";
    // }
};

function contrasenaIncorrecta(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El usuario o la contraseña son incorrectos',
        footer: '<a href="https://support.google.com/chrome/answer/95606?hl=es&co=GENIE.Platform%3DDesktop">¿Por que tengo este problema?</a>'
    })
}




//********************* NOTAS ************************************************** */

// <!-- VERSION ALTERNATIVA. partir el codgo php en 2 y en el medio meter el html "SIntaxis alternativa" -->
// <?php
//   if(isset($_POST['crearActividad']) && $_POST['tipo']!=""):?>
//       <img class="fit-image" src= "../backendProject/img/ <?php echo $_POST['tipo']?> .jpg" />
// <?php endif ?>
//https://www.php.net/manual/en/control-structures.alternative-syntax.php