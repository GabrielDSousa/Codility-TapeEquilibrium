<?php

/**
 * @param array $A
 * @return int
 */

function solution($A) : int
{
    $B = 0;
    $diff = null;
    $len = count($A)-1;
    $sum = array_sum($A);

    for ($i=0; $i < $len; $i++){
        $B += $A[$i];
        $sum -= $A[$i];

        $compare = abs($B - $sum);
        if ($compare < $diff || is_null($diff)){
            $diff = $compare;
        }
    }

    return $diff;
}
