<?php include 'Backend Files/findUser.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's company website</title>
        <link rel="stylesheet" type="text/css" href="CSS Files/ForgotPasswordStyle.css">
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
                <form action="" method="post">
                    <div class="text_field">
                       <input type="text" name="username" required><label>Username</label>
                       <span></span>
                    </div>
                    <input type="submit" name="submit" value="RESET">
                </form>
            </div>
        </body>
</html>