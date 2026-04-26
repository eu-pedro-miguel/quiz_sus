<?php

    if ( session_status() === PHP_SESSION_NONE ) {
        session_start();
    }

    if ( ! isset($_SESSION['usuario']) or ! isset($_SESSION['nome']) ) {
      
      session_destroy();
      require_once('incs/views/lista_quiz_1.php');
      exit();

    } else {

      // Configure fuso horário do PHP para America/Sao_Paulo
      date_default_timezone_set('America/Sao_Paulo');

      require_once('incs/classes/pdo.class.php');

      // Instanciação do banco de dados e consulta ao banco de dados
      $i=0;
      $email = [];
      $questao1 = [];
      $questao2 = [];
      $questao3 = [];
      $b = new bancoDeDados();
      $sql1 = 'SELECT email, questao1, questao2, questao3 FROM quiz';
      $args1 = NULL;
      $c = $b->executeSQL($sql1,$args1,false);
      while ( $linha1 = $c->fetch() ) {
        $email[$i] = $linha1['email'];
        $questao1[$i] = $linha1['questao1'];
        $questao2[$i] = $linha1['questao2'];
        $questao3[$i] = $linha1['questao3'];
        $i++;
      }

      $sql2 = 'SELECT questao1, questao2, questao3 FROM gabarito WHERE id_gabarito = 1';
      $args2 = NULL;
      $d = $b->executeSQL($sql2,$args2,false);
      while ( $linha2 = $d->fetch() ) {
        $questao1Gabarito = $linha2['questao1'];
        $questao2Gabarito = $linha2['questao2'];
        $questao3Gabarito = $linha2['questao3'];
      }

    }
 
    require_once('incs/views/lista_quiz_2.php');

    if ( $i > 0 ) {

?>
  <table>
    <tr><th rowspan="2">Nr</th><th rowspan="2">E-mail</th><th colspan="3">Respostas</th></tr>
    <tr><th>Questão 1</th><th>Questão 2</th><th>Questão 3</th></tr>
    <?php
    
      for ($j=0;$j<$i;$j++) {

        if ( $questao1[$j] == $questao1Gabarito ) { 
          $imgQ1 = 'ok.png';
        } else {
          $imgQ1 = 'nok.png';
        }

        if ( $questao2[$j] == $questao2Gabarito ) { 
          $imgQ2 = 'ok.png';
        } else {
          $imgQ2 = 'nok.png';
        }

        if ( $questao3[$j] == $questao3Gabarito ) { 
          $imgQ3 = 'ok.png';
        } else {
          $imgQ3 = 'nok.png';
        }

        echo "\r\n\t<tr><td class='nr'>" . ($j+1) . "</td><td class='email'>". $email[$j] . "</td><td class='questao'><img class='imagem' src='imagens/" . $imgQ1 . "'></td><td class='questao'><img class='imagem' src='imagens/" . $imgQ2 . "'></td><td class='questao'><img class='imagem' src='imagens/" . $imgQ3 . "'></td></tr>";

      }
      echo "</table>";
      if ( $j > 1 ) {
      	echo "<h3>Há " . $j . " respostas.</h3>";
      } else {
      	echo "<h3>Há " . $j . " resposta.</h3>";
      }

    } else {

      echo "<h3>Não há nenhuma resposta na base de dados!</h3>";

    }
    ?>
    <h4><a href="menu.php">&nbsp;&nbsp;Volte ao menu&nbsp;&nbsp;</a></h4>
  </body>
</html>
