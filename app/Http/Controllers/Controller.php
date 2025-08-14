<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function test()
    {
        $a = 5;
        $b = 10;
        $sum = $a + $b;

        return $sum * 10;
    }
}
