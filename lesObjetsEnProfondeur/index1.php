<?php

class MaClasse
{
    private static $instances = 0;

    public function __construct()
    {
        self::$instances++;
    }

    public function __clone()
    {
        self::$instances++;
    }

    public static function getInstances()
    {
        return self::$instances;
    }
}

$a = new MaClasse;
$b = clone $a;

echo 'Nombre d\'instances de MaClasse : ', MaClasse::getInstances();