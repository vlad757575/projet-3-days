<?php
include __DIR__ . '/../models/Article.php';


function ajouter()
{

    include __DIR__ . '/../views/ajouter.php';
}
function ajouter_handler()
{
    if (empty($_SESSION['pseudo']) || $_SESSION['pseudo'] != 'admin') die('Erreur 403');
    if (
        !empty($_POST['titre'])
        && !empty($_POST['image'])
        && !empty($_POST['auteur'])
        && !empty($_POST['contenu'])
        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
        && $_SESSION
    ) {


        $article = new Article;

        $article->titre = $_POST['titre'];
        $article->image = $_POST['image'];
        $article->auteur = $_POST['auteur'];
        $article->contenu = $_POST['contenu'];

        $article->save();

        redirection('articles');
    } else redirection('ajouter');
};
