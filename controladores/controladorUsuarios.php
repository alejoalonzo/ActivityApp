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

    function comprobarRegistro(){
        
        if(isset($_COOKIE["ifpUser"])){
            $_SESSION["usuario"] = $_COOKIE["ifpUser"];
            //prueba-->echo "Entro en el if de la cookie";
            header("Location: index.php");
            exit();
        }
    }

?>