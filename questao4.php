<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 04 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>
       
    </head>
    <body>
        <div>
        <h1>Questão 04</h1>
        <p>Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números.</p>
        <form method="post">
            <label for="num4-1">Digite um número: <input id="num4-1" type="text" size="30px" name="n4-1" required></label>
            </br></br>
            <label for="op">Escolha a operação a ser realizada:</br>
                <input type="radio" id="adicao" name="operacao" value="adicao">
                <label for="adicao">Adição</label></br>
                <input type="radio" id="subtracao" name="operacao" value="subtracao">
                <label for="subtracao">Subtração</label></br>
                <input type="radio" id="multiplicacao" name="operacao" value="multiplicacao">
                <label for="multiplicacao">Multiplicação</label></br>
                <input type="radio" id="divisao" name="operacao" value="divisao">
                <label for="divisao">Divisão</label></br>
            </label>
            </br></br>
            <label for="num4-2">Digite um número: <input id="num4-2" type="text" size="30px" name="n4-2" required></label>
            </br></br>
            <input class="input4" type="submit" name="btnresult" value="Calcular!">
        </form>
        <?php
            $numero4a = filter_input(INPUT_POST, "n4-1");
            $numero4b = filter_input(INPUT_POST, "n4-2");
            $operacao = filter_input(INPUT_POST, "operacao");
            if($numero4a && $numero4b){
                switch($operacao){
                    case "adicao":
                        $resultado4 = $numero4a + $numero4b;
                        echo "<h2>Resposta: {$resultado4}</h2>";
                    break;
                    case "subtracao":
                        $resultado4 = $numero4a - $numero4b;
                        echo "<h2>Resposta: {$resultado4}</h2>";
                    break;
                    case "multiplicacao":
                        $resultado4 = $numero4a * $numero4b;
                        echo "<h2>Resposta: {$resultado4}</h2>";
                    break;
                    case "divisao":
                        $resultado4 = $numero4a / $numero4b;
                        echo "<h2>Resposta: {$resultado4}</h2>";
                    break;
                }
            }  
        ?>
        </div>
    </body>
</html>