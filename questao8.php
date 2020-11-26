<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 08 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>

    </head>
    <body>
        <div>
        <h1>Questão 08</h1>
        <p>Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.</p>
        <p>Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]</p>
        <form method="post">
            <label for="num8-1">Digite um número: <input id="num8-1" type="text" size="30px" name="n8a" required></label>
            </br></br>
            <label for="num8-2">Digite um número: <input id="num8-2" type="text" size="30px" name="n8b" required></label>
            </br></br>
            <label for="num8-3">Digite um número: <input id="num8-3" type="text" size="30px" name="n8c" required></label>
            </br></br>
            <input class="input8" type="submit" name="btnresult" value="Calcular!">
        </form>
        <?php
            $numero8[0] = filter_input(INPUT_POST, "n8a");
            $numero8[1] = filter_input(INPUT_POST, "n8b");
            $numero8[2] = filter_input(INPUT_POST, "n8b");
            if($numero8[0] == "" && $numero8[1] == "" && $numero8[2] == ""){
              echo "</br>Entre com os números";
            }else{
                $total = 0;
             for($i=0;$i<3;$i++){
                 $total = $total + $numero8[$i];
             }
             $resultado8 = $total/3;
             if($resultado8>=6){
                echo "</br>N1 = {$numero8[0]} | N2 = {$numero8[1]} | N3 = {$numero8[2]} | MG = {$resultado8} | Aprovado";
             }else{
                echo "</br>N1 = {$numero8[0]} | N2 = {$numero8[1]} | N3 = {$numero8[2]} | MG = {$resultado8} | Reprovado";
             }
            }
        ?>
        </div>
    </body>
</html>