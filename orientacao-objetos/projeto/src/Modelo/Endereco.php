<?php

namespace Alura\Banco\Modelo;

/**
 * class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
final class Endereco
{

    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperarCidade(): string
    {
        return $this->cidade;
    }

    public function recuperarBairro(): string
    {
        return $this->bairro;
    }

    public function recuperarRua(): string
    {
        return $this->rua;
    }

    public function recuperarNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

}

