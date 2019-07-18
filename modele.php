<?php

function connexion()
{
    $bdd=NULL;

    $username='3097417_siteperso';
    $host='fdb20.biz.nf';
    $port='3306';
    $dbname = '3097417_siteperso';
    $password="Pp0t0gwXKCxr";

    try {
        $bdd = new PDO("mysql:host=$host;port=$port;dbname=$dbname", "$username", "$password");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $bdd;
}

function incrementVisitors(PDO $bdd, $page){
    $getValue = $bdd->prepare("SELECT nombre from 3097417_siteperso.visiteurs where page = :page");
    $setValue = $bdd->prepare("UPDATE 3097417_siteperso.visiteurs SET nombre = :nombre WHERE page = :page");
    try {
        $nombre = $getValue->execute(array(
            "page" => $page,
        ));
        $getValue->closeCursor();

        $setValue->execute(array(
            "page" => $page,
            "nombre" => $nombre,
        ));
        $setValue->closeCursor();

        echo "ca a fonctionné";
    }
    catch (PDOException $e) {
        echo "ca n'a pas fonctionné";
    }

}

