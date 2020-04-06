<?php
//Vous pouvez très bien implémenter plus d'une interface
// par classe, à condition que celles-ci n'aient aucune
// méthode portant le même nom ! Exemple :


interface iA
{
    public function test1();
}

interface iB
{
    public function test2();
}

class A implements iA, iB
{
    // Pour ne générer aucune erreur, il va falloir écrire les méthodes de iA et de iB.

    public function test1()
    {

    }

    public function test2()
    {

    }
}