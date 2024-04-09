<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48; // Filhos herdarão esse método
    private $senha = "123456"; // Filhos não terão acesso a esse método

    public function verDados()
    {
        echo $this->nome."<br />";
        echo $this->idade."<br />";
        echo $this->senha."<br />";
    }

}

class Programador extends Pessoa {

    public function verDados()
    {

        echo get_class($this)."<br />";

        echo $this->nome."<br />";
        echo $this->idade."<br />";
        echo $this->senha."<br />"; // Está com erro, pois não é possivél acessar método privado de uma classe pai pela subclasse
    }

}

$pessoa = new Programador;

// echo $pessoa->nome."<br />";

$pessoa->verDados();


?>