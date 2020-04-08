<?php

$classeA = new ReflectionClass('A');
$methode = $classeA->getMethod('hello');

if ($methode->isConstructor()) {
    echo 'La méthode ', $methode->getName(), ' est le constructeur';
} elseif ($methode->isDestructor()) {
    echo 'La méthode ', $methode->getName(), ' est le destructeur';
}