<?php
    // Se cierra destruye la session pero primero debe de estar creada.
    session_start();
    session_destroy();

    // luego despues de cerrar la session que se regrese autumaticamente al index
    header("Location: index.php");
    exit();
?>