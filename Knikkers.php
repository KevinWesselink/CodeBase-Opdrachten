<?php

$getal = readline("Geef een getal. (Maximaal 20)");

//For loopje nodig, om te blijven loopen, indien getal niet binnen 1 en 20 valt.
if ($getal >= 1 && $getal <= 20) {
    //Code
} else {
    $getal = readline("Probeer het opnieuw.");
}

?>