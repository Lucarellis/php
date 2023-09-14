<?php
    session_start();

    //se tem alguma busca digitada
    if(isset($_GET["busca"])){
        //armazena na variavel conteudo o valor de input
        $conteudo = $_GET["busca"];

        //se tiver itens "postagens"
        if(isset($_SESSION["postagens"])){
            echo "<ul>";
            foreach($_SESSION["postagens"] as $postagem){
                if(stripos($postagem, $conteudo) !== false){
                    echo "<li><strong> $postagem </strong></li>";
                }
            }
            echo "</ul>";
        }
    }
?>