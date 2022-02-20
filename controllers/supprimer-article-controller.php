<?php

if (empty($_POST['id'])) erreur(404);

require_once model('Contact');
$article = Article::retrieveByPK($_POST['id']); // Retrieve by ID (retrieve one)

if (empty($carticle)) erreur(404);

$article->delete();

redirection('liste-articles');
