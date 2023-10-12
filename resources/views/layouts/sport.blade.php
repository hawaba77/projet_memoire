<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
    </style>
</head>

<body>
<script>
    /*
    document.addEventListener("DOMContentLoaded", function () {
        const menuLinks = document.querySelectorAll("a.nav-link");
        menuLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            const targetId = this.getAttribute("data-target");
            const targetSection = document.getElementById(targetId);
            targetSection.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        });
    });
});*/

</script>



    <!--   Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">sunu invest communi fund</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home 1</a>
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
                            <li><a class="dropdown-item" href="#">Developpement Informatique</a></li>
                            <li><a class="dropdown-item" href="#">Developpement Web</a></li>

                        </ul>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactez nous</a>
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
      <img src="{{url('img/home.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{url('img/porteur_projet.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{url('img/contributeur.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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
   
                <!-- Grid container -->
                <div class="latest campaign">
	<div class="container">
		
		<div class="campaign-content">
			<div class="row">
         
  <div class="latest campaign">
	<div class="container">
		<h2 class="title">
       Nos campagnes en sport
		</h2>
		<div class="description hidden"></div>
		<div class="campaign-content">
			<div class="row">
                <div class="col-lg-4 col-md-6">
     <div class="campaign-item">
          <a class="overlay" href="campaign//dotation de materiels sportives">
              <img title="dotation de materiels sportives" src="public/campaigns/small/11031696260974vyxmwghjwdvwjnb8w0p7tul07ujo1tyzaprbxptd.jpeg" alt="">
              <span class="ion-ios-search-strong"></span>
          </a>
          <div class="campaign-box">
              <a href="listCampaign/sport" class="category">sport</a>
              <h3><a href="campaign/856/dotation de materiels sportives">dotation de materiels sportives</a></h3>
              <div class="campaign-description">Le but est d'avoir une financement qui permet d'acheter des materiels pour nos jeunes qui sont passionnés par le sport</div>
              <div class="campaign-author">
                <a class="author-icon" href= <img src= "{{url('img/roman.jpeg')}}" alt="" class="d-block w-100"> </a> <a class="author-name" href="void:javascript(0)">Massamba</a></div>
              <div class="process">
                  <div class="progress" style="height: 6px;margin-bottom: 15px;">
                      <div class="progress-bar bg-info progress-bar-striped progress-bar-animated data-progess-bar" role="progressbar" data-progess-bar="1" style="width: 0%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="process-info">
                      <div class="process-pledged" style="width: 45%"><span style="margin-right: 0 !important;">5 00000FCFA</span> But</div>
                      <div class="process-funded" style="width: 45%"><span style="margin-right: 0 !important;">1 500 FCFA</span> Recueillis</div>
                      <div class="process-time" style="width: 10%"><span style="margin-right: 0 !important;">0</span> %</div>
                  </div>
              </div>
          </div>
      </div>
  </div>

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2023 Copyright:
                    <a class="text-white" href="">Hawa Ba</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </div>


</body>

</html>