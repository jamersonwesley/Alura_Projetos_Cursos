<?php

namespace Vacant\DesingPattern;

use Vacant\DesingPattern\Descontos\descontos5itens;
use Vacant\DesingPattern\Descontos\descontovalor500;

class Calculadoradedescontos
{
    public function Calculadescontos(Orcamento $orcamento): float
    {
        $descontos5itens = new descontos5itens();
        $desconto = $descontos5itens->Calculadescontos(orcamento: $orcamento);
        if ($desconto === 0) {
            $desconto500reais = new descontovalor500();
            $desconto = $desconto500reais->Calculadescontos(orcamento: $orcamento);
        }


        return $desconto;
    }
}
