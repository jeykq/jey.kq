<?php include 'Backend Files/Verifyuser.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's company website</title>
        <link rel="stylesheet" type="text/css" href="CSS Files/LoginStyle.css">
        <link rel="stylesheet" type="text/css" href="CSS Files/MainStyle.css">
        <link rel="stylesheet" type="text/css" href="CSS Files/NavbarStyle.css">
    </head>
        <body>
            <header>
                <div class="navbar">
                <img src="images/logo.PNG" alt="logo" class="logo">
                    <nav>
                        <ul>
                            <li><a href="MainPage.php">Home</a></li>
                            <li><a href="MainPage.php#OurStory">Our Story</a></li>
                            <li><a href="MainPage.php#info">Contact Us</a></li>
                            <li><a href="LoginPage.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <br><br><br><br><br><br><br>
            <div class='container'>
                <h1>HR PORTAL LOGIN</h1>
                <form method="post">
                    <div class="text_field">
                       <input type="text" name="username" required><label>Username</label>
                       <span></span>
                    </div>
                    <div class="text_field">
                       <input type="password" name="password" required><label>Password</label>
                       <span></span>
                    </div>
                    <input type="submit" name="submit" value="LOGIN">
                    <div class="password"><a href="ForgotPassword.php" style="text-decoration: none">Forgot Password</a></div>
                </form>
            </div>
        </body>
</html>
