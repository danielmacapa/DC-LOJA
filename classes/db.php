<?php

class DB{
    public static $servidor = “localhost”;
    public static $usuario = “root”;
    public static $senha = “123456789”;
    public static $nome_banco = “aula_php”; 
    
    public static function conexao(){
        $conexao = null;
        
    try{
        $conexao = new PDO(
            "mysql:host= self::$servidor;dbname=self::$nome_banco", self::$usuario, self::$senha
        );

    }catch(PDOException $e){
        echo "Erro de Conexao:" . $e->getMessage(); 
    }
    }

    return $conexao;
}




?>
