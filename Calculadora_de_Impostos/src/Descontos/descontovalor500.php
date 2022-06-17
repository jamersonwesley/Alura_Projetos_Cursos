<?php

namespace Vacant\DesingPattern\Descontos;

use Vacant\DesingPattern\Impostos\Descontos;
use Vacant\DesingPattern\Orcamento;

class descontovalor500
{
    public function Calculadescontos(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return 0;
    }
}
