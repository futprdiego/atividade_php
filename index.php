<!DOCTYPE html5>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>r-PHP</title>
        
        <!-- Arquivo CSS do Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
         
        <!-- Arquivo JAVA SCRIPT do Bootstrap e API Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Div barra navegação principal -->
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">r-PHP</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Início</a></li>
                        <li class="active"><a href="cadastro_fornecedor.php">Fornecedor</a></li>
                    </ul>                  
                </div>
            </div>
        </div>

        <!-- Div formulário bem vindo -->
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <h1><strong>Seja bem vindo ao <font color="#4682B4">r-PHP</font></strong></h1>
                <p>Atividade complementar - Sessão PHP. - Prof: Glaubert</p>
                <p>Aluno: Diego Reinoso Noronha</p>
                <p>Sistema de Informação 4A</p>
            </div>
        </div>

        <?php
        
        ## Se houver algum campo não preenchido o mesmo fara a condição do Modal. 
        if ($teste == 1) {
            ?> 
        <html> 
            <body>
                <!-- Botão para chamar o modal -->
                <div class="container">
                    <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
                        Recuperar informações?
                </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Entendendo $_SESSION</h4>
                            </div>
                            <div class="modal-body">
                                Sessão é um recurso do PHP que permite que você salve valores (variáveis) para serem usados ao longo da visita do usuário. 
                                Fique tranquilo, as suas informações não foram perdidas durante o cadastro do fornecedor. Mesmo que você clique em Sair as suas informações de cadastro serão salvas.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                <a href="cadastro_fornecedor.php"<button type="button" class="btn btn-primary">Continuar Cadastro</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </body>  
        </html> <?php
    }
    ?>
</body>
</html>