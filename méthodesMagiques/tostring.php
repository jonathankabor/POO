<?php

class MaClasse
{
    protected $texte;

    public function __construct($texte)
    {
        $this->texte = $texte;
    }

    public function __toString()
    {
        return $this->texte;
    }
}

$obj = new MaClasse('Hello world !');

// Solution 1 : le cast

$texte = (string)$obj;
var_dump($texte); // Affiche : string(13) "Hello world !".

// Solution 2 : directement dans un echo
echo $obj; // Affiche : Hello world !