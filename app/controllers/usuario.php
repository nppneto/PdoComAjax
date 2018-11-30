<?php
require_once('../config/bd.php');

class ControllerUser {

    public function __construct() { }
    
    public function insertUser($fields){
        try {
            $conn = connect_database();

            $stmt = $conn->prepare("INSERT INTO teste(nome, email, senha) values (:nome, :email, aes_encrypt(:senha,'nelson'))");
    
            $stmt->bindParam(':nome', $fields['nome']);
            $stmt->bindParam(':email', $fields['email']);
            $stmt->bindParam(':senha', $fields['senha']);
    
            $stmt->execute();
        } 
        catch (PDOException $e) {
            echo 'Vixi deu erro cara';
            echo $e->getMessage();
        }
    }

    public function buscarUsuario($fields){
        try {          
            header('Content-Type: application/json');

            $conn = connect_database();     

            $busca = "%". $fields['busca']. "%";

            $stmt = $conn->prepare("SELECT nome, email, aes_decrypt(senha, 'nelson') AS senha FROM teste WHERE nome LIKE :nome");
            $stmt->bindParam(':nome', $busca);
            $stmt->execute();

            $result = $stmt->fetchAll(); //(PDO::FETCH_ASSOC);
            echo json_encode($result);

            // exit('Oiii');
        }
         catch (PDOException $e) {
            echo 'Vixi deu erro cara';
            echo $e->getMessage();
        }
    }
}