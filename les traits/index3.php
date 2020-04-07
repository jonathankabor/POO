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
        saySomething as sayWhoYouAre;
    }
}

$o = new MaClasse;
$o->sayWhoYouAre(); // Affichera « Je suis le trait A ! »
$o->saySomething(); // Affichera « Je suis le trait A ! »