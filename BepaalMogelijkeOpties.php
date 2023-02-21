<?php

$kostenWorst = 5;
$verpakteWorsten = 6;
$aantalWorsten = 0;
$kostenHamburger = 10;
$verpakteHamburgers = 20;
$aantalHamburgers = 0;
$kostenFrikandellen = 15;
$verpakteFrikandellen = 25;
$aantalFrikandellen = 0;
$budget = 100;

//Worsten: (budget - kostenHamburger - kostenFrikandellen) / kostenWorst = 8;
//Hamburgers: (budget - kostenWorst - kostenFrikandellen) / kostenHamburger = 8;
//Frikandellen: (budget - kostenWorst - kostenHamburger) / kostenFrikandellen = 6;

for ($w = 0; $w <= 8; $w++) {
    //echo
    for ($h = 0; $h <= 8; $h++) {
        //echo
        for ($f = 0; $f <= 6; $f++) {
            //echo
        }
    }
}

?>