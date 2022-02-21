<?php

function view(string $nom): string
{
    return __DIR__ . '/views/' . $nom . '.php';
}

function model(string $nom): string
{
    return __DIR__ . '/models/' . $nom . '.php';
}
function path(string $type, string $nom): string
{
    if ($type != 'model' && $type != 'view' && $type != 'controller') erreur();

    return __DIR__ . '/' . $type . 's/' . $nom . '.php';
}
function url(string $route = 'home'): string
{
    return 'index.php?route=' . $route;
}
function image(object $articles): string
{
    return ucfirst($articles->image);
}

function resum($description)
{
    $description;
    //nombre de caractères à afficher
    $max_caracteres = 100;
    // Test si la longueur du texte dépasse la limite
    if (strlen($description) > $max_caracteres) {
        // Séléction du maximum de caractères
        $description = substr($description, 0, $max_caracteres);
        // Récupération de la position du dernier espace (afin déviter de tronquer un mot)
        $position_espace = strrpos($description, " ");
        $description = substr($description, 0, $position_espace);
        // Ajout des "..."
        $description = $description . "...";
    }
    return $description;
}
function redirection($route)
{
    header('Location: index.php?route=' . $route);
    die;
}
function erreur(int $code = 500)
{
    echo 'Erreur ' . $code;
    die;
}
