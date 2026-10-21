<?php

class pessoa
{

    private string $nome;
    private int $idade;
    private int $cpf;

    public function __construct(
        string $nome,
        int $idade,
        int $cpf
    ) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
}

$pessoa01 = new Pessoa('Adriel', 17, 329598818);

class produtos
{
    private string $nome;
    private int $preco;
    private int $quantidade;
    private string $categoria;

    public function __construct(string $nome, int $preco, int $quantidade, int $categoria)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->categoria = $categoria;
    }
    public function pagarnomes()
    {
        return $this->nome;
    }
}
$produto02 = new produtos("nome", 100, 2, 'nome');
?>