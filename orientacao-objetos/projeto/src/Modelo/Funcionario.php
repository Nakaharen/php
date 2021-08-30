<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperarCargo(): string
    {
        return $this->cargo;
    }

    public function alterarNome(string $nome) : string
    {
        $this->validarNomeTitular($nome);
        $this->nome=$nome;
    }

    public function recuperarSalario(): float
    {
        return $this->salario;
    }
    
    public function calcularBonificacao(): float
    {
        if ($this->cargo === "Gerente"){
            return $this->salario;
        }
        return $this->salario * 0.1;
    }

}