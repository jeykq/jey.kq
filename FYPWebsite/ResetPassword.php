<?php include 'Backend Files/ResetPass.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's company website</title>
        <link rel="stylesheet" type="text/css" href="CSS Files/ResetPasswordStyle.css">
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
                <h1>RESET PASSWORD</h1>
                <form method="post">
                    <div class="text_field">
                       <input type="text" name="password" required><label>New Password</label>
                       <span></span>
                    </div>
                    <div class="text_field">
                       <input type="text" name="password1" required><label>Retype New Password</label>
                       <span></span>
                    </div>
                    <input type="submit" name="submit" value="RESET">
                </form>
            </div>
        </body>
</html>
