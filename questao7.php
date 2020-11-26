<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 07 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>

    </head>
    <body>
        <div>
        <h1>Questão 07</h1>
        <p>Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.</p>
        <form method="post">
            <label for="num7-1">Digite um número: <input id="num7-1" type="text" size="30px" name="n7a" required></label>
            </br></br>
            <label for="num7-2">Digite um número: <input id="num7-2" type="text" size="30px" name="n7b" required></label>
            </br></br>
            <input class="input7" type="submit" name="btnresult" value="Calcular!">
        </form>
        <?php
            $numero7a = filter_input(INPUT_POST, "n7a");
            $numero7b = filter_input(INPUT_POST, "n7b");
            if($numero7a == "" && $numero7b == ""){
              echo "</br>Entre com os números";
            }else{
              if($numero7a < $numero7b){
                echo "</br>{$numero7a} menor que {$numero7b}";
              }elseif($numero7a > $numero7b){
                echo "</br>{$numero7a} maior que {$numero7b}";
              }else{
                echo "</br>{$numero7a} é igual a {$numero7b}</br>Portanto, os números informados são iguais";
              }
            }
        ?>
        </div>
    </body>
</html>