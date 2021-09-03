<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alterarNome(string $nome) : void
    {
        $this->validarNome($nome);
        $this->nome=$nome;
    }

    public function receberAumento(float $valorAumento) : void
    {
        if ($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }
    
    public function recuperarSalario(): float
    {
        return $this->salario;
    }

    abstract public function calcularBonificacao() : float;
}
