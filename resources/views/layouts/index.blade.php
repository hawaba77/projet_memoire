<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <!-- END Bootstrap -->

    <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- END additional CSS -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site</title>

    <style>
        .card-img-top{
            height: 15rem !important;
        }
        .text-decor-none{
            text-decoration: none;
            color: #000;
        }
        .text-decor-none:hover{
            color: #000;
        }
        ul li{
            list-style-type: none;
        }
        .bg-nav-home{
            background-color: #be4d40 !important;
        }
        .dropdown-menu {
          background-color: #be4d40 !important;
        }
         h5, h2{
            color: #be4d40;
        }
        .card-box-roud{
          border-radius: 50%;
          width: 250px;
          height: 150px;
        }
        .border-none-card{
          border: none;
        }
    </style>
</head>

<body>
    <!--   Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-nav-home">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">INVEST GROUP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#à propos de nous">à propos de Nous</a>
                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#porteur_de_projet">Porteurs de Projet</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contributeurs">Contributeurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                   
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos Projets
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Humanitaire</a></li>
                            <li><a class="dropdown-item" href="#">Business</a></li>
                            <li><a class="dropdown-item" href="#">Sante</a></li>
                            <li><a class="dropdown-item" href="#">Education</a></li>
                            <li><a class="dropdown-item" href="#">Sport</a></li>
                            <li><a class="dropdown-item" href="#">Agriculture</a></li>
                            <li><a class="dropdown-item" href="#">Religion</a></li>
                            <li><a class="dropdown-item" href="#">Developpemnt</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            
                            <li><a class="dropdown-item" href="#">Developpement Web</a></li>

                        </ul>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Email</a></li>
                            <li><a class="dropdown-item" href="#">services client</a></li>
                            <li><a class="dropdown-item" href="#">Des questions</a></li>
                            <li><a class="dropdown-item" href="#">notre Adresse</a></li>
                            </ul>
                    </li>

                        <div class="collapse navbar-collapse" id="navbarNav">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

                        <ul class="navbar-nav ml-auto">
                            @guest
                            <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                            </li>
                            @endguest
                        
                
                        
                    
                </ul>
            
            </div>
        </div>
    </nav>
    <!--  End Navbar-->
    <!--  Header -->
    <div class="container-fluid p-0">

    
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('img/finance 1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>INVEST-GROUP</h5>
        <p>DECOUVRER LE CROWD-FUNDING A SON SENS</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{url('img/logo1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DECOUVRIR LES PROJETS</h5>
        <p>Chez INVEST GROUP un projet n'a de sens que lorsqu'il se conjugue avec le réalisme, l'économie et l'humanitaire ETC. .</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{url('img/dev-informatique.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>AVEC ENGAGEMENTS</h5>
        <p>Nous vous accompagnons partout En plus d’investir dans la thématique que vous souhaitez soutenir, vous participerez au développement de magnifiques projets.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

    <!-- End Header -->
    <!-- Sidenav & Body & Sidbar  -->
    <div class="container">
    <div class="row mt-4">
    <!--
        <div class="col-md-6">
            <img src="{{url('img/exemple.jpg')}}" alt="" class="d-block w-100">
        </div>
        <div class="col-md-6">
        <h2>Qui Sommes Nous</h2>
            <p>sunu invest communi fund est une application de financement participatif qui donne une possibilité de 
             participer au investissement(Don) d'un projet particulier, entrepreneur, social ou proffesionel </p>
        </div>
         -->
         
        
                <div class="container p-4 pb-0">
                    <section id="home">
                        <!-- Contenu de la section home -->
                        <h2 class="text-center">
                    <div class="mt-3">
                    Qui nous sommes 
                        </h2>
                        <div class ="row mt-5">
                          <div class="col-md-6">
                            <img src="{{url('img/soutenez.jpg')}}" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <p>INVEST GROUP nous croyons en la puissance de l'innovation, de la créativité et de la collaboration. Notre plateforme a été créée avec une mission simple mais passionnée : soutenir des projets exceptionnels et faire naître des idées audacieuses. </p> 
                        </div>
                      </div>

                      <div class="mt-3" >
                        <h2 class="text-center"> 
                          Notre mission
                        </h2>
                      </div>

                      <div class="row d-flex justify-content-center mt-5 mb-5" >
                      <div class="col-md-6">
                          <p>Nous sommes ici pour connecter des porteurs de projet passionnés avec des contributeurs enthousiastes. Notre mission est de faire avancer les idées innovantes, de réaliser des rêves et de créer un impact positif.</p>
                        </div>
                        <div class="col-md-6">
                           
                         <img src="{{url('img/satisfait.jpg')}}" class="img-fluid">
                        </div>
                      </section>

                    <div id="porteur_de_projet">
                    <h2 class="text-center">
                  </div>
                    <div class="mt-3">
                            <h2 class="text-center">
                             Nos campagnes de Projets
                            </h2>
                            </div>
                            
                       <div class="row row-cols-1 row-cols-md-3 mt-4 g-4">
                            <a class="nav-link text-decor-none" href="/humanite">
                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/humanitaire.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">humanitaire</h5>
                                    <p class="card-text">Chaque jour, à travers le monde, des millions de personnes sont confrontées à des défis insurmontables : la faim, la maladie, la pauvreté, la violence, et bien d'autres difficultés qui semblent parfois accablantes. Mais il est important de se rappeler que nous avons le pouvoir de faire une différence significative dans la vie de ces individus, de leur offrir de l'espoir et de contribuer à créer un monde meilleur.</p>
                                </div>
                                </div>
                            </div>
                            </a>
                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/Business.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Business</h5>
                                    <p class="card-text">Soutenir l'Innovation et l'Entrepreneuriat : Investir dans un Avenir Prospère

Le monde des affaires est le terrain de jeu des esprits visionnaires, des innovateurs et des créateurs. C'est là que naissent les idées audacieuses qui transforment notre quotidien, stimulent l'économie et créent des opportunités pour tous. En soutenant un projet entrepreneurial, vous devenez un acteur clé de cette aventure vers un avenir prospère.</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/Santé.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Santé</h5>
                                    <p class="card-text">Investir dans la Vie et le Bien-Être

La santé est notre trésor le plus précieux. Elle est la clé de notre qualité de vie, de notre bonheur et de notre capacité à réaliser nos rêves. Cependant, il y a des millions de personnes dans le monde qui luttent pour accéder à des soins médicaux de base, qui font face à des maladies dévastatrices, ou qui ont besoin d'un coup de pouce pour surmonter leurs défis de santé.</p>
                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="row row-cols-1 row-cols-md-3 mt-4 g-4">
                            <a class="nav-link text-decor-none" href="/education">

                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/Education.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Education</h5>
                                    <p class="card-text"> Investir dans l'Avenir de Nos Enfants

L'éducation est la clé qui ouvre les portes de l'avenir. Elle est le catalyseur de l'apprentissage, de la croissance personnelle, et du potentiel humain. En soutenant un projet éducatif, vous choisissez de faire partie d'une cause noble qui façonne non seulement des vies individuelles, mais aussi l'avenir de notre société dans son ensemble.</p>
                                </div>
                                </div>
                            </div>
                            </a>

                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/Sport.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Sport</h5>
                                    <p class="card-text"> Bâtir un Monde en Mouvement

Le sport transcende les frontières, unit les peuples et incarne l'esprit de la compétition, de la persévérance et de la camaraderie. Il est bien plus qu'une simple activité physique, c'est une force puissante qui peut changer des vies et façonner des communautés entières.</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/Agriculture.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Agriculture</h5>
                                    <p class="card-text">Cultiver un Futur Durable

L'agriculture est l'un des piliers fondamentaux de notre société. Elle alimente nos familles, nourrit nos communautés et soutient l'économie mondiale. Elle est le lien direct avec la terre, avec la nature, et avec la source même de notre existence. En soutenant un projet agricole, vous devenez un gardien de notre avenir alimentaire et environnemental.</p>
                                </div>
                                </div>
                            </div>
                          
                            </div>

                            <div class="row row-cols-1 row-cols-md-3 mt-4 g-4">
                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/dev-informatique.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">developpement</h5>
                                    <p class="card-text">un Avenir Meilleur pour Tous

Le développement est la force qui transforme les rêves en réalité. C'est le moteur de la croissance économique, de la justice sociale et de l'amélioration de la qualité de vie. C'est un engagement envers un avenir où chaque individu, quelle que soit sa situation, a la possibilité de s'épanouir.</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/web-dev.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">web-dev</h5>
                                    <p class="card-text">Connecter le Monde Numérique

Le développement web est la force qui façonne notre monde numérique moderne. C'est la créativité en action, la technologie qui transforme des idées en applications interactives, en sites web dynamiques, et en expériences en ligne captivantes. En soutenant un projet de développement web, vous devenez un acteur clé de cette révolution numérique.</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                <img src="{{url('img/Religion.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Religion</h5>
                                    <p class="card-text">une Communauté de Compassion

La religion est une source intarissable de réconfort, d'inspiration et d'espoir pour des millions de personnes dans le monde. Elle offre des réponses aux questions profondes de l'existence, enseigne la compassion, et guide les âmes sur le chemin de la paix intérieure. En soutenant un projet religieux, vous devenez un pilier de la foi et de la spiritualité.</p>
                                </div>
                                </div>
                            </div>
                          
                            </div>

                    <section id="contributeurs">
                        <!-- Contenu de la section Contributeurs -->
                        <h2 class="text-center">
                  </div>
                    <div class="mt-3">
                            <h2 class="text-center">
                             Nos Acteurs de l'investissement
                            </h2>
                            </div>
                            <div class="col">
                                <div class="card border-none-card">
                                <img src="{{url('img/acteur1.jpg')}}" class="card-img-top card-box-roud" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Particulier</h5>
                                    <p class="card-text">Alassane Diop</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-none-card">
                                <img src="{{url('img/acteur2.jpg')}}" class="card-img-top card-box-roud" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Agents Economiques</h5>
                                    <p class="card-text">David Noel & Salla Adele</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-none-card">
                                <img src="{{url('img/acteur 3.jpg')}}" class="card-img-top card-box-roud" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Femmes D'affaires</h5>
                                    <p class="card-text">Claire Adé</p>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-none-card">
                                <img src="{{url('img/acteur 4.jpg')}}" class="card-img-top card-box-roud" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Etablissements de credit specialisés</h5>
                                    <p class="card-text">Entrepreneurs</p>
                                </div>
                                </div>
                            </div>
                    </section>
                    <section id="nos projets">
                        <!-- Contenu de la section nos projets -->
                    </section>
                    <section id="Contact">
                        <!-- Contenu de la section contact -->
                    </section>
                    <section id="à propos de nous">
                        <!-- Contenu de la section à propos de nous -->
                    </section>
                    <div class="mt-3">
                            <h2 class="text-center">
                             nos Réalisations
                            </h2>
                            <div class="row mt-3">
                              <div class="col-md-6">
                                <div class="video">
                                <video src="{{url('img/explicate.mp4')}}" controls width="500" height="300"></video>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <p>
                                 VOUS SOUHAITEZ INVESTIR 
                                 Découvrez le fonctionnement du financement participatif de SUNU INVEST car nous vous Apportons un soutien à un secteur ou à un projet qui nous tient à coeur pour une aide au développement de grands projets avec une performance de 12 % par an
                                </p>
                              </div>
                            </div>
                           
                      </div>
                    <!-- Section: Form -->
                </div>
                <!-- Grid container -->
                <div class="latest campaign">
	
 
                </div>
    </div>
    </div>
                <!-- Copyright -->
                <!-- Remove the container if you want to extend the Footer to full width. -->

<!-- Footer -->
<footer class="bg-dark text-center text-white mt-5">
<!-- Grid container -->
<div class="container p-4">
  <!-- Section: Social media -->
  <section class="mb-4">
    <!-- Facebook -->
    <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com" target="_blank" role="button"
      ><i class="fab fa-facebook-f"></i
    ></a>

    <!-- Twitter -->
    <a class="btn btn-outline-light btn-floating m-1" href="https://www.twitter.com" target="_blank" role="button"
      ><i class="fab fa-twitter"></i
    ></a>

    <!-- Instagram -->
    <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com" target="_blank" role="button"
      ><i class="fab fa-instagram"></i
    ></a>

    <!-- Linkedin -->
    <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com" target="_blank" role="button"
      ><i class="fab fa-linkedin-in"></i
    ></a>
  </section>
  <!-- Section: Social media -->

  <!-- Section: Form -->
  <section class="">
    <form action="">
      <!--Grid row-->
      <div class="row d-flex justify-content-center">
        <!--Grid column-->
        <div class="col-auto">
          <p class="pt-2">
            <strong>Inscrivez-vous à notre newsletter</strong>
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-12">
          <!-- Email input -->
          <div class="form-outline form-white mb-4">
            <input type="email" placeholder="address email" id="form5Example2" class="form-control" />
            <label class="form-label" for="form5Example2"></label>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-auto">
         
      </div>
      <!--Grid row-->
    </form>
  </section>
  <!-- Section: Form -->

  <!-- Section: Text -->
  <section class="mb-4">
    <p>
    Donnez vie à de nouvelles idées, où que vous soyez.
INVEST GROUP est une Plateforme de Financement Participatif .
vous avez un projet qui vous tient à cœur ? Un besoin de financement ? 
Faites appel aux bonnes volontés à l’aide du financement participatif.
    </p>
  </section>
  <!-- Section: Text -->

  <!-- Section: Links -->

  <!-- Section: Links -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2023 Copyright:
  <a class="text-white" href="#">Hawa Ba</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->


                <!-- Copyright -->
       


</body>

</html>