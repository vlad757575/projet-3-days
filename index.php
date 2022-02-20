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



    default:
        die('Erreur 404');
}
