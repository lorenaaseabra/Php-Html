<?php
    function grades($g1,$g2,$g3){
        $totalGrade = ($g1*0.20)+($g2*0.40)+($g3*0.40);
        #alguma nota abaixo de 7.5, está na final
        #nota total abaixo de 9.5 esta na final 
        if(($g1 < 7.5) and ($totalGrade < 9.5)){
            echo "Be prepared. The exam will not be easy", "<br>";
        }
        if(($g2 < 7.5) and ($totalGrade < 9.5)){
            echo "Be prepared. The exam will not be easy", "<br>";
        }
        if(($g3 < 7.5) and ($totalGrade < 9.5)){
            echo "Be prepared. The exam will not be easy", "<br>";
        }
        if(($g1 and $g2 and $g3 >= 7.5) and ($totalGrade >= 9.5)){
            echo "suas notas individuais sao: " . $g1 .  "," . $g2 . "," . $g3 . "!","<br>";
            echo "sua nota total:".$totalGrade;
        }
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            echo grades(6.0,10.0,10.0);
        ?>
    </body>
</html>