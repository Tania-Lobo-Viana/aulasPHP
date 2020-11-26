<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 03 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>
        
    </head>
    <body>
        <div>
        <h1>Questão 03</h1>
        <p>Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex:</p>
        <p>Entrada = 3.</p>
        <p>Processamento: (3 * 2) * 1.</p>
        <p>Saída: 6.</p>
        <form method="post">
            <label for="num3">Digite um número: <input id="num3" type="text" size="30px" name="n3" required></label>
            </br></br>
            <input class="input3" type="submit" name="btnresult" value="Calcular!">
        </form>
        <h2>Resposta: </h2>
        <?php
            $numero3 = filter_input(INPUT_POST, "n3");
            echo "Entrada: {$numero3}. </br></br>";
            if($numero3>0){
                $cont = $numero3;
                echo "Processamento: !{$numero3} = {$cont} ";
                for($i=($cont-1);$i>0;$i--){
                    $cont = $cont*$i;
                    echo "* {$i} ";
                }}
                else{
                    $cont = 0;
                }
                echo"</br></br>Saída: {$cont}";
            
        ?>
        </div>
    </body>
</html>