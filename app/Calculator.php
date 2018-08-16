<?php

namespace App;

class Calculator
{
    public function calculateTotal($x, $y) 
    {
        $z = $x + $y;
        return $z;
    }

    public function remining_money($x, $y) 
    {
        $z = $x - $y;
        return $z;
    }

    public function percentage($x, $y) 
    {
        $z = ($x / $y)*100;
        return $z;
    }

    public function NoIncomePercentage($x, $y) 
    {
        if($y == 0)
            return "0";
        $z = ($x / $y)*100;
        return $z;
    }    
}