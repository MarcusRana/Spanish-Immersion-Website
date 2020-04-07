<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register Here</title>
    <?php
        require "../CSS/links.php";
    ?>
</head>
<?php
$error=NULL;
?>
<body>
    <?php
        require "../navbar/navbar-english.php";
    ?>
    <div class='Paragraph-Box'>
        <h1>Hello! You can register here:</h1>
        <form method="POST" action="../Registration/email.php" class='Registration-Form'>
            <input type="TEXT" name="u" required/>
            <input type="PASSWORD" name="p" required/>
            <input type="PASSWORD" name="p2" required/>
            <input type="EMAIL" name="e" required/>
            <input type="submit" name="submit">
        </form>
    </div>
    <?php

?>
    <?php
    echo $error
    ?>
</body>

</html> 