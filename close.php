<?php 
    session_start();
    session_unset();                                        // Borrar las variables de sesión
    setcookie(session_name(), 0, 1 , ini_get("session.cookie_path"));    // Eliminar la cookie
    session_destroy();                                      // Destruye el resto de información sobre la sesión
        
    header("Location: index.html");                         //Redirigimos al Inicio
    exit();
?>