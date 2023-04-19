<?php
    function fatorial($num){
        $i = 1;
        $fact = $num;
        while($i < $num){
            $fact *= $i;
            $i++;
        }
        return $fact;
    }
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo fatorial(4);
        ?>
    </body>
</html>