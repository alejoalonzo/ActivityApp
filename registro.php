
<?php //require "controladores/conexion.php";?>

<?php
    // session_start();
    // if(isset($_COOKIE["ifpUser"])){
    //     $_SESSION["usuario"] = $_COOKIE["ifpUser"];
    //     //prueba-->echo "Entro en el if de la cookie";
    //     header("Location: index.php");
    //     exit();
    // }
?>


<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/styles.css" />
        <script src="scrps/scripts.js"></script>
        <script src="scrps/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center cen pt-5 mt-5">
                <!-- LOGIN ------------------------------------------------------------------------------------------------------>
                <div  id="#" class="col-md-4 soloFormulario">
                    <!-- le decimos que se mantenga en la mismma pagina, que el post lo recoja de la mismma pag -->
                    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group text-center pb-2">
                            <h1 class="text-light">Registro</h1>
                        </div>
                        <div class="form-group">
                            <input type="text" id="registroNombre" class="form-control" name="name" placeholder="Nombre"/>
                        </div>
                        <div class="form-group">
                            <input type="email" id="registroEmail" class="form-control" name= "email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" id="registroUsuario" class="form-control" name="user" placeholder="Usuario"/>
                        </div>
                        <div class="form-group">
                            <input type="password" id="registroPassword" class="form-control" name="password" placeholder="Contraseña"/>
                        </div>
                        <div class="form-group pb-4 pt-5">
                            <input 
                            type="submit"
                            class="btn btn-block ingresar"
                            value="Registrar"
                            name="registrar" 
                            />
                        </div>
                    </form>
                </div> 
            </div>
        </div>    
    </body>
</html>