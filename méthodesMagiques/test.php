<?php

session_start();

if (!isset($_SESSION['connexion'])) {
    $connexion = new Connexion('localhost', 'root', '', 'tests');
    $_SESSION['connexion'] = $connexion;

    echo 'Actualisez la page !';
} else {
    echo '<pre>';
    var_dump($_SESSION['connexion']); // On affiche les infos concernant notre objet.
    echo '</pre>';
}