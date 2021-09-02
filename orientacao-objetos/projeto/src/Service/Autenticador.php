<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentarLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "Ok. Usuário logado no sistema" . PHP_EOL;
        } else {
            echo "Ops. Senha incorreta." . PHP_EOL;
        }
    }
}