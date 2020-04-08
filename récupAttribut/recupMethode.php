<?php

class A
{
    public function hello($arg1, $arg2, $arg3 = 1, $arg4 = 'Hello world !')
    {
        echo 'Hello world !';
    }
}

$classeA = new ReflectionClass('A');
$methode = $classeA->getMethod('hello');