<?php
include("modele.php");
$bdd = connexion();

$pageCompetences = getVistorsPageInformations($bdd, "competences");
$pageCursus = getVistorsPageInformations($bdd, "cursus");
$pagePresentation = getVistorsPageInformations($bdd, "presentation");
$pageProjets = getVistorsPageInformations($bdd, "projets");

?>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css"/>
    <meta charset="utf-8"/>
    <title>Informations visiteurs</title>
    <meta name="keywords" lang="fr" content="infos visiteurs"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a id="informations_visiteurs"></a>

</head>

<body>
<main>

    <h1 class="entoure">Informations nombre de visiteurs</h1>
    <article class="c2">
        <p>Page compétences : <?php echo $pageCompetences?></p>
        <p>Page cursus : <?php echo $pageCursus?></p>
        <p>Page présentation : <?php echo $pagePresentation?></p>
        <p>Page projets : <?php echo $pageProjets?></p>

    </article>

    <a href=""
</main>


</body>
