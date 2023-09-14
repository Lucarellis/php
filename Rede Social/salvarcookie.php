<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Postagens </title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<br><br>
    <div class="painel">        
        <div class="cabecalho">
            <h1> Definição de Cookie </h1> 
            <a href="index.html" class="botao"> Fazer Nova Postagem? </a><hr><br>
        </div>

        <div class="conteudo">  
            <?php
                //Verifica se requisição é tipo POST
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    //pega do Formulário o usuário digitado
                    $nome = $_POST["usuario"];
                    //criar cookie
                    setcookie("nome", $nome, time() + 86400 * 30, "/");

                    echo "<strong>Cookie de nome de usário definido com sucesso! <br>";
                    echo "Nome de Usuário: $nome. </strong>";

                }else{
                    echo "Erro: Requisição Inválida";
                }
            ?>
        </div>

        <div class="rodape">

        </div>
    </div>

</body>
</html>