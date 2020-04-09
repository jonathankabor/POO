<?php

class Observee implements SplSubject
{
    // Ceci est le tableau qui va contenir tous les objets qui nous observent.
    protected $observers = [];

    // Dès que cet attribut changera on notifiera les classes observatrices.
    protected $nom;

    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        if (is_int($key = array_search($observer, $this->observers, true))) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        $this->notify();
    }
}