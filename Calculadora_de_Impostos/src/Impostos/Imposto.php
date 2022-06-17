<?php

namespace Vacant\DesingPattern\Impostos;

use Vacant\DesingPattern\Orcamento;

interface Imposto
{
    public function calcularimposto(Orcamento $orcamento): float;
}
