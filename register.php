<?php
    session_start();
    if (!isset($_SESSION['usuarios'])) { 
        $_SESSION['usuarios'] = [];
    }

    $Object = new DateTime();  
    $DateAndTime = $Object->format("d-m-Y h:i:s a");  
    
    $first_name = $_POST["name"];
    $last_name = $_POST["lastname"];
    $created_at = $DateAndTime;
    $listado = $_SESSION["usuarios"];
    /* Llenamos datos en array */
    $usuarios = array("first_name" => $first_name, 
        "last_name" => $last_name, 
        "created_at" => $created_at
    );
    /* Agregamos al inicio o al final un nuevo elemento en array */
    $listado[] = $usuarios;

    /* Guardamos el array en $_SESSION */
    $_SESSION["usuarios"] = $listado;

    header("Location: listuser.php");   //Redireccionamos a Lista
    exit();
?>