<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validarNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }

        $this->saldo -= $valorASacar;

    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino-> depositar($valorATransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validarNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit;
        }
    }
}