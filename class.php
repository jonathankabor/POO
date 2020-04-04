<?php

//Présence du mot-clé class suivi du nom de la classe.
//Création d'une classe

class Personnage
{
    // Déclaration des attributs et méthodes ici.
    private $_force = 50;        // La force du personnage, par défaut à 50.
    private $_localisation = 'Nantes'; // Sa localisation, par défaut à Nantes.
    private $_experience = 1;   // Son expérience, par défaut à 1.
    private $_degats = 0;       // Ses dégâts, par défaut à 0.


// Création de méthodes

    public function deplacer()
// Une méthode qui déplacera le personnage (modifiera sa localisation).
    {

    }

    public function frapper()
// Une méthode qui frappera un personnage (suivant la force qu'il a).
    {

    }

    public function gagnerExperience()
// Une méthode augmentant l'attribut $experience du personnage.
    {
// On ajoute 1 à notre attribut $_experience.
    }
}