<?php
if(isset($_POST['submit'])){
    echo "yes";
    $mysqli = NEW MySQLi('localhost','root','', 'puentes');

    $u = $mysqli->real_escape_string(($_POST['u']));
    $p = $mysqli->real_escape_string(($_POST['p']));
    $p = md5($p);

    $resultSet = $mysqli->query("SELECT * FROM logindata WHERE Username = '$u' AND Password = '$p' LIMIT 1");

    if($resultSet->num_rows != 0){
        echo "yes2";
        $row = $resultSet->fetch_assoc();
        $verified = $row['isVerified'];
        $date = $row['DateJoined'];
        $email= $row['Email'];
        $date = strtotime($date);
        $date = date('M d Y,$date');
        if($resultSet->num_rows != 0){
            if($verified == 1){
                header('location:../Index/index.php');
            }else{
                echo "Sorry! This account hasnt been verified! '$email' '$date'";
            }        
        }else{
            $error = "The username or password is incorrect";
        }
        
    }else{
        echo $p;
    }
}
?>