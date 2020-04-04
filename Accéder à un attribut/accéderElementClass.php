<?php
class Personnage
{
    private $_experience = 50;
// dabord afficher l'expérience
    public function afficherExperience()
    {
        echo $this->_experience;
    }
//Faire évoluer l'expérience ensuite
    public function gagnerExperience()
    {
        // On ajoute 1 à notre attribut $_experience.
        $this->_experience = $this->_experience + 1;
    }
}

$perso = new Personnage;
$perso->gagnerExperience();   // On gagne de l'expérience.
$perso->afficherExperience(); // On affiche la nouvelle valeur de l'attribut.
