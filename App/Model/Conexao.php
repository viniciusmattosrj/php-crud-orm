<?php

namespace App\Model;

class Conexao {
    
    private static $instance;

    public static function getConexao()
    {
        if(!isset(self::$instance)) {
            self::$instance = new \PDO('pgsql:host=10.11.0.2;dbname=phpcrud','vinicius','123456A'); 
        }    
        
        return self::$instance;
    }
}