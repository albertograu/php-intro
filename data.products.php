<?php
date_default_timezone_set('UTC');

// VARIABLES
$currentDate = date("D m/d/Y");

// ARRAYS
//$products = [
//    'Vinopure',
//    'Premier Cru',
//    'Vinosource',
//    'Vine[Activ]',
//    'Resveratrol',
//    'Divine Body',
//    'Thes Des Vignes',
//    'Hydration Collection'
//];

// ASSOCIATIVE ARRAY
$products = [
    'Vinopure Serum' => 49,
    'Vinopure Toner' => 28,
    'Vinopure Fluid' => 19,
    'Premier Cru Serum' => 150,
    'Premier Cru Eye' => 99,
    'Premier Cru Cream' => 140,
    'Premier Cru Oil' => 89,
    'Premier Cru Rich Cream' => 140,
    'Remove Me' => 'Free',
    'Beauty Elixir' => 49,
    'Grape Water' => 18,
    'Radiance Serum' => 79,
    'Moisturizing Sorbet' => 39
];
// ADD to existing Array
$products['Spa'] = 150;

// REMOVE from Array
unset($products['Remove Me']);


// VAR_DUMP() : Dump Values
//die(var_dump($products));

// CONCACTENATE with . (dot)
$response = 'Today is ' . $currentDate;