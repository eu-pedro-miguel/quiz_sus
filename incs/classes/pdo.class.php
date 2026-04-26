<?php

    require_once('incs/configs/configs.php');

    class bancoDeDados extends PDO {
        
        public function __construct() {

            parent::__construct('mysql:host=' . HOST_DB . ';dbname=' . BANCO_DE_DADOS . ';charset=utf8', USUARIO_DB, SENHA_DB, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            try {
    			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		} catch (PDOException $e) {
    			echo "bancoDeDados -> Erro 001: " . $e->getMessage();
                exit();
    		}

        }

        /*

        Esta função pode ser executada com SQL com ou sem outros argumentos
             
        Para executar essa função só passando SQL sem outros argumentos, faça:
            
        $a = new bancoDeDados();

        $sql = "select * from emails";
        $b = $a->executeSQL($sql);
        while ( $linha = $b->fetch() ) {
            echo "id_email = " . $linha['id_email'];
        }
            
        OU
            
        Para executar essa função passando SQL e outros argumentos, faça:

        $sql = "select count(*) from emails";
        $args = NULL;
        $b = $a->executeSQL($sql,$args,true);
        echo "Quantidade = " . $b;

            
        $sql = "select email from emails where id_email = ? and validado = ?";
        $args = [ '1', '1' ];
        $b = $a->executeSQL($sql,$args);
        while ( $linha = $b->fetch() ) {
            echo "email = " . $linha['email'];
        }


        $sql = "select count(email) from emails where id_email = ? and validado = ?";
        $args = [ '1', '1' ];
        $b = $a->executeSQL($sql,$args,true);
        echo "Quantidade = " . $b;

        OBSERVAÇÃO: Para levantar uma coluna com quantidades, vale o mesmo do que se estivesse contando.

        */

        public function executeSQL($sql, $args = NULL, $valorUnico = false) {

            if ( $args == NULL && $valorUnico == false ) {

                return $this->query($sql);

            } elseif ( $args == NULL && $valorUnico == true ) {

                $stmt = $this->prepare($sql);
                $stmt->execute();
                return $stmt->fetchColumn();

            } elseif ( $args != NULL && $valorUnico == false ) {

                $stmt = $this->prepare($sql);
                $stmt->execute($args);
                return $stmt;

            } elseif ( $args != NULL && $valorUnico == true ) {

                $stmt = $this->prepare($sql);
                $stmt->execute($args);
                return $stmt->fetchColumn();

            } else {

                echo "<p>bancoDeDados -> Erro 002: Erro na passagem de argumentos à função!</p>";

            }
        }

        public function __destruct() {}
    }

?>