<?php

    class validaPostLogin {

        private $usuario;
        private $senha;

        public function __construct($usuario = NULL, $senha = NULL) {
            $this->usuario = $usuario;
            $this->senha = $senha;
        }

        public function getUsuario() {
            return $this->usuario;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function validaPostLogin() {
            $usuario = $this->getUsuario();
            $senha = $this->getSenha();

            if ( isset($usuario) and isset($senha) and $usuario != "" and $senha != "" ) {
                return true;
            } else {
                return false;
            }
        }

        public function procuraDadosMaliciosos() {
            $usuario = $this->getUsuario();

            if ( htmlentities(trim(strip_tags($usuario))) == $usuario ) {
                return false;
            } else {
                return true;
            }
        }

        public function __destruct() {
            if ( isset($this->usuario) ) {
                unset($this->usuario);
            }
            
            if ( isset($this->senha) ) {
                unset($this->senha);
            }
        }
    }

?>