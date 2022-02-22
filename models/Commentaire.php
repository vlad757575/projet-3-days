<?php

require_once model('SimpleOrm');

class Commentaire extends SimpleOrm
{
    public $contenu, $id, $date_publication, $id_utilisateur, $id_article;
}
