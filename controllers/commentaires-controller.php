<?php
include __DIR__ . '/../models/Commentaire.php';


function commentaires()
{

    include __DIR__ . '/../views/detail-article.php';
}
function ajout_commentaires()
{

    if (

        !empty($_POST['contenu'])

    ) {


        $commentaires = new Commentaire;


        $commentaires->contenu = $_POST['contenu'];

        $commentaires->save();

        redirection('detail-article');
    };
};
