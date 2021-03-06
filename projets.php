<?php
include("modele.php");
$bdd = connexion();
incrementVisitors($bdd, "projets");
?>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="style1.css"/>
    <meta charset="utf-8"/>
    <title>Compétences</title>
    <meta name="keywords" lang="fr" content="projets"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a id="projets"></a>

</head>

<body>
<?php include("header.php") ?>

<main id="main4">

    <h1 class="entoure">PROJETS</h1>

    <article class="c2">
        <h2>Néocampus - École de design Nantes Atlantique </br> En cours </h2>
        <p>Environnement numérique de travail à destination de l'équipe enseignante et des étudiants</p>
        <p><span class="underline"> Compétences acquises</span> : Symfony, PHP, Javascript, Ajax....</p>
        <span class="glyphicon glyphicon-chevron-down closed"></span>
        <div class="content">
            <img src="images/neocampus_services.png" alt="image de la page services du neocampus"
                 title="Page service - Néocampus" height=60% width=80%/>
            <img src="images/neocampus_actualites.png" alt="image de la page actualités du neocampus"
                 title="Page actualités - Néocampus" height=60% width=80%/>
            <p class="texte">Ce Campus virtuel a pour but de proposer un ensemble d'outils pour la scolarité des
                étudiants.
                En effet, il propose des services comme l'agenda, l'accès à la messagerie, des ressources déposées par
                les enseignants, etc..
            </p>
        </div>
    </article>

    <article class="c1">
        <h2> Pokédex </br> 2019</h2>
        <p>Création d'un pokédex</p>
        <p><span class="underline"> Compétences acquises</span> : CodeIgniter, PHP, SQL</p>
        <span class="glyphicon glyphicon-chevron-down c1 closed"></span>
        <div class="content">
            <img src="images/mes_pokemons3.png" alt="image de l'application pokédex - page mes pokémons"
                 title="Mes pokémons" height=60% width=80%/>
            <img src="images/chasser_pokemon.png" alt="image de l'application pokédex - page chasser les pokémons"
                 title="Chasser les pokémons" height=60% width=80%/>
            <p class="texte">Ce projet dans le cadre du DUT informatique avait pour but de nous faire découvrir
                le framework CodeIgniter tout en utilisant du PHP pour interroger la base de données composés de
                pokémons.
                C'est un projet qui m'a beaucoup plu puisque j'adore le développement web et j'ai pu ici m'amuser sur le
                design du site.
            </p>
        </div>
    </article>

    <article class="c2">
        <h2>Carte de restauration interactive </br> 2018</h2>
        <p>Création d'une carte de restauration interactive</p>
        <p><span class="underline"> Compétences acquises</span> : Java, Javafx</p>
        <span class="glyphicon glyphicon-chevron-down closed"></span>
        <div class="content">
            <img src="images/carte_restauration-interactive.png"
                 alt="logiciel de commandes - carte de restauration intéractive"
                 title="logiciel pour la prise de commandes" height=65% width=80%/>

            <p class="texte">Ce projet informatique a été mené en groupe dans le cadre du DUT. Le sujet était libre,
                nous avons donc décidé de créer un logiciel pour les restaurants.
                L'objectif était de créer un logiciel pour la prise de commandes pour les clients, comme on peut trouver
                dans certains fast-foods.
                Ainsi, ce projet nous a permis d'avoir une vraie mise en situation, en combinant des compétences
                techniques, mais également des compétences en gestion de projet.
                </br>Nous avons ici pris l'exemple du restaurant Buffalo Grill. </p>
        </div>
    </article>


    <article class="c1">
        <a href="https://view.genial.ly/5a533fd96bb0ba1a6856797a/webdoc">
            <h2>Web-Documentaire </br> 2017</h2>
            <p>Interview d'un ingénieur en cyber-sécurité</p>
        </a>
        <span class="glyphicon glyphicon-chevron-down c1 closed"></span>
        <div class="content">
            <a href="https://view.genial.ly/5a533fd96bb0ba1a6856797a/webdoc">
                <img src="images/Capture_webDoc.PNG" alt="webDoc" title="webDoc" height=55% width=80%/>
            </a>

            <p class="texte">Malgré que ce ne soit pas un projet informatique à proprement parlé, ce fût très
                intéressant. En effet, je connais maintenant les différents types de virus qui existent, et la manière
                dont ils se propagent. Cela reste de la vulgarisation, mais c'est une première approche que je trouve
                plutôt utile pour un informaticien. Cela m'a aussi permis de rencontrer un professionnel dans ce
                domaine, ainsi que de manipuler un nouvel outil, qui est Genially.</p>
        </div>
    </article>


</main>

</body>


<script src="jQuery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $(".content").hide();

        $(".glyphicon-chevron-down").click(function () {
            var content = $(this).next(".content");
            if ($(this).hasClass("closed")) {
                console.log("Le contenu est masqué, il faut l'afficher");
                $(this).css("transform", "rotate(180deg)");
                content.slideDown(600);
                $(this).addClass("opened");
                $(this).removeClass("closed");
            } else if ($(this).hasClass("opened")) {
                console.log("Le contenu est affiché, il faut le masquer");
                $(this).css("transform", "rotate(0deg)");
                content.slideUp(600);
                $(this).addClass("closed");
            } else {
                console.log("Il y a un probleme");
                console.log(content);
            }
        })


    })

</script>
    