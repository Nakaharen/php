<?php

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function recuperarEndereco(): Endereco
    {
        return $this->endereco;
    }
}