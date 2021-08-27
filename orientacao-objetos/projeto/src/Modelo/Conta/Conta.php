<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private $titular;
    private float $saldo;
    private static $numeroDeContas = 0;
    /**
     * @var int $tipo 1 == Conta Corrente; 2 = Poupança
     */
    private $tipo;

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;

    }

    public function sacar(float $valorASacar): void
    {
        if($this->tipo === 1){
            $tarifaSaque = $valorASacar * 0.05;
        } else {
            $tarifaSaque = $valorASacar * 0.03;
        }
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }

        $this->saldo -= $valorSaque;

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

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperarCpf();
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}