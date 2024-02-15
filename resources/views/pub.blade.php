<!DOCTYPE html>
<!--
	Cosmix by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>DevApp</title>
<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--Responsive-->
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--Animation-->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<!--Prettyphoto-->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<!--Font-Awesome-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!--Owl-Slider-->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville&family=Poppins:wght@500&family=Tajawal:wght@200&family=Titillium+Web:wght@300&family=Xanh+Mono&display=swap" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  [endif]-->
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
<!--Preloader-->
<div id="preloader">
  <div id="pre-status">
    <div class="preload-placeholder"></div>
  </div>
</div>
@include('header')
<section id="about" class="backg6">

        <div class="col-md-12" >
            <div class="col-md-5">
            <p class="font2" style="margin-top: 345px ; font-size:60px ; color: black ; margin-bottom:25px">Campagnes   </p><br>
            <p class="font2" style="margin-top:  ; font-size:60px ; color: black ; margin-bottom:40px">   Publicitaires</p>
            <p class="font2" style="color: black"><span><strong>L</strong></span>es campagnes publicitaires contribuent à améliorer
                l'accès au site Web de l'entreprise ou aux comptes des médias sociaux,
                 mais elles nécessitent beaucoup
                d'expérience et une bonne planification pour vous garantir de bons résultats.</p>
                <a   href="{{url('/cntn')}}" class="btn btn-primary btn-lg font-2 btn-block" style="margin-top: 85px ; /* padding :20px 35px ; */ box-shadow: 10px 5px 5px black">Demendez le service maintenant.</a>
            </div>
            <div class="col-md-7 rotate">
                <img src="images/back/pub1.png" alt="" width="500px" style=" margin-top:250px">
            </div>
        </div>
        <div class="container">
        <div class="col-md-12" style="margin-top: 125px">
            <div class="col-md-3" style="/* margin-right: -20px */">
                <img src="images/back/face.png" alt="" style="box-shadow: 10px 5px 5px black" width="120px" >
            </div>
            <div class="col-md-2" style="/* margin-left:45px ; */">
                <img src="images/back/download.jpg" style="border-radius: 20px; box-shadow: 10px 5px 5px black;" alt="" width="120px" >
            </div>
            <div class="col-md-3" style="/* margin-left:45px ; */ ">
                <img src="images/back/174857.png" style="border-radius: 20px; box-shadow: 10px 5px 5px black" alt="" width="120px" >
            </div>
            <div class="col-md-2" style="/* margin-left:45px ; */ ">
                <img src="images/back/google.png" alt="" style="border-radius: 20px; box-shadow: 10px 5px 5px black" width="120px" >
            </div>
            <div class="col-md-2" style="/* margin-left:45px */ ">
                <img src="images/back/unnamed.png" style="/* margin-left:25px; */ border-radius: 20px; box-shadow: 10px 5px 5px black" alt="" width="120px" >
            </div>
        </div>
        </div>
        <div class="col-md-12 backg7" style="margin-bottom: 200px">
            <div class="col-md-6">
                <img src="images/back/pub2.png" alt="" width="500px" style=" margin-top:170px">
            </div>
            <div class="col-md-6">
                <p class="font2" style="margin-top: 205px ; font-size: 35px ; color : black">Services de marketing des</p>
                <p class="font2" style=" font-size: 35px ; color : black">campagnes publicitaires</p>
                <p class="font2" style="color: black"><span><strong>D</strong></span>iverses plateformes de médias sociaux sont devenues, en quelques années, un canal marketing à part entière dans un monde tourné vers le digital. Notre expertise
                     en Marketing Digital vous aidera à tirer profit de ces plateformes marketing pour atteindre un fort retour sur investissement.</p>
                     <ul>
                        <li class="font2">-Établir une stratégie marketing pour utiliser de manière optimale les médias
                             sociaux les plus populaires auprès de votre public cible.
                             (Facebook, Twitter, Instagram, Linkedin, Telegram et autres).</li>
                        <li class="font2">-Étudier et analyser vos pages.</li>
                        <li class="font2">-Déterminer les avantages concurrentiels et les avantages de vos produits.</li>
                        <li class="font2">-Analyser les concurrents et étudier les opportunités et les menaces SWOT.</li>
                        <li class="font2">-Étudier le « buyer persona » de votre client idéal.</li>
                        <li class="font2">-Déterminer le meilleur contenu marketing adapté à votre audience.</li>
                        <li class="font2"> -Fournir des designs thinking pour une marque innovante.</li>
                        <li class="font2">-Préparer des campagnes publicitaires qui atteignent un ciblage qualifié.</li>
                        <li class="font2">-Leadership et supériorité sur vos concurrents.</li>


                    </ul>
                    <a type="button"  href="{{url('/cntn')}}" class="btn btn-primary btn-lg font2" style="margin-top: 85px ; padding :20px 35px">Demendez le service maintenant.</a>
                </div>
        </div>


    </div>
  </section>


@include('footer')
<!--Jquery-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--Boostrap-Jquery-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--Preetyphoto-Jquery-->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!--NiceScroll-Jquery-->
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<!--Isotopes-->
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<!--Wow-Jquery-->
<script type="text/javascript" src="js/wow.js"></script>
<!--Count-Jquey-->
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<!--Owl-Crousels-Jqury-->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<!--Main-Scripts-->
<script type="text/javascript" src="js/script.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
