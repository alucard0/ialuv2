<?php
include_once '../modelo/Aspirante.php';
include_once '../modelo/AspiranteBO.php';
include_once '../modelo/ConectaBD.php';

$aspirante = new Aspirante($_POST);
$aspiranteLogica = new AspiranteBO();

$aspiranteLogica->insertarAspirante($aspirante);
?>