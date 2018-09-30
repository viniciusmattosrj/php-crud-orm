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
        Pessoa::find($p->codigo)->update_attributes($p->to_array());
    }


    public function delete($codigo)
    {
    
    }
}