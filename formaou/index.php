<?php
session_start();
    require('views/Layout/header.php');


switch ($_SERVER['REQUEST_URI']) {
    case "/": $page = "accueil";           
        
        break;
    case '/accueil': $page = "accueil"; break;
    case '/connexion':
        $page = "Utilisateur/login";
        break;
    case '/inscription':
        $page = "Utilisateur/inscription";
        break;
    case '/compte':
        $page = "Utilisateur/compte";
}

if (isset($page)) {
    require('views/' . $page . '.php');
}

require('views/Layout/footer.php');