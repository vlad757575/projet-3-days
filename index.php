<?php

session_start();

include_once 'functions.php';

include_once 'models/SimpleOrm.php';
$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error)
    die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn, 'projet_php');


if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'home';


switch ($route) {
    case 'home':
        include __DIR__ . '/controllers/home-controller.php';
        break;

    case 'articles':
        include __DIR__ . '/controllers/liste-articles-controller.php';
        liste();
        break;

    case 'detail-article':
        include __DIR__ . '/controllers/detail-article-controller.php';
        details();
        break;

    case 'ajouter':
        include __DIR__ . '/controllers/ajouter-controller.php';
        ajouter();
        break;

    case 'ajouter-handler':
        include __DIR__ . '/controllers/ajouter-controller.php';
        ajouter_handler();
        break;

    case 'modifier-article':
        include __DIR__ . '/controllers/modifier-article-controller.php';
        modifier();
        break;

    case 'supprimer':
        include __DIR__ . '/controllers/supprimer-article-controller.php';
        supprimer();
        break;

    case 'connexion':
        include __DIR__ . '/controllers/connexion-controller.php';
        connexion();
        break;
    case 'connexion-handler':
        include __DIR__ . '/controllers/connexion-controller.php';
        connexion_handler();
        break;

    case 'deconnexion':
        include __DIR__ . '/controllers/deconnexion-controller.php';
        deconnexion();
        break;

    case 'creation-compte':
        include __DIR__ . '/controllers/creation-compte-controller.php';
        creation_compte();
        break;

        // case 'commentaires':
        //     include __DIR__ . '/controllers/commentaires-controller.php';
        //     display_commentaire();
        //     break;

    default:
        die('Erreur 404');
}
