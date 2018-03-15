<!doctype html>
<html>

<head>
	

  <!--Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Strength in Diversity">
    <meta name="author" content="La Salle México">

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
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">

</head>

<?php 
include_once 'modelo/ConectaBD.php';

date_default_timezone_set('America/Monterrey');
$ldate = time();
?>


<section class="container">
	<div class="introduccion">
		<div class="row">
			<div class="col-sm-12">
				<p class="titulo_introduccion2">Iniciar Sesión</p><br>

			</div>
		</div>
	</div>
</section>

<div class="container">
	<form id="lgin" action = "" method = "post" >
		<div class="row">
			<div class="col-sm-6">
				<p class="instrucciones">Usuario: </p>
			</div>
			<div class="col-sm-6">
				<input id="user" type="text" name="user">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<p class="instrucciones">Contraseña: </p>
			</div>
			<div class="col-sm-6">
				<input id="passwd" type="password" name="passwd">
			</div>
		</div>
		<div class="row">
			<input type="submit" class="botonAzul btnEnviar" value="Enviar" id = "send" />
		</div>
	</form>
</div>

<?php
	include_once 'controlador/controladorLogin.php';
?>


<?php include 'footer.php'; ?>