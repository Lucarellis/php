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
            <h1>Lista de Postagens</h1> 
            <a href="index.html" class="botao"> Fazer Nova Postagem?      </a><hr><br>
        </div>

        <div class="conteudo">  
            <?php
                $usuario = $_COOKIE["nome"];
                // echo "<u>Bem Vindo $usuario!</u>";

                session_start();
                if(isset($_SESSION["postagens"])){  //se existir uma lista de postagens

                    foreach ($_SESSION["postagens"] as $postagem){
                        echo '<div class="card">';           
                        echo "<strong> $usuario: </strong>";
                        echo "$postagem";
                        echo '</div>';
                    }
                }else{
                    //para o caso de não existir nenhuma postagem
                    echo "<p><strong>Nenhuma postagem encontrada :(</strong></p>";
                }
            ?>
        </div>
    </div>

</body>
</html>