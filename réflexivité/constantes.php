<?php

if ($classePersonnage->hasConstant('NOUVEAU')) {
    echo 'La classe Personnage possède une constante NOUVEAU (celle ci vaut ', $classePersonnage->getConstant('NOUVEAU'), ')';
} else {
    echo 'La classe Personnage ne possède pas de constante NOUVEAU';
}