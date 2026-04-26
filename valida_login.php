<?php

  // Inclui as classes pdo e validaPostLogin
  require_once('incs/classes/pdo.class.php');
  require_once('incs/classes/validaPostLogin.class.php');

  // Verificando se as variáveis usuario e senha foram enviadas para este script com valores atribuídos.
  //
  // Instanciação da classe validaPostLogin
  $a = new validaPostLogin($_POST['usuario'], $_POST['senha']);

  if ( $a->validaPostLogin() ) {

    if ( $a->procuraDadosMaliciosos() ) {

      unset($a);
      require_once('incs/views/valida_login_1.php');
      exit();

    } else {

      $usuario = $a->getUsuario();
      $senha =$a->getSenha();

    }
    
  // Se nenhum valor para usuário e senha foram enviados, não será possível processar o login. 
  } else {

    unset($a);
    require_once('incs/views/valida_login_2.php');
    exit();

  }
  unset($a);

  if ( session_status() === PHP_SESSION_NONE ) {
    session_start();
  }

  // Instanciação do banco de dados e consulta ao banco de dados
  $b = new bancoDeDados();
  $sql1 = 'SELECT count(*) FROM usuarios WHERE usuario = :usuario and senha = :senha';
  $args1 = [
    ':usuario' => $usuario,
    ':senha' => md5($senha)
  ];
  $qtdeOK = $b->executeSQL($sql1,$args1,true);
 
  // Se usuário e senha corresponderem, estabelece sessão.
  if ( $qtdeOK == 1 ) {

    // Nova consulta ao banco de dados
    $sql2 = 'SELECT nome FROM usuarios WHERE usuario = :usuario';
    $args2 = [
      ':usuario' => $usuario
    ];
    $c = $b->executeSQL($sql2,$args2);
    while ( $linha = $c->fetch() ) {
      $nome = $linha['nome'];
    }

    // Atribuição de variáveis de sessão
    if ( isset($usuario) and isset($nome) ) {

      $_SESSION['usuario'] = $usuario;
      $_SESSION['nome'] = $nome;
      unset($b);
      header("Location: menu.php");

    } else {

      // Destroi a variável $b instanciada anteriormente no script.
      unset($b);
      // Destroi a sessão criada inicialmente.
      session_destroy();
      require_once('incs/views/valida_login_3.php');
      exit();

    }

  // Usuário e/ou senha não correspondem a um professor do BD.
  } else {

    // Destroi a variável $pdo instanciada anteriormente no script.
    unset($b);
    // Destroi a sessão criada inicialmente.
    session_destroy();
    require_once('incs/views/valida_login_4.php');
    exit();

  }

?>
