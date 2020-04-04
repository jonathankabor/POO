<?php

abstract class Personnage // Notre classe Personnage est abstraite.
{

}

class Magicien extends Personnage // Création d'une classe Magicien héritant de la classe Personnage.
{

}

$magicien = new Magicien; // Tout va bien, la classe Magicien n'est pas abstraite.
//$perso = new Personnage; // Erreur fatale car on instancie une classe abstraite.
