<?php

class Observer1 implements SplObserver
{
    public function update(SplSubject $obj)
    {
        echo 'Observer1 a été notifié ! Nouvelle valeur de l\'attribut <strong>nom</strong> : ', $obj->getNom();
    }
}

class Observer2 implements SplObserver
{
    public function update(SplSubject $obj)
    {
        echo 'Observer2 a été notifié ! Nouvelle valeur de l\'attribut <strong>nom</strong> : ', $obj->getNom();
    }
}