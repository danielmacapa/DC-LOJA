<?php

class Cliente{
    protected $id;
    protected $nome;
    protected $endereco;
    protected $cpf;
    protected $telefone;
    
    public function setNome($nome){
        $this->descricao = $nome;
        }
    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        }
    public function getEndereco(){
        return $this->endereco;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
        }
    public function getCpf(){
        return $this->cpf;
    }

    public function setTelefone($telefone){
        $this->quantidade = $telefone;
        }
    public function getTelefone(){
        return $this->telefone;
    }

    public function adicionar(){
        $sql = "INSERT INTO cliente
        (nome, endereco, cpf, telefone)
        VALUES (?, ?, ?, ?)";
    try{

    $con = DB::conexao();
    $stmt = $con->prepare($sql);

    $stmt->bindParam(1, $this->setNome());
    $stmt->bindParam(2, $this->setEndereco());
    $stmt->bindParam(3, $this->setCpf());
    $stmt->bindParam(4, $this->setTelefone());

    }catch(PDOException $e){
        echo "Erro de Conexao:" . $e->getMessage(); 
    }


    }

    public static function listar( ){ }
    public function atualizar( ){ }
    public function excluir( ){ }

}

?>