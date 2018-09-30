<?php

namespace App\Model;

class PessoaDao {

    public static function create(Pessoa $p)
    {
        Pessoa::create($p->to_array());
    }  


    public function read()
    {
    
    }


    public function update(Pessoa $p) 
    {
    
    }


    public function delete($codigo)
    {
    
    }
}