<?php

class Animal {

    public function emitirSom(): string
    {
        return "Som";
    }

    public function mover(): string
    {
        return "Andar";
    }

}

class Cachorro extends Animal {

    public function emitirSom(): string
    {
        return "Latir";
    }

}

class Gato extends Animal {

    public function emitirSom(): string
    {
        return "Miar";
    }

}

class Passaro extends Animal {

    public function mover(): string
    {
        return "Rastejar e " . parent::mover();
    }

}

$pluto = new Cachorro();
$amora = new Gato();
$bentivi = new Passaro();

echo $pluto->emitirSom() . "<br />";
echo $pluto->mover() . "<br />";

echo $amora->emitirSom() . "<br />";

echo $bentivi->mover() . "<br />";


?>