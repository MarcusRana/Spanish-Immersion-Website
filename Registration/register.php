<?php
if(isset($_POST['submit'])) {
    //get form data
    $u = $_POST['u'];
    $p = $_POST['p'];
    $p2 = $_POST['p2'];
    $e = $_POST['e'];

    if(strlen($u) < 5){
        $error = "<p>Your username must be at least 5 characters<p>";
    }elseif($p2 != $p){
        $error .= 'Your passwords do not match!';
    }else{

    //get SQL database
    $mysqli = NEW MySQLi('localhost','root','', 'puentes');

    //Sanitization
    $u = $mysqli->real_escape_string($u);
    $p = $mysqli->real_escape_string($p);
    $p2 = $mysqli->real_escape_string($p2);
    $e = $mysqli->real_escape_string($e);

    //generate vKey
    $vkey = md5(time().$e);
    
    //encrypt password
    $p = md5($p);

    $insert = $mysqli->query("INSERT INTO logindata(Username,Password,Email,Verification)VALUES('$u','$p','$e','$vkey')");

    //code to send email
    $to = $e;
    $subject = "Email Verification for Puentes!";
    $message = "Congradulations and thank you for signing up to puentes! You can verify your account <a href='http://localhost/Registration/verify.php?vkey=$vkey'> Here! </a>";
    $headers = "From: puenteslearning@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";

    mail($to,$subject,$message,$headers);

    header('location:thankyou.php');
    }
}
?>