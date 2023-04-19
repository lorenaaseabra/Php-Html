<?PHP 
    header("Content-type: text/html; charset=ISO8859-1"); 
    
  
    $credentials = array(
        array ("al1@ispgaya.pt"," al2@ispgaya.pt","al4@ispgaya.pt"),
        array ("12345", "54321", "01010"),
    );
    
    $email = $_GET['email'];
    $password = $_GET['password'];

    $a = 0;

    for ($i = 0; $i < 4; $i++){
        if($email == $credentials[0][$i]){
            if($password == $credentials[1][$i]){
                echo 'you are logged in!';
                $a = 1;
            }
        }
    }
    if($a != 1){
        echo 'fail! try again!';
    }
    
?>