<?php

trait A
{
    public function saySomething()
    {
        echo 'Je suis le trait A !';
    }
}

class MaClasse
{
    use A {
        saySomething as protected sayWhoYouAre;
    }
}

$o = new MaClasse;
$o->saySomething(); // Affichera « Je suis le trait A ! ».
//$o->sayWhoYouAre(); // Lèvera une erreur fatale, car l'alias créé est une méthode protégée.