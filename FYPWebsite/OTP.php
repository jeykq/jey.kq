<?php include 'Backend Files/OTPVerification.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's company website</title>
        <link rel="stylesheet" type="text/css" href="CSS Files/OTPStyle.css">
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
                            <li><a href="MainPage.php#Info">Contact Us</a></li>
                            <li><a href="LoginPage.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <br><br><br><br><br><br><br>
            <div class='container'>
                <h1>VERIFY USER</h1>
                <form method="post">
                    <div class="text_field">
                       <input type="text" name="otp" required><label>OTP</label>
                       <span></span>
                    </div>
                    <input type="submit" name="submit" value="VERIFY OTP">
                    <div class="login"><a href="LoginPage.php" style="text-decoration: none">Back to login page</a></div>
                </form>
            </div>
        </body>
</html>
