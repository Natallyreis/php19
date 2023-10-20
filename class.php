<?php
    Class Pessoa {

        public $nome;
        public $altura;
        public $nascimento;
        public $hobbie;

        public function MostrarPessoa(){
            echo "Nome: ".$this->nome."<br/>";
            echo "Altura: ".$this->altura."<br/>";
            echo "Nascimento: ".$this->nascimento."<br/>";
            echo "Hobbie: ".$this->hobbie."<br/>";

        }
    }
?>