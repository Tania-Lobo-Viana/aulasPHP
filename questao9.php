<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 09 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>

    </head>
    <body>
        <div>
        <h1>Questão 09</h1>
        <p>Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma:</p>
        <p>Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.</p>
        <form method="post">
            <label for="nome">Digite o nome: <input id="nome" type="text" size="30px" name="name" required></label>
            </br></br>
            <label for="idade">Digite a idade: <input id="idade" type="text" size="30px" name="years_old" required></label>
            </br></br>
            <input class="input9" type="submit" name="btnresult" value="Calcular!">
        </form>
        <?php
            $name = filter_input(INPUT_POST, "name");
            $yearsold = filter_input(INPUT_POST, "years_old");
            if($name == "" && $yearsold == ""){
              echo "</br>Entre com os dados";
            }else{
                if($yearsold>18){
                    echo "</br>{$name} é maior que 18 e tem {$yearsold} anos";
                }elseif($yearsold<18){
                    echo "</br>{$name} não é maior de 18 e tem {$yearsold} anos";
                }else{
                    echo "</br> {$name} tem {$yearsold} anos";
                }
            }
        ?>
        </div>
    </body>
</html>