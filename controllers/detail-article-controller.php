<?php
include __DIR__ . '/../models/Articles.php';
include __DIR__ . '/../models/Commentaire.php';


function details()
{
    if (empty($_GET['id'])) die('Erreur 404');

    $article = Article::retrieveByPK($_GET['id']);

    if (empty($article)) die('Erreur 404');

    $commentaires = Commentaire::retrieveByField('id_article', $_GET['id']);

    if (empty($commentaires)) die('Erreur 404');




    include __DIR__ . '/../views/detail-article.php';
}
