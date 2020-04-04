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
