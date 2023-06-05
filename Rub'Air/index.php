<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('_db/connexionDB.php');

$var = "Bonjour le monde";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<<?php 
require_once('_menu/menu.php');
?>

    <!-- acceuil section -->
    <section id="home">
        <h2>Nous suivre</h2>
        <h4>Voyagez en sécurité</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit accusantium consectetur in voluptates neque.</p>
        <p>molestiae illum eaque praesentium esse. Quos iusto.</p>
        <a href="#" class="btn-reservation home-btn">Réserver maintenant</a>
        <div class="find_trip">
            <form action="">
                <div>
                    <label>Pays</label>
                    <input type="text" placeholder="Entrez un Pays">
                </div>
                <div>
                    <label>Ville</label>
                    <input type="text" placeholder="Entrez une ville">
                </div>
                <div>
                    <label>Région</label>
                    <input type="text" placeholder="Entrez une région">
                </div>
                <input type="submit" value="voir">
            </form>
        </div>
    </section>

    <!-- A propos section -->
    <section id="a-propos">
        <h1 class="title">À propos</h1>
        <div class="img-desc">
           <div class="left">
                <video src="images/video.mp4" autoplay loop></video>
           </div>
            <div class="right">
                <h3>Nous voyageons pour chercher d'autres états, d'autres vies, d'autres, âmes.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsam officiis atque, doloremque eos reprehenderit deleniti ipsum dicta aliquid .</p>
                <a href="#">Lire Plus</a>
            </div>
        </div>
        
    </section>

    <!-- section destination -->
    <section id="popular-destination">
        <h1 class="title">Destinations populaires</h1>
        <div class="content">
            <!-- box -->
            <div class="box">
                <img src="images/paris.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Paris</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/moscou.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Moscou</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/miami.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Miami</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="images/los-angeles.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Los-Angeles</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="images/rome.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Rome</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="images/tokio.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Tokyo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!-- box -->
        </div>
    </section>

    <!--  contact section -->
    <section id="contact">
        <h1 class="title">Contact</h1>
        <form action="">
            <div class="left-right">
                <div class="left">
                    <label>Nom Complet</label>
                    <input type="text">
                    <label>Objet</label>
                    <input type="text">
                    <label>Email</label>
                    <input type="text">
                    <label>Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="right">
                    <label>Numéro</label>
                    <input type="text">
                    <label>Date</label>
                    <input type="text">
                    <label>Autres Details</label>
                    <input type="text">
                    <label>Adresse</label>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.292292615509614!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1647531560805!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <button>Envoyer</button>
        </form>
    </section>

    <footer>
        
    </footer>


    <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
             toggle_menu.classList.toggle('active');
             menu.classList.toggle('responsive')
        }
    </script>


    <h1><?php echo $var ?></h1>

</body>
</html>






