<?PHP 
    header("Content-type: text/html; charset=ISO8859-1"); 
    
    $i = 0;

    $email = array("al5@ispgaya.pt"," al2@ispgaya.pt","al4@ispgaya.pt", " al1@ispgaya.pt","al3@ispgaya.pt");
    $email[$i][2] = intval ($email[$i][2]);


    bubbleSort($email);

    function bubbleSort ($vetor) {
        for ($i=0;$i<5;$i++) {
            //comparação
            for ($email[$i][2]=0;$email[$i][2]<4;$email[$i][2]++) {
                if ($vetor[$email[$i][2]+1]<=$vetor[$email[$i][2]]){
                    //troca de valores
                    $aux=$vetor[$email[$i][2]];
                    $vetor[$email[$i][2]]=$vetor[$email[$i][2]+1];
                    $vetor[$email[$i][2]+1]=$aux;
                
            
                }
            }
        $lista[$i]=$aux;
        }
        return $lista;
    }
        
    /*function orderArray($email){
        for($i=0;$i<4;$i++){
            if (intval($email[$i][2]) > intval($email[$i+1][2])){
                $email[$i+1][2] = $email[$i][2];
                $i++;
            }
        } 
        #return $email;

        for($i=0;$i<4;$i++) {
            echo("$email[$i] <br>");
        }
    } */

?>

<!DOCTYPE html>
<html>
<body>
    <?php
        for($i = 0; $i <5; $i++){

            echo bubbleSort($email[$i][2]);
        }
    ?>
</body>
</html>