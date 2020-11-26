<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 10 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>

    </head>
    <body>
        <div>
        <h1>Questão 10</h1>
        <p>Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</p>
        <form method="post">
            <label for="num10">Digite um número: <input id="num10" type="text" size="30px" name="n10" required></label>
            </br></br>
            <input class="input10" type="submit" name="btnresult" value="Calcular!">
        </form>
        <?php
            $mes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
            $numero10 = filter_input(INPUT_POST, "n10");
            if($numero10 == ""){
                echo "</br>Entre com os dados!";
            }elseif($numero10>0 && $numero10<13 ){
                for($i=0;$i<12;$i++){
                    if($numero10-1 == $i){
                        $cont = $i;
                    }
                }
                echo "</br>{$mes[$cont]}";
            }else{
                echo "</br>Número inválido!";
            }
        ?>
        </div>
    </body>
</html>