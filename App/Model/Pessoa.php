<?php

namespace App\Model;

class Pessoa
{
    private $codigo, $nome, $idade;

    public function getCodigo()
    {
        return $this->codigo;   
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getNome()
    {
        return $this->nome;   
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;   
    }    

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }    
}