<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register Here</title>
    <?php
        require "links.php";
    ?>
</head>
<?php
$error=NULL;
?>
<body>
    <?php
        require "..\Construction\\navbar\\navbar-english.php";
    ?>
    <form method="POST" action="http://localhost/In%20Construction/email.php">
        <input type="EMAIL" name="e" required/>
        <input type="submit" name="submit">
    </form>
    <?php

?>
    <?php
    echo $error
    ?>
</body>

</html> 