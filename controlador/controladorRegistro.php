<?php
include_once '../modelo/Participante.php';
include_once '../modelo/ParticipanteBO.php';
include_once '../modelo/ConectaBD.php';

$participante = new Participante($_POST);
$participanteLogica = new ParticipanteBO();

$participanteLogica->insertarParticipante($participante);
?>