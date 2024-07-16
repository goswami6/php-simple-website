<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php website</title>
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="./images/logo.png" alt="">
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create Prespectives with Virtual Reality</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur placeat pariatur, sequi modi error cumque aspernatur minima numquam autem rerum ea aliquam provident expedita ipsam magni dignissimos at dicta possimus.</p>
            <a href="#" class="main-btn">Contact</a>
        </div>
    </section>
    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-logo1.png" alt="">
                </div>
                <div class="f-text">
                    <h4>web developer</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-logo1.png" alt="">
                </div>
                <div class="f-text">
                    <h4>web developer</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-logo1.png" alt="">
                </div>
                <div class="f-text">
                    <h4>web developer</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>

    </section>
    <section class="about">
        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat sint, saepe praesentium unde veniam eius. Ad nemo atque iusto, necessitatibus tempore quasi obcaecati aliquam, ullam neque voluptatum porro minima non.</p>
            <button href="" class="main-btn">More</button>
        </div>
    </section>
    <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" id="" placeholder="Type Your Meaasge Here...."></textarea>
            <button class="main-btn contact-btn" type="submit">Sbmit</button>
        </form>
    </section>
</body>
</html>