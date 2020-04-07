<?php
    if(isset($_GET['vkey'])){
        $vkey = $_GET['vkey'];
        $mysqli = NEW MySQLi('localhost','root','','puentes');
        $resultSet = $mysqli->query("SELECT isVerified,Verification FROM logindata WHERE isVerified = 0 AND Verification = '$vkey' LIMIT 1");
        if($resultSet->num_rows == 1){
            $update = $mysqli->query("UPDATE logindata SET isVerified  = 1 WHERE Verification = '$vkey' LIMIT 1");
            if($update){
                echo "Your account has been verified!";
            }
            else{
                echo $error;
            }
        }else{
            echo "This account is invalid or already validated";
        }
    }
    else{
        die('Uh oh, looks like we got an error');
    }
?>