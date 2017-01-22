<?php

class Program2
{
    private $prop1;
    private $prop2;

    public function run1(newProg $prog1)
    {
        echo 'Program2.run1<br>';
        $prog1->run1();
    }
    public function run2()
    {
        echo 'Program2.run2<br>';
    }
}