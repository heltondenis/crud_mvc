<?php

class Contatos extends model {
    
    public function getAll(){
        $array  = array();
        
        $sql = $this->db->query("SELECT * FROM contatos");
       
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }   
        return $array;
    }
    
    public function add($nome, $email){
        if ($this->emailExists($email) == false) {
            $sql = $this->db->prepare("INSERT INTO contatos (nome, email) VALUES (:nome, :email)");
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
        }
    }
    
    private function emailExists($email) {
        print_r($email);
        $sql = $this->db->prepare("SELECT * FROM contatos WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}


