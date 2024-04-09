<?php

require_once("config.php");

use Cliente\CadastroCliente;

$cad = new CadastroCliente();

$cad->setNome("Matheus Pitas");
$cad->setEmail("matheus@matheus.com");
$cad->setSenha("123456");

$cad->registrarVenda();

echo $cad;

?>