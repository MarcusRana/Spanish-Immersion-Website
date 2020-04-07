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
        <form method="POST" action="../Registration/register.php" class='Registration-Form'>
            <label for='u'>Username</label>
            <input type="TEXT" name="u" required/>
            <label for='p'>Password</label>
            <input type="PASSWORD" name="p" required/>
            <label for='p2'>Confirm Password</label>
            <input type="PASSWORD" name="p2" required/>
            <label for='e'>Email Address</label>
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