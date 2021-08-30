<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;
    public function adicionarBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function recuperarTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
