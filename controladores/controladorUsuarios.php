<?php
require "conexion.php";
    function comprobarLogin(){
        //La cookie  guarda los datos aunque se cierre el navegador, solo con el logout se puede salir y la SESSION los guarda en el el server
        if(isset($_COOKIE["ifpUser"]) && !isset($_SESSION["usuario"])){
            $_SESSION["usuario"] = obtenerUsuarioPorId($_COOKIE["ifpUser"]);
            //prueba-->echo "Entro en el if de la cookie";
        }
        if(!isset($_SESSION["usuario"])){//si no existe dentro de la session el valor login, que me mande al login
            header("Location: login.php");
            exit();
        }
    }

    function obtenerUsuario($idUsuario, $contrasenaUsuario){

        global $conexion;

        //Es menos bulnerable obtener los datos con los '?'
        $consulta = "SELECT id, nombre, correo
                    FROM usuarios
                    WHERE id = ? AND contrasena =?
                    ";
        //Este codigo traduce la consulta a 
        $stmt = $conexion->prepare($consulta);
        $stmt->bind_param('ss', $idUsuario, $contrasenaUsuario);//vinculacion(bind), 'ss' se refiere a un string y otro string
        $stmt->execute();//ejejucar
        $resultado = $stmt->get_result();//obtener resultado

        if($resultado){//arreglo asociativo
            $usuario_db = mysqli_fetch_assoc($resultado);
            return $usuario_db;
        }
    }

    function obtenerUsuarioPorId($id){

        global $conexion;

        //Es menos bulnerable obtener los datos con los '?'
        $consulta = "SELECT id, nombre, correo
                    FROM usuarios
                    WHERE id = ?
                    ";
        //Este codigo traduce la consulta a 
        $stmt = $conexion->prepare($consulta);
        $stmt->bind_param('s', $id);//vinculacion(bind), 'ss' se refiere a un string y otro string
        $stmt->execute();//ejejucar
        $resultado = $stmt->get_result();//obtener resultado

        if($resultado){//arreglo asociativo
            $usuario_db = mysqli_fetch_assoc($resultado);
            return $usuario_db;
        }
    }

    function hacerLogin($usuario){
        //Si el usuario y contraseña es correcto, la sseion del index va a tener un valor y si no lo va a mandar al login
        $idUsuario = $usuario["id"];
        $_SESSION["usuario"] = $usuario;

        //Asignar cookie, le paso un nombre y el usuario y tambn tiempo (300s) corto para ir probando 
        setcookie("ifpUser", $idUsuario, time()+300);
        
        header("Location: index.php");//Y lo mandamos al index
        exit();
    }

    function registrarUsuario($id, $contrasena, $correo, $nombre){

        //llamo a una funcion CRUD pra crear en db
        $registrar =  crearUsuarios($id, $contrasena, $correo, $nombre);
        
        //Hago todos los pasos del login para que no se vaya a login y se quede en index
        setcookie("ifpUser", $id, time()+300);
        if(isset($_COOKIE["ifpUser"]) && !isset($_SESSION["usuario"])){
            $_SESSION["usuario"] = obtenerUsuarioPorId($_COOKIE["ifpUser"]);
           
        }
        
        header("Location: index.php");//Y lo mandamos al index
        exit();
    }

?>