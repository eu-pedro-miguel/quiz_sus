<?php

    if ( session_status() === PHP_SESSION_NONE ) {
        session_start();
    }

    if ( ! isset($_SESSION['usuario']) or ! isset($_SESSION['nome']) ) {

        session_destroy();
        require_once('incs/views/menu_1.php');

    } else {

        require_once('incs/views/menu_2.php');

    }

?>
