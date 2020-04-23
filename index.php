<?php

$array = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];

function insertionSort($arr)
{
    for ($i = 0 ; $i < count($arr) ; $i++){
        $loop = $i ;
        $current = $arr[$i];

        while ($loop > 0 && ($arr[$loop - 1] > $current)){
            $arr[$loop] = $arr[$loop - 1];
            $loop--;
        }
        $arr[$loop] = $current;
    }
    return $arr;
}

var_dump(insertionSort($array));