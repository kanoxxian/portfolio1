<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/4be6635281.js" crossorigin="anonymous"></script>
    <title>Sam Gray Portfolio</title>
</head>
<body>

    <nav class="mobile-nav">
        <ol>
            <li><a href="index.html#portfolio">My Portfolio</li></a>
            <li><a href="aboutme.html">About Me</li></a>
            <li><a href="codingexamples.html">Coding Examples</li></a>
            <li><a href="scs.html">SCS Scheme</li></a>
            <li><a href="index.html#contact-me">Contact Me</li></a>
            <div class="social-media">
                <li><i class="fa-brands fa-facebook-f"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-twitter"></i></li>
                <li><i class="fa-brands fa-linkedin-in"></i></li>
            </div>
        </ol>    
    </nav>

<div class="nav-container">
    <div class="nav-head">
        <h2 class="nav-header-text"><a href="index.html">S</a></h2>
        <ol>
            <li><a href="aboutme.html">About Me</li></a>
            <li><a href="index.html#portfolio">My Portfolio</li></a>
            <li><a href="codingexamples.html">Coding Examples</li></a>
            <li><a href="scs.html">SCS Scheme</li></a>
            <li><a href="index.html#contact-me">Contact Me</li></a>
            <div class="social-media">
                <li><i class="fa-brands fa-facebook-f"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-twitter"></i></li>
                <li><i class="fa-brands fa-linkedin-in"></i></li>
            </div>
        </ol>    
    </div> 
</div>

<div id="hero-image">
    <button class="hamburger">
        <div class="bar"></div>
    </button>
    <div class="text-container">
        <h1><span>Sam Gray</span></h1>
        <span class="description">Web Developer</span>
    </div>
</div>


<!-- <div class="leftmargin"> -->
    <div class="content-container" id="portfolio">
<div class="card-container">
    <div class="wrap">
         <div class="card">
            <a href="https://netmatters.sam-gray.netmatters-scs.co.uk/" target="_blank" class="gradient">
                <div class="img">
                    <img src="./img/netmatters-proj.jpg" alt="">
                </div>
            </a>
            <div class="text">
                <h4>METMATTERS HOME PAGE</h4>
                <p>Here I have re=created the Netmetters homepage, still WIP.</p>
            </div>
         </div>
         <div class="card">
            <a href="photoshop.html">
                <div class="img">
                    <img src="./img/photoshop.jpg" alt="">
                </div>
            </a>
            <div class="text">
                <h4>PHOTOSHOP PROJECTS</h4>
                <p>Something I've self taught, and I do in my spare time for fun.</p>
            </div>
         </div>
         <div class="card">
            <div class="img">
                <img src="./img/SQL.jpg" alt="">
            </div>
            <div class="text">
                <h4>SQL CHALLENGE</h4>
                <p>Here I was set a challenge to create a query that includes a sub-query.</p>
            </div>
         </div>
    </div>
</div>

<?php include './inc/validation.php';?>
    <div class="footer-container" id="contact-me">
        <div class="contactme">
            <h2>Get In Touch</h2>
            <p>If you would like to contact me, you can do so here:</p>
            <h3>07456944222<br> <a href="kanoxx.gray@gmail.com">Click here to send Email</a></h3>
            <p>Or, you can use the contact form and i'll get back to you as soon as i can</p>
            <div class="form-sent hidden">Form Sent Successfully!</div>
        </div>
        <form id="contact-form" method="POST">
    <div class="first-name">
        <input name="fname" type="text" id="fname">
        <div class="error-hint hidden">Your First Name is required.</div>
        <label for="fname"><i class="fa-solid fa-user"></i> First Name</label>
    </div>
    <div class="last-name">
        <input name="lname" type="text" id="lname" >
        <div class="error-hint hidden">Your Last Name is required.</div>
        <label for="lname"><i class="fa-solid fa-user"></i> Last Name</label>
    </div>
    <div class="email">
        <input name="email" type="email" id="email" >
        <div class="error-hint hidden">A valid email is required.</div>
        <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
    </div>
    <div class="subject">
        <input name="subject" type="text" id="subject" >
        <div class="error-hint hidden">Please add a Subject.</div>
        <label for="subject"><i class="fa-solid fa-note-sticky"></i> Subject</label>
    </div>
    <div class="message">
        <textarea name="message" id="message" cols="90" rows="10" ></textarea>
        <div class="error-hint hidden">Please add a Message.</div>
        <label for="message"><i class="fa-solid fa-message"></i> Message</label>
    </div>
    <button type="submit" name="submit"><i class="fa-solid fa-paper-plane"></i> Submit</button>
</form>
    </div>
<script src="js/ajax.js"></script>
<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/custom-particles.js"></script>
<script src="js/validation.js"></script>
<script src="js/hamburger.js"></script>
</body>
</html>