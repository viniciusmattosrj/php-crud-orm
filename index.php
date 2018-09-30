<?php

require_once 'config.php';

use App\Model\Pessoa;
use App\Model\PessoaDao;

$pessoa = new Pessoa();
$pessoa->codigo = 5;
$pessoa->nome = 'ORM';
$pessoa->idade = 23;

PessoaDao::create($pessoa);


