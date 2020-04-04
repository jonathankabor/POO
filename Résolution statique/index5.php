<?php
class A
{
    public function quiEstCe()
    {
        echo 'A';
    }
}

class B extends A
{
    public static function test()
    {
        parent::quiEstCe();
    }

    public function quiEstCe()
    {
        echo 'B';
    }
}

class C extends B
{
    public function quiEstCe()
    {
        echo 'C';
    }
}

C::test();