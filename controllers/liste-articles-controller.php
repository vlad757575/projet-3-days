<?php


function liste()
{
    require_once __DIR__ . '/../models/Article.php';
    $articles = Article::all();

    include __DIR__ . '/../views/liste-articles.php';
}
