<?php
abstract class Personnage
{
    // On va forcer toute classe fille à écrire cette méthode car chaque personnage frappe différemment.
    abstract public function frapper(Personnage $perso);

    // Cette méthode n'aura pas besoin d'être réécrite.
    public function recevoirDegats()
    {
        // Instructions.
    }
}

class Magicien extends Personnage
{
    // On écrit la méthode « frapper » du même type de visibilité que la méthode abstraite « frapper » de la classe mère.
    public function frapper(Personnage $perso)
    {
        // Instructions.
    }
}
