<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Responsive weboldal</title>
</head>
<body>
    <div class="header">
        <ul>
            <li><a href="#home">Főoldal</a></li>
            <li><a href="#about">Rólunk</a></li>
            <li class="logo">Company</li>
            <li><a href="#services">Szolgáltatások</a></li>
            <li><a href="#contact">Elérhetőségeink</a></li>
        </ul>
    </div>

    <div class="banner" id="home">
        <div class="banner-text">
            <h2>Nyaralás szervezés</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
                 <a href="#">Bővebben</a>
        </div>
    </div>
    <div class="about" id="about">
        <div class="section-header">
            <h2>Rólunk</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                 Quis, non rem molestiae doloremque accusantium similique 
                 perspiciatis ea suscipit deserunt blanditiis a ut temporibus 
                 tempora rerum vero tempore sit nemo omnis.</p>
        </div>

        <div class="about-content">
            <div class="single-about">
                <img src="" alt="">
                <div class="about-text">
                    <h2>Legjobb uticélok</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Rerum iure nihil dignissimos repellat omnis deleniti soluta saepe? 
                        Animi nesciunt, delectus vitae ab reiciendis iure accusantium laborum, 
                        vero, provident aspernatur nobis.
                    </p>
                    <a href="#">Bővebben</a>
                </div>
            </div>
        </div>
    </div>

    <div class="services" id="service">
        <div class="section-header">
            <h2>Látnivalók</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis impedit omnis alias nobis accusamus, minima perferendis non facere illum libero! Labore velit neque perspiciatis nulla omnis soluta non laudantium aspernatur!</p>
        </div> 

        <div class="service-content">
            <div class="single-service">
            <h2>Olümposz hegység</h2>
                <img src="olumposz.jpg" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus aliquam odit. Omnis maxime consequatur accusamus, optio quis modi, dolorum corrupti nemo iure, asperiores cumque natus quasi. Accusantium, quia architecto?
                </p>
            </div>

            <div class="single-service">
            <h2>Achilleon - Sissi kastély</h2>
                <img src="Sissi_kastély.jpg" alt="">
             
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus aliquam odit. Omnis maxime consequatur accusamus, optio quis modi, dolorum corrupti nemo iure, asperiores cumque natus quasi. Accusantium, quia architecto?
                </p>
            </div>
            <div class="single-service">
            <h2>Meteorák</h2>
                <img src="meteorak.jpg" alt="">
                
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus aliquam odit. Omnis maxime consequatur accusamus, optio quis modi, dolorum corrupti nemo iure, asperiores cumque natus quasi. Accusantium, quia architecto?
                </p>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="section-header">
            <h2>Kapcsoolat</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                 Quis, non rem molestiae doloremque accusantium similique 
                 perspiciatis ea suscipit deserunt blanditiis a ut temporibus 
                 tempora rerum vero tempore sit nemo omnis.</p>
        </div>

        <form action="db.php" method="post">
        <div class="single-contact">
           
            <input type="email" name="email"  class="form-control" placeholder="Írje be az e-mail címét">
            <input type="password" name="pwd"  class="form-control" placeholder="Írje be a jelszavát">
            <textarea cols="30" rows="10" name="szoveg"  class="form-control" placeholder="Kezdjen el gépelni"></textarea>               
           <button type="submit"  name="insert_btn" href="#">Elfogad</button>
        </div>
        </form>
    </div>

    <footer>
        <p>Coypright 2023</p>
    </footer>

   
    <sript src="https://code.jquery.com/jquery-3.6.0.min.js"></sript>
    <script>
        $(window).on("scroll", function(){
            if ($(window).scrollTop() > 50){
                $(".header").addClass("active");
            }else{
                $(".header").removeClass("active");
            }
        });
    </script>

</body>
</html>