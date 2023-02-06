<?php

$aantalLiterInTankVoorRit = readline("Hoeveel liter zat er in de tank voor de rit? ");
$aantalLiterInTankNaRit = readline("Hoeveel liter zat er in de tank na de rit? ");
$kilometerStandVoorRit = readline("Wat was de kilometerstand voor de rit? ");
$kilometerStandNaRit = readline("Wat was de kilometerstand na de rit? ");

if ($aantalLiterInTankVoorRit > $aantalLiterInTankNaRit && $kilometerStandVoorRit < $kilometerStandNaRit) {
    $gemiddeldeGebruikVanRit = (100 * ($aantalLiterInTankVoorRit - $aantalLiterInTankNaRit) / ($kilometerStandNaRit - $kilometerStandVoorRit));
    echo 'Het gemiddelde verbruik van de auto tijdens de rit was' . ' ' . number_format($gemiddeldeGebruikVanRit, 2, ',');
} else {
    echo 'Het programma gaat er niet van uit dat je tank-inhoud toeneemt of dat je kilometerstand afneemt tijdens de rit, probeer het opnieuw.';
}

?>