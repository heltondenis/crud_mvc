<?php

class contatosController extends controller {
    
    public function index() {
        
    }
    
    public function add() {
        $dados = array();
       
        $this->loadTemplate('add', $dados);
    }
    
    public function addSave(){
    if (isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        
            $contatos = new Contatos();
            $contatos->add($nome, $email);

			$c
            
            header("Location: ".BASE_URL);
        }
    }
}
