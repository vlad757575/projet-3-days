<?php
include __DIR__ . '/../models/Article.php';



function details()
{
    if (empty($_GET['id'])) die('Erreur 404');

    $article = Article::retrieveByPK($_GET['id']);

    if (empty($article)) die('Erreur 404');


    include __DIR__ . '/../views/detail-article.php';
}
