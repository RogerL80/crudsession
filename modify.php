<?php
    session_start();
    if (!isset($_SESSION['usuarios'])) { 
        $_SESSION['usuarios'] = [];
    }

    $index = $_POST["key"];             //Key para modificar
    $Object = new DateTime();           
    $DateAndTime = $Object->format("d-m-Y h:i:s a");  
    
    $first_name = $_POST["name"];
    $last_name = $_POST["lastname"];
    $created_at = $DateAndTime;         // Modificamos DateTime
    
    $listado = $_SESSION["usuarios"];
    /* Datos a modificar */     
    $listado[$index]["first_name"] = $first_name;
    $listado[$index]["last_name"] = $last_name;
    $listado[$index]["created_at"] = $created_at;
    
    /* Salvamos modificacion en $_SESSION */
    $_SESSION["usuarios"] = $listado;
/*  $allUsers = count( $listado);
    echo "<br>Total de usuarios: $allUsers<br>";    
    echo '<pre>';
    print_r($listado);
    echo '</pre>'; */
    header("Location: listuser.php");
    exit();
?>