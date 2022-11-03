<?php

$opgegooideKnikkers = 1;
$knikkers = readline("Kies een getal tussen de 1 en 20.\n");

if ( $knikkers >= 1 && $knikkers <= 20 ) {
    while ($knikkers != 0) {
        if ($opgegooideKnikkers == 1) {
            $knikkers--;
            echo $opgegooideKnikkers . " knikker opgegooid, nog " . $knikkers . " in mijn zak.\n";
            $opgegooideKnikkers++;
        } else {
            $knikkers--;
            echo $opgegooideKnikkers . " knikkers opgegooid, nog " . $knikkers . " in mijn zak.\n";
            $opgegooideKnikkers++;
        }
    }
} else {
    exit("Je invoer lag niet tussen de 1 en 20, het programma wordt nu afgesloten.");
}

?>