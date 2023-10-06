<?php

    class Conexao{
        
        public static function getConexao()
        {
            try {
                return new PDO("mysql:host=127.0.0.1;dbname=escolabd", "root", "");
            } catch(\PDOException $e) {
                echo 'Error ao conectar com banco de dados. ' . $e->getMessage();
                return null;
            }
        }
    }