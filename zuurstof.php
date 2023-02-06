<?php

echo "Programma staat alleen gehele getallen toe.\n";
$liter = readline("Cilinderinhoud (liter): ");
$bar = readline("Druk op de manometer (bar): ");
$literPerMinuut = readline("Benodigd aantal liter zuurstof per minuut: ");

if (is_numeric($liter) && is_numeric($bar)) {
    if ($liter > 0 && $bar > 0) {
        $aantalMinuten = $liter * $bar / $literPerMinuut;
        echo 'De patient kan de fles nog ' . $aantalMinuten . ' minuten gebruiken.';
    } else {
        echo "Cilinderinhoud en druk moeten groter zijn dan 0.";
    }
} else {
    echo "Cilinderinhoud en druk moeten gehele getallen zijn.";
}

?>