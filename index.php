<?php

require_once 'config.php';

use App\Model\Pessoa;
use App\Model\PessoaDao;

$pessoa = new Pessoa();
$pessoa->codigo = 5;
$pessoa->nome   = 'ORM2';
$pessoa->idade  = 25;

PessoaDao::update($pessoa);


