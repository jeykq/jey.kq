<?php include 'Backend Files/sendEmail.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's company website</title>
        <link rel="stylesheet" type="text/css" href="CSS Files/MainStyle.css">
        <link rel="stylesheet" type="text/css" href="CSS Files/NavbarStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head> 
    <body>
        <header>
            <div class="navbar">
                <img src="images/logo.PNG" alt="logo" class="logo"/>
                <nav>
                    <ul>
                        <li><a href="#MainPage">Home</a></li>
                        <li><a href="#OurStory">Our Story</a></li>
                        <li><a href="#info">Contact Us</a></li>
                        <li><a href="LoginPage.php">Login</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="wallpaper">
            <div class="text" data-text="WE SEEK TO DEVELOP">WE SEEK TO DEVELOP</div>
            <div class="text2" data-text="PROTECT AND SECURE">PROTECT AND SECURE</div>
        </div>
        <div class="container"> 
            <div class="section">
                <div id="MainPage">
                    <div class="develop">
                        <img src="images/laptopicon.png" alt="DEVELOP"/>
                    </div>
                    <div class="protect">
                        <img src="images/cybersecurityicon.png" alt="PROTECT"/>
                    </div>
                    <div class="secure">
                        <img src="images/shield.png" alt="SECURE"/>
                    </div>
                    <div class="content">
                    <h2>COMPANY SERVICES</h2>
                    <p>We provide services for development of applications,</p>
                    <p>protection of your own applications and</p>
                    <p>providing security services for your very needs</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div id="OurStory">
                    <img src="images/book.png" alt=""/> 
                    <h2>OUR STORY</h2>
                    <p>Founded in 2021</p>
                    <p>We started off a 3 man team with big goals</p> 
                    <p>in mind.</p>
                    <p>With determination and goals set in place,</p>
                    <p>we managed to arrived to where</p>
                    <p>we are today.</p>
                </div>
            </div>
            <div class="contact-section">
                <div id="info">
                    <div><i class="fas fa-map-marker-alt"> 646124, Brightridge Road, Singapore</i></div>
                    <div><i class="fas fa-envelope"> nhjincorporation@gmail.com</i></div>
                    <div><i class="fas fa-phone"> +65 1629 8123</i></div>
                    <div><i class="fas fa-clock"> Monday to Friday, 9AM - 6PM</i></div>
                </div>
                <div id="form">
                    <h2>CONTACT US</h2>
                    <form class="content" method="post">
                        <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                        <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                        <br>
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        <br>
                        <input type="submit" name="submit" class="send-btn" value="Contact">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>