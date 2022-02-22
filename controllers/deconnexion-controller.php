<?php
function deconnexion()
{
    session_destroy();
    //ceci n'est pas un gateau//
    setcookie('cookie', '', 0);
    redirection('articles');
}
