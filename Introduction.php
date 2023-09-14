<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <!-- LOCALHOST - ABRIR PÁGINA -->

    <h1> Meu primeiro programa com PHP! </h1>   
    <!-- começando php -->
    <?php
        //imprimindo na tela
        echo " Hello World ";  
        echo "<br>"; 
        //variaveis
        $nome = "Jubiscreu";        //aspas duplas: TEXTO
        $idade = 50;               //sem aspas: NÚMERO    
        //se idade for maior que 18 anos
        //estrutura de condição if(se) else(se não)
        if($idade > 18){
            echo " <br> $nome Maior de 18 anos, com $idade anos <br> ";
        }else{
            echo " <br> $nome Menor de 18 anos, com $idade anos <br> ";
        }

        //estruturas de repetição - looping
        for($num = 1; $num <= 5; $num++){
            echo("<br> Contagem: $num");
        }
        
        echo "<br>";

        //estrutura de repetição while
        $contador = 1;
        while($contador <= 5){
            echo "<br> Contagem2: $contador";
            $contador++;    //contador = contador + 1
        }

        echo "<br>";

        //criando uma função
        function saudacao($nome){
            echo "<br> Olá, $nome";
        }
        saudacao("Gerisvaldo Pombal");

        //lista
        $cores = array("Vermelho", "Amarelo", "Azul");          echo "<br>";
        echo "<br> Sem for: $cores[0]"; 
        echo "<br> Sem for: $cores[1]";
        echo "<br> Sem for: $cores[2]";                         echo "<br>";

        for($n =0; $n < count($cores); $n++){
            echo "<br> Com for: $cores[$n]";
        }

    ?>
    <!-- terminando php -->

</body>
</html>