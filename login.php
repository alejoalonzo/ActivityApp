<!DOCTYPE html>
<?php
    session_start();//Siempre iniciar la session
    if(isset($_POST["login"])){//si le da al boton de entrar...
        if($_POST["user"] == "ifp" && $_POST["password"] == "2021"){
            //Si el usuario y contraseña es correcto, la sseion del index va a tener un valor y no lo va a mandar al login
            $nombreUsuario = $_POST["user"];
            $_SESSION["usuario"] = $nombreUsuario;

            //Asignar cookie, le paso un nombre y el usuarioy tambn tiempo (1h)
            setcookie("ifpUser", $nombreUsuario, time()+30);
            header("Location: index.php");//Y lo mandamos al index
            exit();
        }else{
            $errorLogin= "";
        }
    }    
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
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
                <div  id="claseVariable" class="col-md-4 soloFormulario">
                    <!-- le decimos que se mantenga en la mismma pagina, que el post lo recoja de la mismma pag -->
                    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group text-center pb-2">
                            <h1 class="text-light">Iniciar sesión</h1>
                        </div>
                        <div class="form-group">
                            <input type="text" id="inputUsuario" class="form-control" name="user" placeholder="Usuario"/>
                        </div>
                        <div class="form-group">
                            <input type="password" id="inputPassword" class="form-control" name= "password" placeholder="Contraseña"/>
                        </div>
                        <div class="form-group pb-4 pt-5">
                            <input 
                            type="submit"
                            class="btn btn-block ingresar"
                            value="Entrar"
                            name="login" 
                            />
                        </div>
                    </form>
                    <?php
                        if(isset($errorLogin)){
                            echo "<script>";
                            echo "contrasenaIncorrecta();";
                            echo "</script>";
                        }
                    ?>
                </div> 
            </div>
        </div>    
    </body>
</html>