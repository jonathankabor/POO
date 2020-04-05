<?php

$obj = new MaClasse;
//$obj('Petit test'); // Utilisation de l'objet comme fonction.
class MaClasse
{
    public function __invoke($argument)
    {
        echo $argument;
    }
}

$obj = new MaClasse;

$obj(5); // Affiche « 5 ».