<?php 

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['id']) && isset($_SESSION['role']) && $_SESSION['role'] == 'A') {
        
    } else {
        Header("Location: index.php");
    }


?>