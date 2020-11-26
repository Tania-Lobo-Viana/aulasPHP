<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 02 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>
       
    </head>
    <body>
        <div>
        <h1>Questão 02</h1>
        <p>Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex:</p>
        <p>Entrada = 4.</p>
        <p>Saída = 4 X 0 = 0...4 X 10 = 40.</p>
        <form method="post">
            <label for="num2">Digite um número: <input id="num2" type="text" size="30px" name="n2" required></label>
            </br></br>
            <input class="input2" type="submit" name="btnresult" value="Calcular!">
        </form>
        <h2>Resposta: </h2>
        <?php
            $numero2 = filter_input(INPUT_POST, "n2");
            for($i = 0; $i <= 10; $i++){
                echo "{$numero2} X {$i} = " . ($numero2 * $i) . "<br>";
            }
        ?>
        </div>
    </body>
</html>