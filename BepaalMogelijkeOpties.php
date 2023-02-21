<?php

$kostenWorst = 5;
$verpakteWorsten = 6;
$w = 0;
$kostenHamburger = 10;
$verpakteHamburgers = 20;
$h = 0;
$kostenFrikandellen = 15;
$verpakteFrikandellen = 25;
$f = 0;
$budget = 100;

//Worsten: (budget - kostenHamburger - kostenFrikandellen) / kostenWorst = 8;
//Hamburgers: (budget - kostenWorst - kostenFrikandellen) / kostenHamburger = 8;
//Frikandellen: (budget - kostenWorst - kostenHamburger) / kostenFrikandellen = 6;

for ($w = 0; $w <= 15; $w++) {
    berekenOpties($w, $h, $f, $kostenWorst, $kostenHamburger, $kostenFrikandellen, $budget, $verpakteWorsten, $verpakteHamburgers, $verpakteFrikandellen);
    for ($h = 0; $h <= 8; $h++) {
        berekenOpties($w, $h, $f, $kostenWorst, $kostenHamburger, $kostenFrikandellen, $budget, $verpakteWorsten, $verpakteHamburgers, $verpakteFrikandellen);
        for ($f = 0; $f <= 9; $f++) {
            berekenOpties($w, $h,$f, $kostenWorst, $kostenHamburger, $kostenFrikandellen, $budget, $verpakteWorsten, $verpakteHamburgers, $verpakteFrikandellen);
        }
    }
}

function berekenOpties($aantalWorsten, $aantalHamburgers, $aantalFrikandellen, $kostenWorst, $kostenHamburger, $kostenFrikandellen, $budget, $verpakteWorsten, $verpakteHamburgers, $verpakteFrikandellen) {
    if (($aantalWorsten * $kostenWorst) + ($aantalHamburgers * $kostenHamburger) + ($aantalFrikandellen * $kostenFrikandellen) == $budget) {
        $aantalWorsten++;
        $aantalHamburgers++;
        $aantalFrikandellen++;
        echo $aantalWorsten * $kostenWorst . " + " . $aantalHamburgers * $kostenHamburger . " + " . $aantalFrikandellen * $kostenFrikandellen . " = " . $budget . "\n";
        echo "Opties: " . $aantalWorsten * $verpakteWorsten . " worsten, " . $aantalHamburgers * $verpakteHamburgers . " hamburgers, " . $aantalFrikandellen * $verpakteFrikandellen . " frikandellen\n";
    }
}

?>