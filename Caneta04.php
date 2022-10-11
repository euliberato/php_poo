<?php
    class Caneta{

        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        public function __construct($m, $c, $p){
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }
        
        public function tampar(){
            $this->tampada = true;
        }

        //Get e Set = Modelo
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }

        //Get e Set = Ponta
        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
    }
?>