<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 06 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>

    </head>
    <body>
        <div>
        <h1>Questão 06</h1>
        <p>Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".</p>
        <form method="post">
            <label for="num6-1">Digite um número: <input id="num6-1" type="text" size="30px" name="n6a" required></label>
            </br></br>
            <label for="num6-2">Digite um número: <input id="num6-2" type="text" size="30px" name="n6b" required></label>
            </br></br>
            <input class="input6" type="submit" name="btnresult" value="Calcular!">
        </form>
        <?php
            $numero6a = filter_input(INPUT_POST, "n6a");
            $numero6b = filter_input(INPUT_POST, "n6b");
            if($numero6a == "" && $numero6b == ""){
              echo "</br>Entre com os números";
            }else{
              if($numero6a < $numero6b){
                echo "</br>{$numero6a}  {$numero6b}";
              }elseif($numero6b < $numero6a){
                echo "</br>{$numero6b}  {$numero6a}";
              }else{
                echo "</br>Os números são iguais</br>{$numero6a}  {$numero6b}";
              }
            }
        ?>
        </div>
    </body>
</html>