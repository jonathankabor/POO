<?php

interface iMaClasse
{
    public function methode1();

    public function methode2();
}

class MaClasse implements iMaClasse
{
    protected $attribut;

    public function methode()
    {

    }

    // Ne pas oublier d'implémenter les méthodes de l'interface !

    public function methode1()
    {

    }

    public function methode2()
    {

    }
}