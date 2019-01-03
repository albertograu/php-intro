<?php
// Die, Dump function
//function dd($val){
//    echo '<pre>';
//    die(var_dump($val));
//    echo '</pre>';
//}

function add($x, $y) {
   echo $x + $y;
}

function canDrink($age) {
    $legalAge = 21;

    echo $age >= $legalAge ? 'Allowed' : 'Not allowed';
}

canDrink(20);