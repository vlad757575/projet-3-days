<?php

function connexion()
{

    include __DIR__ . '/../views/connexion.php';
}

function connexion_handler()
{
    // var_dump($_POST);
    // die;
    if (!empty($_POST['login']) && !empty($_POST['password'])) {


        include __DIR__ . '/../models/Utilisateur.php';
        $utilisateur = Utilisateur::retrieveByField('identifiant', $_POST['login'], SimpleOrm::FETCH_ONE);

        if (!empty($utilisateur)) {



            if (password_verify($_POST['password'], $utilisateur->mot_de_passe)) {

                $_SESSION['pseudo'] = $utilisateur->pseudo;
                $_SESSION['id'] = $utilisateur->id;

                redirection('home');
            } else die('Erreur de mot de passe');
        }
    }

    redirection('connexion');
}

// function deconnexion()
// {
//     session_destroy();
//     redirection('home');
// }
