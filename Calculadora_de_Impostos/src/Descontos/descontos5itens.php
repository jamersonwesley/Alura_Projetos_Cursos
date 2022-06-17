<?php

namespace Vacant\DesingPattern\Descontos;

use Vacant\DesingPattern\Impostos\Descontos;
use Vacant\DesingPattern\Orcamento;

class descontos5itens
{
    public function Calculadescontos(Orcamento $orcamento): float
    {
        if ($orcamento->Qtditens > 5) {
            return $orcamento->valor * 0.01;
        }

        return 0;
    }
}
