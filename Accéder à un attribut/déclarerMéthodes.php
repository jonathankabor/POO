<?php

// Nous créons une classe « Personnage ».
class Personnage
{
    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function parler()
    {
        echo 'Je suis un personnage !';
    }
}
//La ligne ci-dessous signifie donc qu'on va chercher l'objet perso
//et on invoque la méthode parler sur cet objet
$perso = new Personnage;
$perso->parler();
