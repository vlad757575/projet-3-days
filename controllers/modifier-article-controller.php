<?php
function modifier()
{
    if (empty($_GET['id'])) erreur(404);

    require_once model('Article');
    $article = Article::retrieveByPK($_GET['id']);

    if (empty($article)) erreur(404);

    if (!empty($_POST)) {
        if (
            !empty($_POST['titre'])
            && !empty($_POST['image'])
            && !empty($_POST['auteur'])
            && !empty($_POST['contenu'])
        ) {
            $article->titre = $_POST['titre'];
            $article->image = $_POST['image'];
            $article->auteur = $_POST['auteur'];
            $article->contenu = $_POST['contenu'];
            $article->save();

            redirection('articles');
        } else $error = true;
    }

    require_once view('modifier');
}
