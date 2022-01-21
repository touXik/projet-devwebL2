<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="images/png" href="images/logo1.png"> 
    <title>Nature emoi- Boutique de plantes</title>


</head>

<body>

<!------------------------------------------------------------------------------------------------------>
    <section id="home" class="home-container">
        <header id="header" class="header">
            <img src="images/logo.png" alt="Nature Emoi" class="logo">
            <ul class="nav-links">
                <li>
                    <a href="#" data-text="Accueil">Accueil</a>
                </li>
                <li>
                    <a href="#best-sales" data-text="Nos ventes">Nos ventes</a>
                </li>
                <li>
                    <a href="#plants" data-text="Nos plantes">Nos plantes</a>
                </li>
                 <li>
                    <a href="#contact" data-text="contact">Contact</a>
                </li>
                 <li>
                    <a target="_blank" href="html/login.html" data-text="se connecter">Se connecter</a>
                </li>
                 <li>
                    <a target="_blank" href="html/register.html" data-text="s'inscrire">S'inscrire</a>
                </li>
            </ul>
            <div class="burger-container">
                <div class="burger"></div>
            </div>
        </header>
        <div class="landing">
            <h1 class="big-title">Nature Emoi,meilleur que le chocolat.</h1>
            <a href="#delivery" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>
<!------------------------------------------------------------------------------------------------------>
   <section id="delivery" class="delivery-container">
        <div class="container">
          <div class="slides">
            <img src="images/slides/retrait.png"  >
        </div>

        <div class="slides">
            <img src="images/slides/livraison.png"  >
        </div>
        <div class="slides">
            <img src="images/slides/service.png"  >
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</section>

<!------------------------------------------------------------------------------------------------------>

    <section id="best-sales" class="best-sales-container">
        <h1 class="section-title">Meilleures ventes</h1>
        <div class="best-plants">
            <a href="#" class="plant-box no-grid plant1">
                <div class="plant-bio">
                    <h1 class="plant-name">schefflera</h1>
                    <h3 class="plant-price">2855,00DZD</h3>
                </div>
            </a>
            <a href="#" class="plant-box no-grid plant2">
                <div class="plant-bio">
                    <h1 class="plant-name">Ficus</h1>
                    <h3 class="plant-price">1805,50DZD</h3>
                </div>
            </a>
            <a href="#" class="plant-box no-grid plant3">
                <div class="plant-bio">
                    <h1 class="plant-name">Scindapsus</h1>
                    <h3 class="plant-price">3220,33DZD</h3>
                </div>
            </a>
            <a href="#" class="plant-box no-grid plant4">
                <div class="plant-bio">
                    <h1 class="plant-name">Dieffenbachia</h1>
                    <h3 class="plant-price">2248,24DZD</h3>
                </div>
            </a>
        </div>
    </section>

<!------------------------------------------------------------------------------------------------------>
    <section id="plants" class="plants-container">
        <h1 class="section-title">Nos plantes</h1>
        <div class="grid-plants">
            <a href="#" class="plant-box grid plant-grid1">
                <div class="plant-bio">
                    <h1 class="plant-name">Brindille</h1>
                    <h3 class="plant-price">3520,00DZD</h3>
                </div>
            </a>
            <a href="#" class="plant-box grid plant-grid2">
                <div class="plant-bio">
                    <h1 class="plant-name">Indoor</h1>
                    <h3 class="plant-price">4350,00DZD</h3>
                </div>
            </a>
             <a href="#" class="plant-box grid plant-grid3">
                <div class="plant-bio">
                    <h1 class="plant-name">Aglaonéma</h1>
                    <h3 class="plant-price">4015,02DZD</h3>
                </div> 
            </a> 
            <a href="#" class="plant-box grid plant-grid4">
                <div class="plant-bio">
                    <h1 class="plant-name">Jassmine</h1>
                    <h3 class="plant-price">1600,59DZD</h3>
                </div>
            </a>
            <a href="#" class="plant-box grid plant-grid5">
                <div class="plant-bio">
                    <h1 class="plant-name">Dieffenbachia</h1>
                    <h3 class="plant-price">2248,24DZD</h3>
                </div>
            </a>
            <a href="#" class="plant-box grid plant-grid6">
                <div class="plant-bio">
                    <h1 class="plant-name">Areca</h1>
                    <h3 class="plant-price">3203,99DZD</h3>
                </div>
            </a>
        </div>
    </section>
 
<!------------------------------------------------------------------------------------------------------>
    <section  id="bouton_partage">
        <div class="share">
        <ol>
            <li><a target="-_blank" href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a></li> 
            <li><a target="_blank" href="https://facebook.com"><i class="fab fa-facebook fa-2x"></i></a></li>
            <li><a target="_blank" href="https://twitter.com"><i class="fab fa-twitter fa-2x"></i></a></li>
        </ol>
        <div class="toggle"></div>
    </div>

    </section>
<!------------------------------------------------------------------------------------------------------>
     <form id="contact"  action="../back/contact.php" method="post">
      <h1>Contactez-nous</h1>
      <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche">
          <div class="groupe">
            <label>Votre Nom et Prénom</label>
            <input type="text" name="Nom" autocomplete="off" required />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Votre adresse e-mail</label>
            <input type="text" name="email" autocomplete="off" required />
            <i class="fas fa-envelope"></i>
          </div>
         <div class="groupe">
            <label>Votre téléphone</label>
            <input type="text" name="num" autocomplete="off" required />
            <i class="fas fa-mobile"></i>
          </div>
        </div> 

        <div class="droite">
          <div class="groupe">
            <label>Message</label>
            <textarea name="message" placeholder="Saisissez ici..."></textarea>
          </div>
        </div>
      </div>

      <div class="pied-formulaire" align="center">
        <button type="submit" name="submit">Envoyer le message</button>
      </div>
    </form>


<!------------------------------------------------------------------------------------------------------>
       <footer id="footer" class="footer"> 
        <span class="copyrights">&copy; 2021 - Nature Emoi</span>
        <a href="#" class="conditions">Condition générales de vente</a>
    </footer>


<!------------------------------------------------------------------------------------------------------>
   
    <script type="text/javascript" src="JS/js.js"></script>
   <script src="https://kit.fontawesome.com/9f75563516.js" crossorigin="anonymous"></script>

 

</body>

</html> 