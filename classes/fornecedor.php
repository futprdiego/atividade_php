<?php

/**
 * Criação da classe que auxiliara na manipulação das $_SESSION. 
 * @PARAM $SESSAO    
 */
class fornecedor {
    ## Nomes criados(propriedades) baseado nos campos do cadastro_fornecedor.
    public $nome;
    public $endereco;
    public $cnpj;
    public $email;
    public $telefone;

    
    ## Funcão para retornar o valor as propriedades.
    function __construct($sessao) {
        ## Campos a serem retornados atribuidos as propriedades das classes.
        $this->nome = $sessao['nome'];
        $this->endereco = $sessao['endereco'];
        $this->cnpj = $sessao['cnpj'];
        $this->email = $sessao['email'];
        $this->telefone = $sessao['telefone'];
    }

}
?>