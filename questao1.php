<?php
$numero1 = filter_input(INPUT_POST, "n1");
if($numero1>0){
    $resultado1 = "Valor Positivo";
}elseif($numero1<0){
    $resultado1 = "Valor Negativo";
}else{
    $resultado1 = "Igual a zero";
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 01 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>
      
    </head>
    <body>
        <div>
        <h1>Questão 01</h1>
        <p>Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</p>
        
        <form method="post">
            <label for="num1">Digite um número: <input id="num1" type="text" size="30px" name="n1" required></label>
            </br></br>
            <input class="input1" type="submit" name="btnresult" value="Ver Resultado!">
        </form>
        <h2>Resposta: <?=$resultado1;?></h2>
        </div>
    </body>
</html>