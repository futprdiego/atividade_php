<?php
/**
 * Página cadastro_fornecedor irá receber as informações da classe sessao_fornecedor.  
 */

## Iniciando a sessão
session_start();

##Incluindo a classe sessao_fornecedor.
include "./classes/fornecedor.php";

## Realizando a atribuição do método $_POST para $_SESSION.
if (isset($_POST['btn_enviar'])) 
{
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['endereco'] = $_POST['endereco'];
    $_SESSION['cnpj'] = $_POST['cnpj'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telefone'] = $_POST['telefone'];
}


## Gambiarra, pois não irei utilizar validação no formulário para ficar mais fácil a visualização da AT. 
$teste = 0;

## Codições separadas para verificar se algum campo está ficara em branco.
if ($_SESSION['nome'] == '') 
{
    $teste = 1;
}

if ($_SESSION['endereco'] == '') 
{
    $teste = 1;
}

if ($_SESSION['cnpj'] == '') 
{
    $teste = 1;
}

if ($_SESSION['email'] == '') 
{
    $teste = 1;
}

if ($_SESSION['telefone'] == '') 
{
    $teste = 1;
}

## Atribui apenas para mostrar o nome do ultimo fornecedor cadastrado. 
$nome = $_SESSION['nome'];

## Cont... Gambiarra: Teste para saber se algum campo está sem digitar no formulário. 
if ($teste == 1) 
{
    ## Mostra na tela que é necessário preencher algum campo. 
    echo "<script> alert('Favor preencher todos os campos')</script>";
    include "index.php";
} else 
{ 
    ## Informo o nome do cadastro do fornecedor e destruo a sessao. 
    echo "<script> alert('Fornecedor: $nome cadastrado com sussesso')</script>";
    session_destroy();
    include "index.php";
}
?>