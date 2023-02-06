<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Home - HardingPeel</title>
</head>

<body>
    <div id="popup">

        <button id="close-button" onclick="closePopup()">X</button>

        <div id="popup-content">
            <h1 id="popupcontenttitle">Thank you for your email!</h1>
            <p>We will get back to you as-soon-as-possible!</p>
        </div>
    </div>

    <form id="formid" action="php/sendmail.php" method="post">
        <a id="close-button-form" onclick="closeform()">X</a>
        <label for="name">Business name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5"></textarea>
        <input type="checkbox" id="terms" name="terms" value="terms">
        <label for="terms"> Subscribe to our mailing list </label><br><br>
        <input id="inputid" type="submit" value="Send">
    </form>

    <div class="container">
    <!-- <img id="firstimage" src="images/market.jpg"></img> -->
        <section id="stop0">
            
            <nav id="mainnav">
                <img id="logo" src="images/f.png">

                <h1 id="navtitle">HardingPeel</h1>

                <div onclick="hamburgerclick()" id="hamburger">
                    <div class="lines" id="line1"></div>
                    <div class="lines" id="line3"></div>
                </div>

                <button onclick="button5function()" id="freecall">Book A Free Strategy Call</button>

                <!-- <div id="menuexpandcontent">
                    <a onclick="button1function()" id="button1" class="mainbuttons">Home</a>
                    <a onclick="button2function()" id="button2" class="mainbuttons">Content</a>
                    <a onclick="button3function()" id="button3" class="mainbuttons">Philosophy</a>
                    <a onclick="button4function()" id="button4" class="mainbuttons">Contact</a>
                    <a onclick="button5function()" id="button5" class="mainbuttons">Quick email</a>
                </div> -->
                <hr>
            </nav>

            <img class="slide-in-text" id="logomain" src="images/f.png">
            <h1 class="slide-in-text" id="maincontenttitle">Create Meaningful Change</h1>
            
            <p class="slide-in-text" id="maincontentdescription">HardingPeel is a <span id="orangetext">Digital Marketing Agency.</span><br>We help scale your business by optimising PPC Advertising Campaigns.</p>

            <a href="https://www.instagram.com/hardingpeelmarketing" target="_blank">
                <img id="instagramicon" src="images/insta.png">
            </a>

            <a href="https://www.facebook.com/hardingpeelmarketing" target="_blank">
            <img id="facebookicon" src="images/facebook.png">
        </a>

            <a href="#stop1" id="movetobottom">▼</a>
        </section>

        <section id="stop1">
            <!-- <nav id="stop1nav">
                <!-- <h1 id="stop1title">Offers</h1>
            </nav>
            

            <img id="laptopimage" src="images/laptop.jpg"> -->

        <h1 class="slide-in-text" id="secondcontenttitle">The HP Approach</h1>
        <h2>How We Operate</h2>

        <ul id="ticklist">
            <li><span  class="tick">&#10003;</span> We use your brand history and previous ad statistics to determine what ad strategies will work best.</li>
            <li><span class="tick">&#10003;</span> We optimise ad campaigns based on advanced analysis and testing.</li>
            <li><span class="tick">&#10003;</span> We offer ad creative and ad copy.</li>
            <li><span class="tick">&#10003;</span> We always strive to achieve a breathtaking ROI for our clients.</li>
        </ul>
        <ul id="xlist">
            <li><span class="x">&#10007;</span> We do not offer Google Ads, Email marketing or SEO optimisation.</li>
            <li><span class="x">&#10007;</span> We do not charge an onboarding fee.</li>
            <li><span class="x">&#10007;</span> We do not offer free trials.</li>
            <li><span class="x">&#10007;</span> We do not settle for average results.</li>
        </ul>
        </section>

        <section id="stop2">
            <!-- <nav id="stop2nav">
                <!-- <h1 id="stop2title">Philosophy</h1> -->
            <!-- </nav>
         -->
         <!-- <img id="poolimage" src="images/pool.jpg"> -->
        </section>

        <section id="stop3">
            <!-- <nav id="stop3nav">
                <!-- <h1 id="stop3title">Contact</h1> -->
            <!-- </nav> -->
        </section>
    </div>

    <!-- <footer class="slide-in-text">Website1 © 2022</footer> -->
    <script src="scripts/index.js"></script>
</body>

</html>