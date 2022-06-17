<?php

namespace Vacant\DesingPattern;

use Vacant\DesingPattern\Impostos\Imposto;

class  Calculadoradeimpostos
{

    public function Calcula(Orcamento $orcamento, Imposto $nomeimposto): float
    {
        return $nomeimposto->calcularimposto($orcamento);
    }
}
