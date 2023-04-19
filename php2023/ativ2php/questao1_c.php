<?php

    header("Content-type: text/html; charset=UTF-8");
    
    $result = 0;

    if(isset($_POST['signal'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $signal = $_POST['signal'];
        $result = calculadora($num1,$num2,$signal);
    }

    function calculadora($num1,$num2,$signal){
        switch($signal){
            case '+':
                $result = $num1+$num2;
                break;
            case '-':
                $result =  $num1-$num2;
                break;
            case '*':
                $result = $num1*$num2;
                break;
            case '/':
                $result = $num1/$num2;
                break;
        }
        return $result;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora em PHP</title>
    </head>
    <body>
        <form action="questao1_c.php" method="POST"> 
            <p>Numero 1: <br><input type="number" name="num1"></p>
            <p>Numero 2: <br><input type="number" name="num2"></p>
            <p>Signal</p>
            <input type="radio" name="signal" value="+">Somar
            <input type="radio" name="signal" value="-">Subtrair
            <input type="radio" name="signal" value="*">Multiplicar
            <input type="radio" name="signal" value="/">Dividir
            <p><input type="submit" value="Submit"></p>
        </form>
        <h3>O resultado é: <?php echo $result; ?></h3>
    </body>
</html>