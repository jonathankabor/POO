<?php
$classeMagicien = new ReflectionClass('Magicien');
$magicien = new Magicien(['nom' => 'vyk12', 'type' => 'magicien']);

//foreach ($classeMagicien->getProperties() as $attribut)
//{
   // $attribut->setAccessible(true);
    //echo $attribut->getName(), ' => ', $attribut->getValue($magicien);
