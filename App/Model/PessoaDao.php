<?php

namespace App\Model;

class PessoaDao {

    public function create(Pessoa $p)
    {
        $sql = 'INSERT INTO pessoa VALUES(?,?,?)';

        $enviar = Conexao::getConexao()->prepare($sql);

        $enviar->bindValue(1, $p->getCodigo());
        $enviar->bindValue(2, $p->getNome());
        $enviar->bindValue(3, $p->getIdade());

        $enviar->execute();
    }  


    public function read()
    {
        $sql = 'SELECT * FROM pessoa';
        $enviar = Conexao::getConexao()->prepare($sql); 

        $enviar->execute();

        if($enviar->rowCount() > 0) {
            $resultado = $enviar->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }

        return [];
    }


    public function update(Pessoa $p) 
    {
        $sql = 'UPDATE pessoa SET nome = ?, idade = ? where codigo = ?';

        $enviar = Conexao::getConexao()->prepare($sql);
        
        $enviar->bindValue(1, $p->getNome());
        $enviar->bindValue(2, $p->getIdade());
        $enviar->bindValue(3, $p->getCodigo());

        $enviar->execute();
    }


    public function delete($codigo)
    {
        $sql = 'DELETE FROM pessoa WHERE codigo = ?';

        $enviar = Conexao::getConexao()->prepare($sql);

        $enviar->bindValue(1, $codigo);

        $enviar->execute();
    }
}