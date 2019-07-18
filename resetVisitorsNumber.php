<?php
include("modele.php");
$bdd = connexion();

$result = resetVisitorsNumber($bdd);

header('Location: informations_visiteurs.php');

die();