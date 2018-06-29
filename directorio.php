<!DOCTYPE html>
<html lang="es-419">

<head>

    <!--Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Strength in Diversity">
    <meta name="author" content="La Salle México">

	<!--JS-->
	<script type="text/javascript" src="js/afterglow.min.js"></script>

    <!--Facebook -->
    <meta property="og:url" content="http://www.lasalle.mx/ialu"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://www.lasalle.mx/ialu/images/home/IALULanding_Strength.png" />
    <meta property="og:title" content="Encuetro IALU 2018 | La Salle" />
    <meta property="og:description" content="Strength in Diversity">

    <!-- Twitter-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@LaSalle_MX">
    <meta name="twitter:creator" content="@LaSalle_MX">
    <meta name="twitter:title" content="Encuetro IALU 2018 | La Salle">
    <meta name="twitter:description" content="Strength in Diversity">
    <meta name="twitter:image" content="http://www.lasalle.mx/ialu/images/home/IALULanding_Strength.png">

    <title>Encuetro IALU 2018 | La Salle</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Web Fonts -->

    <!-- Plugin CSS -->


    <!-- Theme CSS -->
    <link href="css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
</head>

<body id="page-top">

<header class="container">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light ">
     <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse justify-content-center navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="index.php">Home</a>
        <a class="nav-item nav-link" href="index.php">Program</a>
		<a class="nav-item nav-link" href="conference.php">Conference</a>
		<a class="nav-item nav-link" href="media.php">Media</a> 
        <a class="nav-item nav-link" href="#">Directory</a>
		<a class="nav-item nav-link" href="#download">Download</a> 				
		<!--<a class="nav-item nav-link" href="#accomodation">Accommodations</a>-->
        <!--<a class="nav-item nav-link" href="#applications">Submissions</a>-->
        <!--<a class="nav-item nav-link" href="#registrationForm">Registration Form</a>-->
      </div>
    </div>
  </nav>
</header>

<!-- Slider -->
<section id="home" class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <figure><img src="images/home/IALULanding_Strength.png" alt="Strength Diversity" class="img-fluid"></figure>
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="col-sm-4"><figure><img src="images/home/IALULanding_EncuentroIALU.png" alt="Encuentro IALU XII" class="img-fluid"></figure></div>
    
  </div>
</section>

<section id="table" class="container-fluid">
	<?php include 'controlador/ControladorOEdu.php'; ?>
</section>

<?php include 'footer.php';?>
