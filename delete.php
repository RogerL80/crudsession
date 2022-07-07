<?php
    session_start();
    if (!isset($_SESSION['usuarios'])) { 
        $_SESSION['usuarios'] = [];
    }

    /* Index to delete */ 
    $index = $_GET["k"];
    
    /* Extraer de $_SESSION los datos a un array */     
    $listado = $_SESSION["usuarios"];

    /* Eliminamos el elemento deseado */      
    unset($listado[$index]);

    /* Volvemos a guardar en $_SESSION el array */ 
    $_SESSION["usuarios"] = $listado;

    /* Redirigimos al listado */ 
    header("Location: listuser.php");
    exit();
?>