<?php
    class Actividad {
        public $titulo;
        public $fecha;
        public $ciudad;
        public $tipo;
        function __construct($titulo, $fecha, $ciudad, $tipo){
            $this->titulo = $titulo;
            $this->fecha = $fecha;
            $this->ciudad = $ciudad;
            $this->tipo = $tipo;
        }
    }
?>