<?php

  // Inclui as classes pdo e validaPostLogin
  require_once('incs/classes/pdo.class.php');
  require_once('incs/classes/validaPostQuiz.class.php');

  // Verificando se as variáveis email, q1, q2, q3 e web foram enviadas para este script com valores atribuídos.
  //
  // Instanciação da classe validaPostQuiz
  if ( isset($_POST['web']) ) {
    $a = new validaPostQuiz($_POST['email'], $_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['web']);
  } else {
    $a = new validaPostQuiz($_POST['email'], $_POST['q1'], $_POST['q2'], $_POST['q3']);
  }
  
  if ( $a->validaPostQuiz() ) {

    if ( $a->procuraDadosMaliciosos() ) {

      unset($a);
      require_once('incs/views/valida_quiz_1.php');
      exit();

    } else {

      $email = $a->getEmail();
      $q1 =$a->getQ1();
      $q2 =$a->getQ2();
      $q3 =$a->getQ3();
      $web =$a->getWeb();
      unset($a);

    }
    
  // Se nenhum valor para as variáveis for enviado, nada prosseguirá. 
  } else {

    unset($a);
    require_once('incs/views/valida_quiz_2.php');
    exit();

  }

  // Instanciação do banco de dados e consulta ao banco de dados
  $b = new bancoDeDados();
  $sql1 = 'SELECT count(*) FROM quiz WHERE email = :email';
  $args1 = [
    ':email' => $email
  ];
  $emailJahRespondeuQuiz = $b->executeSQL($sql1,$args1,true);

  // Para ocasiões em que o usuário já respondeu o formulário e está enviando novamente o formulário por meio da página web.
  if ( $emailJahRespondeuQuiz == 1 and $web == "1" ) {

    unset($b);
    require_once('incs/views/valida_quiz_3.php');
    exit();

  // Para ocasiões em que o usuário já respondeu o formulário e está enviando novamente o formulário por meio do aplicativo para celular.
  } else if ( $emailJahRespondeuQuiz == 1 and $web != "1" ) {

    unset($b);
    echo "2";
    exit();

  // Para ocasiões em que o usuário ainda não respondeu o formulário e está acessando por meio da página web.
  } else if ( $emailJahRespondeuQuiz == 0 and $web == "1" ) {

    $sql2 = 'INSERT INTO quiz (id_gabarito, email, questao1, questao2, questao3) VALUES (1, :email, :q1, :q2, :q3)';
    $args2 = [
      ':email' => $email,
      ':q1' => $q1,
      ':q2' => $q2,
      ':q3' => $q3
    ];
    if ( $b->executeSQL($sql2, $args2, false)->rowCount() )  {

      unset($b);
      require_once('incs/views/valida_quiz_4.php');
      exit();

    } else {

      unset($b);
      require_once('incs/views/valida_quiz_5.php');
      exit();

    }

  // Para ocasiões em que o usuário ainda não respondeu o formulário e está acessando por meio do aplicativo para celular.
  } else if ( $emailJahRespondeuQuiz == 0 and $web != "1" ) {

    $sql2 = 'INSERT INTO quiz (id_gabarito, email, questao1, questao2, questao3) VALUES (1, :email, :q1, :q2, :q3)';
    $args2 = [
      ':email' => $email,
      ':q1' => $q1,
      ':q2' => $q2,
      ':q3' => $q3
    ];
    if ( $b->executeSQL($sql2, $args2, false)->rowCount() )  {

      unset($b);
      echo "1";
      exit();

    } else {

      unset($b);
      echo "3";
      exit();

    }

  }

?>
