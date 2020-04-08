<?php

$classePersonnage = new ReflectionClass('Personnage');

// Est-elle abstraite ?
if ($classePersonnage->isAbstract()) {
    echo 'La classe Personnage est abstraite';
} else {
    echo 'La classe Personnage n\'est pas abstraite';
}

// Est-elle finale ?
if ($classePersonnage->isFinal()) {
    echo 'La classe Personnage est finale';
} else {
    echo 'La classe Personnage n\'est pas finale';
}