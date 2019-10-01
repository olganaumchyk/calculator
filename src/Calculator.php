<?php

namespace App;

class Calculator
{

    public function sum(...$values)
    {
        $s = 0;

        foreach ($values as $value) {
            $s += $value;
        }

        return $s;
    }

    public function pow($base, $exp)
    {
        return pow($base, $exp);
    }

    public function minus($a,$b){

        return $a - $b;
    }

    public function delen($a,$b){
        return $a / $b;
    }

    public function procent($a,$b){
        return $a % $b;
    }

    public function mult($a,$b){
        return $a * $b;
    }
}
