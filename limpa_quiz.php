<?php

    if ( session_status() === PHP_SESSION_NONE ) {
        session_start();
    }

    if ( ! isset($_SESSION['usuario']) or ! isset($_SESSION['nome']) ) {
      
        session_destroy();
        require_once('incs/views/limpa_quiz_1.php');
        exit();

    } else {

      require_once('incs/classes/pdo.class.php');

      $b = new bancoDeDados();
      $sql1 = 'DELETE FROM quiz';
      $args1 = NULL;
      
      if ( $b->executeSQL($sql1, $args1, false)->rowCount() )  {
        $resposta="Todas as respostas foram removidas!";
      } else {
         $resposta="Nenhuma resposta foi removida!";
      }

      unset($b);
      require_once('incs/views/limpa_quiz_2.php');
    }

?>
