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
            "nombre" => $nombre+1,
        ));
        $setValue->closeCursor();
    }
    catch (PDOException $e) {
        /* On ne fait rien puisque cela doit être invisible pour l'utilisateur */
    }

}

function getVistorsPageInformations(PDO $bdd, $page){
    $getValue = $bdd->prepare("SELECT nombre from 3097417_siteperso.visiteurs where page = :page");
    try {
        $nombre = $getValue->execute(array(
            "page" => $page,
        ));
        $getValue->closeCursor();

        return $nombre;
    }
    catch (PDOException $e) {
        return "error";
    }
}

function resetVisitorsNumber(PDO $bdd){
    $setValue = $bdd->prepare("UPDATE 3097417_siteperso.visiteurs SET nombre = 0");
    /* Lorsqu'il n'y a pas de clause WHERE il remet tous les champs à 0 */
    try {
        $setValue->execute();
        $setValue->closeCursor();

        return "reussi";
    }
    catch (PDOException $e) {
        return "error";
    }

}
