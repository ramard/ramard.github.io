<?php
include("modele.php");
$bdd = connexion();
incrementVisitors($bdd, "presentation");
?>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="style1.css"/>
    <meta charset="utf-8"/>
    <title>Page de présentation </title>
    <meta name="keywords" lang="fr" content="presentation"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a id="presentation"></a>

</head>

<body>
<?php include("header.php") ?>

<main>
    <article class="c1">
        <h1>QUI SUIS-JE ?</h1>

        <p class="presentationText">Actuellement étudiant en deuxième année de DUT Informatique à Lannion (22), je suis
            âgé de 19 ans, passionné d'informatique, de nouvelles technologies et de sport.
            La particularité de ma formation cette année, est que je l'effectue en alternance à l'École de design de
            Nantes Atlantique.
            Cette alternance me permet d'apprendre énormément de choses, et de mettre en pratique toutes les
            connaissances que j'ai acquis.
        </p>
        </br>
        <p class="presentationText">
            Ainsi, ma formation à l'IUT s'achève, je suis donc à la recherche d'une école d'ingénieurs qui me
            permettrait de continuer vers la voie de l'informatique.
            Une école d'ingénieurs serait ainsi la suite idéale pour moi puisqu'elle m'apporterait de nouvelles
            connaissances, tant sur le plan technique, que sur le plan humain.
            En effet au-delà des compétences en informatique, un ingénieur pour moi se doit d'avoir des qualités
            humaines pour pouvoir travailler à plusieurs.
            Des qualités comme l'écoute, la communication ou encore l'esprit d'équipe. </br>
            Enfin, une école d'ingénieurs me permettrait d'avoir une certaine rigueur dans les projets futurs, et
            m'apporterait une expertise dans le domaine.
        </p>
    </article>

    <article class="c2">
        <h1>MES COORDONNÉES </h1>

        <ul class="sans_puces">
            <li id="li1"><span class="glyphicon glyphicon-map-marker" id="map"></span>
                <p>Rue Edouard Branly, 22300 Lannion</p>
                <div class="glyphicon glyphicon-chevron-down c1" id="gly"></div>
                <div id="carte">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59521.11831777458!2d-3.5037113588978865!3d48.75350223408676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48122c03348c571b%3A0x5e4bb8617d964bd0!2sRue+%C3%89douard+Branly%2C+22300+Lannion!5e0!3m2!1sfr!2sfr!4v1523774094594"
                            width="75%" height="65%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </li>
            <li><span class="glyphicon glyphicon-earphone"></span>
                <p>06 88 51 01 49</p></li>
            <a href="mailto:axel.ramard@outlook.fr">
                <li><span class="glyphicon glyphicon-envelope"></span>
                    <p>axel.ramard@outlook.fr</p></li>
            </a>
            <!-- <a href="http://fr.viadeo.com/fr/profile/axel.ramard"><li><span class="glyphicon glyphicon-globe"></span><p>Viadeo : Axel Ramard</p></li></a> -->
            <li><span class="glyphicon glyphicon-road"></span>
                <p>Obtention du permis de conduire et en possession d'une voiture</p></li>
        </ul>
    </article>

    <article class="c1">
        <h1>MES CENTRES D'INTÉRÊT </h1>

        <ul>
            <li><strong>Sport</strong> : Je suis passionné de <a href="https://fr.wikipedia.org/wiki/Street_workout">Street-Workout</a>,
                un sport qui est encore méconnu. C'est un mélange de Gymnastique et de Musculation que je pratique dès
                que je peux.
            </li>
            <li><strong>Nouvelles technologies</strong> : Je suis régulièrement des magazines et des chaînes youtube à
                ce sujet pour connaître l'actualité.
            </li>
            <li><strong>Série et musique </strong>: Je regarde quelques séries comme Arrow, Flash ou Chuck et j'écoute
                plusieurs styles musicaux, mais principalement du rap et de l'électro.
            </li>


        </ul>
    </article>
</main>

</body>


<script src="jQuery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script>
    $(function () {

        var isOpen = false;

        $("#carte").hide();

        $("#gly").click(function () {
            if (isOpen) {
                $("#carte").slideUp(600);
                $(this).css("transform", "rotate(0deg)");
                isOpen = false;
            } else {
                $("#carte").slideDown(600);
                $(this).css("transform", "rotate(180deg)");
                isOpen = true;
            }
        })


    });
</script>

