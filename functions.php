<?php

function view(string $nom): string
{
    return __DIR__ . '/views/' . $nom . '.php';
}
