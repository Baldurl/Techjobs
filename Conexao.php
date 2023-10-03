<?php
class Conexao
{

    private static $conexao;

    public static function getConexao()
    {

        try {
            return new PDO("mysql:host=127.0.0.1; dbname=escoladb", "root", "");

        } catch (\PDOException $e) {
            echo 'Erro ao conectar ao banco de dados';
            return null;
        }




    }


}
?>