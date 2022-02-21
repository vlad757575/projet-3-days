<?php

require_once model('SimpleOrm');

class Utilisateur extends SimpleOrm
{
    public $id, $email, $password, $pseudo, $identifiant, $avatar, $role;
}
