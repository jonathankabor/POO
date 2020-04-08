<?php

class A
{
    public static $attr1 = 'Hello world !';
    public static $attr2 = 'Bonjour le monde !';
}

$classeA = new ReflectionClass('A');

foreach ($classeA->getStaticProperties() as $attr) {
    echo $attr;
}

// À l'écran s'affichera Hello world ! Bonjour le monde !