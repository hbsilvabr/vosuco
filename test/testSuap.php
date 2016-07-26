#!/usr/bin/php
<?php

require_once(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'agi' . DIRECTORY_SEPARATOR . 'Suap.php');

class TestSuap
{
    private $suap;

    function __construct()
    {
        $this->suap = new Suap('123','123#');
    }

    public function testLogged()
    {
        if ($this->suap->isLogged())
        {
            return true;
        }
        return false;
    }
}

$t = new TestSuap();
var_dump($t->testLogged());


?>
