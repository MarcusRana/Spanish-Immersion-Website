<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Puentes-Contact Us</title>
    <?php
        require "../CSS/links.php"
    ?>
</head>

<body>
    <br>
    <br>
    <div class="container">
    <?php
        require "..\\navbar\\navbar-english.php";
    ?>



        <br />
        <div class='Paragraph-Box'>
            <h1 id="HeaderOne">Contacta Nos!</h1>
            <p>Ponga su nombre aqui y su problema y automaticamente enviaria un correo a nosotros</p>
            <form action="contactform.php" method="post">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <textarea name="message" rows="10" cols="100"></textarea>
                <br>
                <input type="submit" name="submit">
            </form>
        </div>
        <br/>
    </div>
    <br/>
    <footer>
        <div>
            <ul class='websites-footer'>
                <li>
                    <a href='https://www.facebook.com/marcus.rana'>

                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href='mailto:marcusrana01@gmail.com'>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="far fa-envelope"></i>
                    </a>
                </li>
                <li>
                    <a href='https://www.instagram.com/puentes_team/?hl=bn'>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href='https://twitter.com/PuentesTeam'>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</body>


</html>