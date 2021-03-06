<?php
    include("modele.php");
    $bdd = connexion();
    incrementVisitors($bdd, "competences");
?>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css"/>
    <meta charset="utf-8"/>
    <title>Compétences</title>
    <meta name="keywords" lang="fr" content="competences"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a id="competences"></a>

</head>

<body>
<?php include("header.php") ?>
<main id="main2">

    <h1 class="entoure">COMPÉTENCES</h1>
    <!--Mettre des images relatives aux compétences-->

    <h2 class="c2">Programmation</h2>
    <article class="c2">
        <section>
            <img src="images/image_c.svg" alt="logo langage C" title="logo langage C"/>
            <p>C</p>
        </section>
        <section>
            <img src="images/image_java.svg" alt="logo langage Java" title="logo langage Java"/>
            <p>Java</p>
        </section>
        <section>
            <img src="images/image_python.svg" alt="logo langage Python" title="logo langage Python"/>
            <p>Python</p>
        </section>
    </article>

    <h2 class="c1">Script</h2>
    <article class="c1">
        <section>
            <img src="images/image_bash.png" alt="logo Bash" title="logo Bash"/>
            <p>Bash</p>
        </section>
        <section>
            <img src="images/image_awk.png" alt="logo awk" title="logo awk"/>
            <p>AWK</p>
        </section>
    </article>

    <h2 class="c2">Web</h2>
    <article class="c2">
        <section>
            <img src="images/symfony.png" alt="logo framework Symfony" title="logo framework Symfony"/>
            <p>Symfony</p>
        </section>
        <section>
            <img src="images/codeigniter-logo.png" alt="logo framework CodeIgniter" title="logo framework CodeIgniter"/>
            <p>Code Igniter</p>
        </section>
        <section>
            <img src="images/image_html5.svg" alt="logo langage html" title="logo langage html"/>
            <p>HTML5</p>
        </section>
        <section>
            <img src="images/image_css3.svg" alt="logo langage CSS" title="logo langage CSS"/>
            <p>CSS3</p>
        </section>
        <section>
            <img src="images/logo-php.png" alt="logo langage php" title="logo langage php"/>
            <p>PHP</p>
        </section>
        <section>
            <img src="images/image_jquery.svg" alt="logo framework jquery" title="logo framework jQuery"/>
            <p>jQuery</p>
        </section>
        <section>
            <img src="images/image_bootstrap.svg" alt="logo Bootstrap" title="logo Bootstrap"/>
            <p>Bootstrap</p>
        </section>
        <section>
            <img src="images/image_wordpress.png" alt="logo Wordpress" title="logo Wordpress"/>
            <p>Wordpress</p>
        </section>
    </article>

    <h2 class="c1">Bases de données</h2>
    <article class="c1">
        <section>
            <img src="images/image_postgresql.svg" alt="logo postgresql" title="logo postgresql"/>
            <p>PostgreSQL</p>
        </section>
        <section>
            <img src="images/MySQL.svg" alt="logo mysql" title="logo mysql"/>
            <p>MySQL</p>
        </section>
    </article>

    <h2 class="c2">Gestion de projets</h2>
    <article class="c2">
        <section>
            <img src="images/image_uml.png" alt="logo UML" title="logo UML"/>
            <p>UML</p>
        </section>
        <section>
            <img src="images/git.svg" alt="logo Git" title="logo Git"/>
            <p>Git</p>
        </section>
    </article>

    <h1 class="ent  re">LANGUES</h1>


    <article class="c1 langues">
        <section>
            <h2>Anglais</h2>
            <img src="images/drapeau-royaume-uni.jpg" alt="drapeau Royaume-Uni" title="Royaume-Uni" class="img-circle"/>
            <hr>
            <p>Pratique régulière avec en moyenne 4h de cours par semaine</p>
            <p>Niveau B2</p>
        </section>
        <hr/>
        <section>
            <h2>Espagnol</h2>
            <img src="images/drapeau-espagne.jpg" alt="drapeau Espagne" title="Espagne" class="img-circle"/>
            <hr>
            <p>Pratique occasionnelle </p>
            <p>Niveau A1</p>
        </section>
    </article>

</main>


</body>
