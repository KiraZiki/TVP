<?php

    class ClienteJuridico extends Cliente{
        private $cnpj;
        private $ie;
        
        public function setCNPJ($cnpj){
            $this -> cnpj = $cnpj;
        }
        public function setIE($ie){
            $this -> ie = $ie;
        }
        public function mostrarDados(){
            parent::mostrarDados();
            echo "CNPJ:" . $this->cnpj . "  IE:" . $this->ie;
        }
        public function avaliaIdade(){
            if($this->idade >= "40"){
                echo "<br>Cliente jurídico";
            }
        }
    }

?>