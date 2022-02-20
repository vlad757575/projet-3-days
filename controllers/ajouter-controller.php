<?php
include __DIR__ . '/../models/Article.php';


function ajouter()
{
    // if (empty($_SESSION['pseudo']) || $_SESSION['pseudo'] != 'admin') die('Erreur 403');

    // On appelle la vue
    include __DIR__ . '/../views/ajouter.php';
}
function ajouter_handler()
{
    // if (empty($_SESSION['pseudo']) || $_SESSION['pseudo'] != 'admin') die('Erreur 403')

    // On vérifie le formulaire
    if (
        !empty($_POST['titre'])
        && !empty($_POST['image'])
        && !empty($_POST['auteur'])
        && !empty($_POST['contenu'])

        // && is_numeric($_POST['stock'])
        // && is_numeric($_POST['prix'])

        // On vérifie que l'image est une URL valide
        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
    ) {
        // On appelle notre modèle
        // Pour créer un nouveau produit

        $article = new Article;

        $article->titre = $_POST['titre'];
        $article->image = $_POST['image'];
        $article->auteur = $_POST['auteur'];
        $article->contenu = $_POST['contenu'];

        $article->save();

        redirection('liste-articles');
    } else redirection('ajouter');
};
