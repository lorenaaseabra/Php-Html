<?php
    function grades($g1,$g2,$g3){
        $grades = array($g1,$g2,$g3);
        $percent = array("0.2","0.4","0.4");
        $totalGrade = ($grades[0]*$percent[0])+($grades[1]*$percent[1])+($grades[2]*$percent[2]);
        #alguma nota abaixo de 7.5, está na final
        #nota total abaixo de 9.5 esta na final 
        if(($grades[0] < 7.5) and ($totalGrade < 9.5)){
            echo "Be prepared. The exam will not be easy", "<br>";
        }
        if(($grades[1]  < 7.5) and ($totalGrade < 9.5)){
            echo "Be prepared. The exam will not be easy", "<br>";
        }
        if(($grades[2] < 7.5) and ($totalGrade < 9.5)){
            echo "Be prepared. The exam will not be easy", "<br>";
        }
        if(($grades[0] and $grades[1] and $grades[2] >= 7.5) and ($totalGrade >= 9.5)){
            echo "suas notas individuais sao: " . $grades[0] .  "," . $grades[1] . "," . $grades[2] . "!","<br>";
            echo "sua nota total:".$totalGrade;
        }
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            echo grades(1.0,10.0,10.0);
        ?>
    </body>
</html>