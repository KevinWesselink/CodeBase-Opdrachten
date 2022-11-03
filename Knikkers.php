<?php

$teller = 1;
$knikkers = readline("Kies een getal tussen de 1 en 20.\n");

if ( $knikkers >= 1 && $knikkers <= 20 ) {
    while ($knikkers != 0) {
        if ($teller == 1) {
            $knikkers--;
            echo $teller . " knikker opgegooid, nog " . $knikkers . " in mijn zak.\n";
            $teller++;
        } else {
            $knikkers--;
            echo $teller . " knikkers opgegooid, nog " . $knikkers . " in mijn zak.\n";
            $teller++;
        }
    }
} else {
    exit("Je invoer lag niet tussen de 1 en 20, het programma wordt nu afgesloten.");
}

?>