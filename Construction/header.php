<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            <nav>
                <a href="#">
                    <img src="Images\Puentes-02.jpeg" alt="logo">
                </a>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">support</a></li>
                    <li><a href="#">grammar</a></li>
                    <li><a href="#">register</a></li>
                </ul>
                <div>
                    <form action="includes/login.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>  
                    </form>  
                    <a href="register.php">Register</a>
                    <form action="includes/logout.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>  
                    </form>
                </div>  
            </nav>
            
        </header>

    </body>

</html>