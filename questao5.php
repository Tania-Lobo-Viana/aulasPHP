<!doctype html>
<html lang="pt-br">
    <head>
        <title>Questão 05 - lista PHP </title>
        <meta charset="utf-8"/>
        <meta content="viewport" name="weigth=device-weigth, initial-scale=1.0"/>

    </head>
    <body>
        <div>
        <h1>Questão 05</h1>
        <p>Solicite a entrada de um número e descubra se um número digitado é par ou ímpar.</p>
        <form method="post">
            <label for="num5">Digite um número: <input id="num5" type="text" size="30px" name="n5" required></label>
            </br></br>
            <input class="input4" type="submit" name="btnresult" value="Calcular!">
        </form>
        <?php
            $numero5 = filter_input(INPUT_POST, "n5");
            if($numero5 == ""){
                echo "Digite um número";
            }else{
                if ($numero5%2==0){
                    echo "Par";
                }else{
                    echo "Ímpar";
                }
            }
        ?>
        </div>
    </body>
</html>