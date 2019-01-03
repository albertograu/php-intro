<?php

function add($x, $y) {
   echo $x + $y;
}

function canDrink($age) {
    $legalAge = 21;

    echo $age >= $legalAge ? 'Allowed' : 'Not allowed';
}

canDrink(20);