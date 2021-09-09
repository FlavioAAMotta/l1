<?php
    class Pessoa{
        private $nome;
        private $CPF;
        private $altura;
        private $peso;
        private $RG;

        function calculoIMC(){
            echo ($this->peso / pow($this->altura,2));
        }

        function __construct(){
            $RG = 0;
        }

        function __destruct(){

        }

    }
?>