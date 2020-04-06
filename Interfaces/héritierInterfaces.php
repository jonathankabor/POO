<?php
//Comme pour les classes, vous pouvez hériter vos
// interfaces grâce à l'opérateurextends. Vous ne
// pouvez réécrire ni une méthode ni une constante qui
// a déjà été listée dans l'interface parente. Exemple


interface iA
{
    public function test1();
}

interface iB extends iA
{
    public function test1($param1, $param2); // Erreur fatale : impossible de réécrire cette méthode.
}

interface iC extends iA
{
    public function test2();
}

class MaClasse implements iC
{
    // Pour ne générer aucune erreur, on doit écrire les méthodes de iC et aussi de iA.

    public function test1()
    {

    }

    public function test2()
    {

    }
}
/*
interface iA
{
    public function test1();
}

interface iB
{
    public function test2();
}

interface iC extends iA, iB
{
    public function test3();
}

//
//interface iA
//{
//  public function test1();
//}
//
//interface iB
//{
//  public function test2();
//}
//
//interface iC extends iA, iB
//{
//  public function test3();
//}