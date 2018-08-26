<?php

class cadastrarController extends controller {

    /**
     *
     */
    public function index() {

        $dados = array();
        $this->loadView('cadastrar',$dados);

    }

}