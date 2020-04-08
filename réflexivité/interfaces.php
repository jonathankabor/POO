<?php

$classeIMagicien = new ReflectionClass('iMagicien');

if ($classeIMagicien->isInterface()) {
    echo 'La classe iMagicien est une interface';
} else {
    echo 'La classe iMagicien n\'est pas une interface';
}