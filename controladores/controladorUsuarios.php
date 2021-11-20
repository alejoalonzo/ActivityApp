<?php
    function comprobarLogin(){
        //La cookie  guarda los datos aunque se cierre el navegador, solo con el logout se puede salir y la SESSION los guarda en el el server
        if(isset($_COOKIE["ifpUser"])){
            $_SESSION["usuario"] = $_COOKIE["ifpUser"];
            //prueba-->echo "Entro en el if de la cookie";
        }
        if(!isset($_SESSION["usuario"])){//si no existe dentro de la session el valor login, que me mande al login
            header("Location: login.php");
            exit();
        }
    }

    function obtenerUsuario($nombreUsuario, $contrasenaUsuario){
        if($nombreUsuario == "ifp" && $contrasenaUsuario == "2021"){
            return $nombreUsuario;
        }
    }

    function hacerLogin(){
        //Si el usuario y contraseña es correcto, la sseion del index va a tener un valor y si no lo va a mandar al login
        $nombreUsuario = $_POST["user"];
        $_SESSION["usuario"] = $nombreUsuario;

        //Asignar cookie, le paso un nombre y el usuario y tambn tiempo (300s) corto para ir probando 
        setcookie("ifpUser", $nombreUsuario, time()+300);
        header("Location: index.php");//Y lo mandamos al index
        exit();
    }

    // function comprobarRegistro(){
        
    //     if(isset($_COOKIE["ifpUser"])){
    //         $_SESSION["usuario"] = $_COOKIE["ifpUser"];
    //         //prueba-->echo "Entro en el if de la cookie";
    //         header("Location: index.php");
    //         exit();
    //     }
    // }

?>