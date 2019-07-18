<?php
include("modele.php");
$bdd = connexion();
incrementVisitors($bdd, "cursus");
?>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css"/>
    <meta charset="utf-8"/>
    <title>Cursus</title>
    <meta name="keywords" lang="fr" content="cursus"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a id="cursus"></a>

</head>

<body>

<?php include("header.php") ?>

<main id="main3">
    <article class="c1">
        <h1 class="entoure">FORMATIONS</h1>
    </article>


    <article class="c2" id="dut">
        <h2>DUT Informatique | 2017 - Aujourd'hui</h2>
        <p>Je suis actuellement en deuxième année de DUT Informatique à Lannion. C'est une formation qui me permet
            d'apporter des solutions informatiques pour les utilisateurs.
            Nous apprenons plus concrètement à créer des logiciels, des applications Web, des applications mobiles, à
            gérer des bases de données, et bien d'autres compétences que vous pouvez retrouver dans le détail de la
            formation ci-dessous.</p>
        <a href="http://www.iut-lannion.fr/sites/default/files/DOWNLOADS/ppn_informatique_256097.pdf">
            <span class="glyphicon glyphicon-question-sign" id="gly2"></span> </a>
    </article>


    <article class="c1">
        <h2>Baccalauréat Scientifique | 2014 - 2017</h2>
        <p>J'ai obtenu mon Baccalauréat avec la mention Bien, au Lycée la Fontaine des Eaux à Dinan avec comme option
            Sciences de l'Ingénieur et spécialité ISN (Informatique et Sciences du Numérique). Cette option m'a permis
            de débuter en informatique en voyant plusieurs notions importantes comme la programmation et le web. Elle
            m'a également confortée dans mon choix de poursuivre vers un DUT informatique.</p>
        <a href="http://www.lycees-dinan.fr/">
            <span class="glyphicon glyphicon-question-sign" id="gly3"></span> </a>
    </article>


    <h1 class="entoure">EXPERIENCES</h1>

    <article class="c2">
        <h2>Ecole de design - Nantes Atlantique | 2018/2019 - Alternant </h2>
        <p>Développement d’un environnement numérique de travail à destination de l'équipe enseignante et des
            étudiants pour la gestion de la scolarité. </p>
    </article>

    <article class="c1">
        <h2>Kérandou - Quevert | Eté 2018 - Saisonnier </h2>
        <p>Préparation et cuisson d'andouilles et d'andouillettes </p>
    </article>

    <article class="c2">
        <h2>Festival Armor À Sons - Bobital| Depuis 2017 - Bénévole</h2>
        <p>Montage et démontage du site avec une équipe de bénévoles</p>
    </article>

    <article class="c1">
        <h2>E.Leclerc - Dinan | 2017 - Salarié</h2>
        <p>Préparation des plateaux de fruits de mer pour les fêtes de fin d'année</p>
    </article>

    <article class="c2">
        <h2>Mission argent de poche - St-Carné| 2016 & 2017 </h2>
        <p>Travaux manuels auprès d’un jeune public</p>
    </article>


</main>


</body>
