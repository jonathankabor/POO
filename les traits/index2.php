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
        saySomething as protected;
    }
}

$o = new MaClasse;
$o->saySomething(); // Lèvera une erreur fatale car on tente d'accéder à une méthode protégée.