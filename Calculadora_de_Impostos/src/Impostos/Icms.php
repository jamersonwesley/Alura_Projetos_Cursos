<?php

namespace Vacant\DesingPattern\Impostos;

use Vacant\DesingPattern\Orcamento;

class Icms implements Imposto
{
    public function calcularimposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.01;
    }
}
