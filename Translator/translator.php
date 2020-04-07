<!doctype html>
<html>

<head>
    <title>Test</title>
    <?php
        require "../CSS/links.php"
    ?>
</head>

<body>
    <?php
        include('init.php');
        echo 'hello world';
    ?>
        <h1 id="HeaderOne">Contacta Nos!</h1>
        <p>Ponga su nombre aqui y su problema y automaticamente enviaria un correo a nosotros</p>
        <form onsubmit='testing.js' method=post>
            <br>
            <textarea id=OriginalText rows="10" cols="100" value='Val'></textarea>
            <br>
            <button type='button' id='button'>HEELLLOOO</button>
            <p id='SampleText'>yers</p>
        </form>
        <script src='testing.js'></script>
</body>

</html>