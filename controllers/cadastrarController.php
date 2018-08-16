<?php

class cadastrarController extends controller {

    public function index() {

        $dados = array();
        $this->loadTemplate('cadastrar',$dados);

    }


}