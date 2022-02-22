<?php



include __DIR__ . '/../models/Utilisateur.php';


function creation_compte()
{

    if (
        !empty($_POST['pseudo'])
        && !empty($_POST['identifiant'])
        && !empty($_POST['password'])
        && !empty($_POST['avatar'])
        && filter_var($_POST['avatar'], FILTER_SANITIZE_URL) !== false
        && !empty($_POST['confirmer'])
        && ($_POST['password'] === $_POST['confirmer'])

    ) {


        $utilisateur = new Utilisateur;

        $utilisateur->avatar = $_POST['avatar'];
        $utilisateur->pseudo = $_POST['pseudo'];
        $utilisateur->identifiant = $_POST['identifiant'];
        $utilisateur->mot_de_passe = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $utilisateur->save();

        $_SESSION['pseudo'] = $utilisateur->pseudo;
        $_SESSION['identifiant'] = $utilisateur->identifiant;
        $_SESSION['avatar'] = $utilisateur->avatar;
        $_SESSION['role'] = $utilisateur->role;
        $_SESSION['id'] = $utilisateur->id;
        //ceci n'est pas un gateau//
        if (!empty($_POST['cookie']))
            setcookie('cookie', $utilisateur->id, time() + 30000000);

        redirection('home');
    } else include __DIR__ . '/../views/creation-compte.php';
};
