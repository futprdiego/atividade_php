<?php
/**
 * Aluno: Diego Reinoso Noronha. 
 * Atividade Complementar PHP.
 * Data: 09/09/2014
 */
## Iniciando a sessao
session_start();

## Incluido as informações da classe sessao_fornecedor
include "./classes/fornecedor.php";

## Instanciando a classe sessao_fornecedor com a variável global $_SESSION a variável .
$dados = new fornecedor($_SESSION);
?>

<!DOCTYPE html5>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro fornecedor</title>
        
        <!-- Arquivo CSS do Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- Arquivo JAVA SCRIPT do Bootstrap e API Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- Formulário cadastro fornecedor -->
        <div class="form-horizontal col-lg-offset-3 col-md-5" >
            <form role="form" name="frm_fornecedor" action="sessao_cadastro_fornecedor.php" method="POST"  >
                <legend><h2><strong>Cadastrar Fornecedor</strong></h2></legend>
                <div class="form-group" >
                    <label>Fantasia</label>
                    <input type="text" name="nome" class="form-control" placeholder="nome fornecedor" value="<?php echo $dados->nome; ?>">
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" placeholder="endereco completo" value="<?php echo $dados->endereco; ?>">
                </div>
                <div class="form-group">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" class="form-control" placeholder="00.000.000/0000-00" value="<?php echo $dados->cnpj; ?>">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control" placeholder="exemplo@gmail.com" value="<?php echo $dados->email; ?>">
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" placeholder="00-0000-0000" value="<?php echo $dados->telefone; ?>">
                </div>
                <button type="submit" class="btn btn-default" name="btn_enviar">Salvar</button>
            </form>
        </div> 
    </body>
</html>
