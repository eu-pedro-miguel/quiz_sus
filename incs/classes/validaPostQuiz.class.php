<?php

    class validaPostQuiz {

        private $email;
        private $q1;
        private $q2;
        private $q3;
        private $web;

        public function __construct($email = NULL, $q1 = NULL, $q2 = NULL, $q3 = NULL, $web = NULL) {

            $this->email = $email;
            $this->q1 = $q1;
            $this->q2 = $q2;
            $this->q3 = $q3;
            $this->web = $web;
            
        }

        public function getEmail() {
            return $this->email;
        }

        public function getQ1() {
            return $this->q1;
        }

        public function getQ2() {
            return $this->q2;
        }

        public function getQ3() {
            return $this->q3;
        }

        public function getWeb() {
            return $this->web;
        }

        public function validaPostQuiz() {
            $email = $this->getEmail();
            $q1 = $this->getQ1();
            $q2 = $this->getQ2();
            $q3 = $this->getQ3();
            $web = $this->getWeb();

            if ( isset($email) and isset($q1) and isset($q2) and isset($q3) and $email != "" and $q1 != "" and $q2 != "" and $q3 != "" ) {
                return true;
            } else {
                return false;
            }
        }

        public function procuraDadosMaliciosos() {
            $email = $this->getEmail();
            $q1 = $this->getQ1();
            $q2 = $this->getQ2();
            $q3 = $this->getQ3();
            $web = $this->getWeb();

            if (filter_var($email, FILTER_VALIDATE_EMAIL) and htmlentities(trim(strip_tags($email))) == $email and ($q1 == "1" or $q1 == "2" or $q1 == "3" or $q1 == "4") and ($q2 == "1" or $q2 == "2" or $q2 == "3" or $q2 == "4") and ($q3 == "1" or $q3 == "2" or $q3 == "3" or $q3 == "4")) {
                return false;
            } else {
                return true;
            }
        }

        public function verificaWebAtivado() {
            $web = $this->getWeb();

            if ($web == "1") {
                return true;
            } else {
                return false;
            }
        }

        public function __destruct() {
            if ( isset($this->email) ) {
                unset($this->email);
            }
            
            if ( isset($this->q1) ) {
                unset($this->q1);
            }

            if ( isset($this->q2) ) {
                unset($this->q2);
            }

            if ( isset($this->q3) ) {
                unset($this->q3);
            }

            if ( isset($this->web) ) {
                unset($this->web);
            }
        }
    }

?>