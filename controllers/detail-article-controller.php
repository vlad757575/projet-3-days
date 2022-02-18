<?php
include __DIR__ . '/../models/Article.php';



function details()
{
    if (empty($_GET['id'])) die('Erreur 404');

    // On appelle le modèle
    $articles = Article::retrieveByPK($_GET['id']);

    if (empty($articles)) die('Erreur 404');

    // On appelle la vue
    include __DIR__ . '/../views/detail-article.php';
}
