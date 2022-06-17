<?php

use Vacant\DesingPattern\Calculadoradedescontos;
use Vacant\DesingPattern\Calculadoradeimpostos;
use Vacant\DesingPattern\Impostos\Icms;
use Vacant\DesingPattern\Impostos\Imposto;
use Vacant\DesingPattern\Orcamento;

require "vendor/autoload.php";

/*$calculadora = new Calculadoradeimpostos();

$orcamento = new Orcamento();

$orcamento->valor = 100;

echo $calculadora->Calcula(orcamento: $orcamento, nomeimposto: new Icms());
*/

$calculadora = new Calculadoradedescontos();

$orcamento = new Orcamento();

$orcamento->valor = 600;
$orcamento->Qtditens = 5;

echo $calculadora->Calculadescontos(orcamento: $orcamento);
