<?php
function baskara($a, $b, $c){
    if($b == 0){
        return "ERROR";
    }
    else{
        $delta = ($b*$b)-4*$a*$c;
        if($delta == 0){
            $baskara = "two equal roots";
        }
        elseif($delta > 0){
            $baskara = "two diferent roots";
        }
        else{
            $baskara = "impossible in the R set";
        }
    }
    return $baskara;
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