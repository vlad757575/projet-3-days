<?php
function deconnexion()
{
    session_destroy();
    redirection('articles');
}
