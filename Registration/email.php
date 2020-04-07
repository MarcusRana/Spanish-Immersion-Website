<?php
if(isset($_POST['submit'])) {
    $e = $_POST['e'];

    $mysqli = NEW MySQLi('localhost','root','', 'puentes');

    $e = $mysqli->real_escape_string($e);

    $vkey = md5(time().$e);
    echo $vkey;

    //need to add Username, Password and Date still. Write code in here following video
    //I created the SQL database table already, ill let you get creative with implementing that.


    //code to send email
    $to = $e;
    $subject = "Email Verification for Puentes!";
    $message = "Congradulations and thank you for signing up to puentes! You can verify your account <a href='http://localhost/In%20Construction/verify.php?vkey=$vkey'> Here! </a>";
    $headers = "From: puenteslearning@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";

    mail($to,$subject,$message,$headers);

    header('location:thankyou.php');
}
?>