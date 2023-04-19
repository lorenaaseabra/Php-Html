<?php
    function baskara($a, $b, $c){
        if($b == 0){
            return "ERROR";
        }   
        $delta = ($b*$b)-4*$a*$c;
        switch($delta){
            case "0":
                echo "two equal roots";
                break;
            case ">0":
                echo "two diferent roots";
                break;
            default:
                echo"impossible in the R set";
                break;
        }
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
                echo baskara(1,2,1);
        ?>
    </body>
</html>