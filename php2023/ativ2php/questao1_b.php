<?php

    header("Content-type: text/html; charset=UTF-8");

    function add($num1, $num2) :float {
        echo 'Adição';
        echo '<br>';
        return $num1+$num2;
    }
    function sub($num1,$num2) :float {
        echo 'Subtração';
        echo '<br>';
        return $num1-$num2;
    }
    function prod($num1,$num2) :float{
        echo 'Multiplicação';
        echo '<br>';
        return $num1*$num2;
    }
    function div($num1,$num2) :float{
        echo 'Divisão';
        echo '<br>';
        return $num1/$num2;
    }
    
?>

<!DOCTYPE html>
<html>
    <body>
        <?php

            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];

            switch($_GET['signal']){
                case '+':
                    $result = add($num1,$num2);
                    echo $result;
                    break;
                case '-':
                    $result = sub($num1,$num2);
                    echo $result;
                    break;
                case '*':
                    $result = prod($num1,$num2);
                    echo $result;
                    break;
                case '/':
                    $result = div($num1,$num2);
                    echo $result;
                    break;
            }
        ?>
       
    </body>
</html>