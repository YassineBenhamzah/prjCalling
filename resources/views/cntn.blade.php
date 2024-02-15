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
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville&family=Tajawal:wght@200&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">


</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
<!--Preloader-->
<div id="preloader">
  <div id="pre-status">
    <div class="preload-placeholder"></div>
  </div>
</div>
@include('header')
<section id="contact" class="backg7" style="background-color: rgb(252, 252, 252) ; margin-bottom:250px">

    <div class="col-md-12 backg11" >
  <div class="col-md-12 backg12" >

    <div class="col-md-6 " style="margin-top: 250px ; ">
      <h1 class="font2 ">
        Contactez-nous
      </h1>
    </div>
    <div class="col-md-6 text-right">
        <img src="images/back/bubble4.png"    alt="">
    </div>
  </div><div class="container">
    <div class="col-md-12 backg8" style="margin-top: 250px  ;">
      <div class="col-md-5 inputt " style="background-color : white">
        <h2 class="font2">
            Nous serons heureux de <br> vous contacter
        </h2>
        <form  method="POST" action="{{route('send.email')}}">

          @csrf
            <div class="form-group">
                <label for="" class="font2">Nom</label>
              <input type="text" name="name" class="form-control bd" placeholder="Name" required="required">
            </div>


            <div class="form-group">
                <label for="" class="font2">Email</label>
              <input type="email" name="email" class="form-control bd" placeholder="Email Address" required="required">
            </div>
            <div class="form-group">
                <label for="" class="font2">Type de service
                </label>
              <select class="form-control  bd" name="typeservice">
                  <option value="">-- Please select --</option>
                  <option value="Campagnes publicitaires">Campagnes publicitaires</option>
                  <option value="Gestion des réseaux sociaux">Gestion des réseaux sociaux</option>
                  <option value="Construction et conception d’identité de marque">Construction et conception d’identité de marque </option>
                  <option value="Vidéo Marketing">Vidéo Marketing</option>

              </select>
            </div>
        <div class="form-group">
            <label for="" class="font2">Comment pouvons-nous vous aider ?</label>
          <textarea name="message" id="message" class="form-control  bd" rows="4" placeholder="Enter your message" required="required"></textarea>
        </div>

        <div class="form-group">
            <button {{-- type="submit" --}} class="btn btn-primary btn-lg bd btn-block" value="send message">Envoyez votre message maintenain</button>
         </div>
        <div class="form-group">
            <a  type="submit" class="btn btn-success btn-lg bd btn-block"  href="#">Contactez-nous via Whatsapp</a>
        </div>
      </form>
      </div>
      <div class="col-md-7 mx-auto " style="margin-top: 100px">
        <div class="col-md-7 mx-auto " style="margin-left:  ; border: 1px solid black; border-radius: 20px; background-color: black ; ">
        <h2 class="font2" style="color: white">téléphone</h2>
        <p class="text-justify font2" style="color: white">Le service client est ouvert du lundi au samedi de 10h à 18h.</p>
        <h3 class="font2" style="color: rgb(250, 221, 221)">(+212) 664298242</h3>
    </div>
    <div class="col-md-7" style="margin-left:  ; margin-top: 50px ; border: 1px solid black; border-radius: 20px; background-color: black">
        <h2 class="font2" style="color: white">E-mail*</h2>
        <p class="text-justify font2" style="color: white">Nous vous répondrons par e-mail en moins de 24 heures.</p>
        <h3 class="font2" style="color: rgb(250, 221, 221)">contact@adscaling.ma</h3>
    </div>
    <div class="col-md-7" style="margin-left:  ; margin-top: 50px ; border: 1px solid black; border-radius: 20px; background-color: black">
        <h2 class="font1" style="color: white">Address</h2>
        <p class="text-justify font1" style="color: white">Le service client est ouvert du lundi au samedi de 10h à 18h.</p>
        <h3 class="font1" style="color: rgb(250, 221, 221)">15 Avunue Al Abtal Appartement 4 Agdal Rabat</h3>
    </div>
      </div>
    </div>
</div>
    </div>
  </section>
@include('footer')

{{-- @include('footer') --}}
<!--Jquery-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
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
</body>
</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
