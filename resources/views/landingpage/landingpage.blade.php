<!DOCTYPE html>
<html>
     <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Title tag -->
          <title>page d'accueil</title>

          <!-- Font awesome -->
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

          <!-- Animate.css -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

          <!-- Normalize -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

          <!-- Custom CSS -->
		  <link rel="stylesheet" href="{{ asset('homepage/css/styles.css') }}">

          <style>
               /* If you wish to remove the astonish.js file, then also be sure to remove these styles. */
               .astonish {
                    visibility: visible;
               }

               @media (min-width: 768px) {
                    .astonish {
                         visibility: hidden;
                    }
                    .animated {
                         visibility: visible;
                    }
               }
          </style>
     </head>
     <body>
          <!-- Main Navigation -->
          <nav class="main-nav" id="main-nav">
               <div class="content-wrapper-sm">
                    <a href="/home" class="navbar-brand">
                         <img src="{{asset('homepage/img/ocp_ogo.png')}}" alt="ocp logo" width="150">
                    </a>
                    <div id="menu-button">
                         <div class="bar1"></div>
                         <div class="bar2"></div>
                         <div class="bar3"></div>
                    </div>
                    <ul class="nav-links">
                         <li><a href="/home">home</a></li>
                         <li><a href="#about">à propos</a></li>
                         <li><a href="#reserve">Commencer</a></li>
                         <li><a href="#map">localisation</a></li>
                    </ul>
               </div>
          </nav>

          <!-- Main header -->
          <header>
               <!-- First replaceble image -->
			   <img src="{{asset('homepage/img/ocp-group-turnover-exceeded-8-billion-in-2021-800x400.jpg')}}" class="img-absolute" alt="City 1">
               <div class="wrapper astonish animated fadeInDown">
                    <h1><strong>Bienvenue</strong>Sur</h1>
                    <h2>la Plateforme de Gestion <br>
                         des Stages du Groupe OCP !</h2>
               </div>
          </header>

          <!-- Main content -->
          <main>
               <div class="content-wrapper" id="about">
                    <!-- second replaceble image -->
                    <img src="{{asset('homepage/img/ocp-group-to-accelerate-ldquo-water-program-rdquo-to-tackle-water-stress-in-morocco-800x534.jpg')}}" class="img-absolute" alt="City 2">
                    <div class="grid">
                         <div class="grid-col-sm-12 grid-col-md-6 astonish" data-animation="fadeInLeft">
                              <h2 class="section-title">à propos de nous</h2>
                              <p>Bienvenue sur la plateforme de gestion des stages du groupe OCP, une plateforme en ligne de pointe conçue pour rationaliser le processus de gestion des stagiaires et des stages au sein de notre organisation estimée.</p>
                              <p>Au Groupe OCP, nous croyons qu'il est important de nourrir les jeunes talents et de leur offrir l'opportunité d'acquérir une expérience pratique, de développer des compétences essentielles et de façonner leur future carrière. Notre plateforme de gestion des stages sert de pont entre les étudiants talentueux et les opportunités de stages passionnantes disponibles dans les différents départements de notre entreprise mondiale.</p>
                         </div>
                    </div>
               </div>
               
               <div id="reserve" class="content-wrapper-lg text-center astonish" data-animation="zoomIn">
                    
                    <h2 class="section-title">découvrez les nouvelles offres de stages</h2>
                    <p>Prêt à embarquer pour un voyage enrichissant ? Découvrez nos dernières opportunités de stage et faites le premier pas vers une carrière passionnante. Cliquez sur "Commencer" maintenant !</p>
                    <a href="signIn" class="btn btn-outline-purple">Commencer</a>
               </div>

               

               <div id="map">
                    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.7395393369734!2d-6.909293308854086!3d32.87861012200212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda427f198555555%3A0x3ac07aa6cffebe91!2z2YXYr9mK2LHZitipINin2YTZhdis2YXYuSDYp9mE2LTYsdmK2YEg2YTZhNmB2YjYs9mB2KfYtw!5e0!3m2!1sen!2sma!4v1686094007553!5m2!1sen!2sma" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
          </main>

          <!-- Main footer -->
          <footer>
               <div class="content-wrapper-sm display-flex-between">
                    <!-- Easily replaceble copyright information -->
                    <small>Your copyright 2017.</small>

                    <!-- Make sure to edit the links so that they go to your social media. -->
                    <div class="social-links">
                         <ul>
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         </ul>
                    </div>
               </div>
          </footer>

          <!-- Scripts placed at the bottom for faster loading -->
          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
          <script src="{{ URL::asset('homepage/js/menu.js') }}"></script>
		  
          <!-- Optional js files -->
          <!-- Quick note: if you remove astonish, make sure you remove the embedded styles in the top -->
          <script src="{{ URL::asset('homepage/js/astonish.js') }}"></script>
          <script src="{{ URL::asset('homepage/js/nav.js') }}"></script>
          <script src="{{ URL::asset('homepage/js/scroll.js') }}"></script>
     </body>
</html>