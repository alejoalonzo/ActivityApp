<?php
    require "registro.php"
    require "functionsCRUD.php";
    session_start();
    //Conexion---------------------------------------------------------------------------------------------
    $server = "localhost";
    $userDB = "root";
    $passwordDB = "";
    $nameDataBAse = "ifpdb";

    $conexion = mysqli_connect($server, $userDB, $passwordDB, $nameDataBAse);

    if(!$conexion){//Control de error para la conexion con DB
        echo  "Error en la conexion con la base de datos";
    }
    //-----------------------------------------------------------------------------------------------------

    //Crear usuario---------------------------------------------------------------------------------------------
    
    if(isset($_POST['registrar'])){
        $id = $_POST["user"];
        $nombre = $_POST["name"];
        $email = $_POST["email"];
        $password =  $_POST["password"];
    }

    $resultadoInsertar = crearUsuarios($id, $password, $email, $nombre);
    if($resultadoInsertar){
        echo "Usuario creado <br>";
    }else{
        echo "Error, no se ha podido crear usuario <br>";
    }









    //ejemplos CRUD-------------------------------
    /*
    $listadoUsusarios = listarUsuarios();
    foreach($listadoUsusarios as $usuarios){
        echo $usuarios ["nombre"].'<br>';
    }
    $resultadoInsertar = crearUsuarios('Juan', '123', 'juan@gmail.com', 'Juan Jose');
    if($resultadoInsertar){
        echo "Usuario creado <br>";
    }else{
        echo "Error, no se ha podido crear usuario <br>";
    }

    $resultadoActualizar = actualizarUsuarios('Juan', '1234', 'juan@gmail.com', 'Juan Jose J');
    if($resultadoActualizar){
        echo "Usuario actualizado <br>";
    }else{
        echo "Error, no se ha podido actualizar usuario <br>";
    }
    
    $resultadoBorrar = borrarUsuarios('Juan');
    if($resultadoBorrar){
        echo "Usuario eliminado <br>";
    }else{
        echo "Error, no se ha podido borrar el  usuario <br>";
    }
*/

?>
