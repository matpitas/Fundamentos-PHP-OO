<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

} 

class Carro implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou até " . $velocidade . " km/h."; 
    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou até ". $velocidade . " km/h.";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo trocou para a marcha ". $marcha;
    }
    
}

$civic = new Carro();

$civic->acelerar(75);
$civic->frenar(55);
$civic->trocarMarcha(3);

?>