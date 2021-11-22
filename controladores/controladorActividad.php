
<?php require "actividad.php";?>
<?php 
    //require "functionsCRUD.php";
    function comprobarActividad(){

        if (isset($_POST["crearActividad"])){//Lo mismo de antes solo que ahora iremos guardando las act en el objeto nuevaActividad
            $nuevaActividad = new Actividad($_POST['titulo'], 
                                            $_POST['fecha'], 
                                            $_POST['ciudad'], 
                                            $_POST['tipo']);//mando estos parametros al constructor
                                            
            crearActividades($nuevaActividad);

            //Falta meter el usuarioen la tabla de actividades...************************************************************************************************************************
            //$iD = obtenerUsuarioPorId();
            
            crearActividadEnDB ($nuevaActividad->titulo, $nuevaActividad->ciudad, $nuevaActividad->fecha, 1, "ale");

        };
    }

    
    function crearActividades($nuevaActividad){//mme mandan la actiidad y aqui la creo
        if(!isset($_SESSION["actividades"])){//si no existe dentro de la session el valor actividaddes, que lo cree
            $_SESSION["actividades"] = array();
        }
        $actividadSerializada = serialize($nuevaActividad);//Se tiene que guardar SERIALIZADO el dato si lo queremos guardar en un array de SESSION
        array_push( $_SESSION["actividades"],$actividadSerializada );
    }

    function listarActividades(){
        if(!isset($_SESSION["actividades"])){
            $_SESSION["actividades"] = array();
        }

        return $_SESSION["actividades"];
    }
        
?>

