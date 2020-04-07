<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register Here</title>
</head>
<?php
$error=NULL;
?>
<body>
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