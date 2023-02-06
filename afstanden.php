<?php

echo "Geef een waarde en een grootte.\n";
echo "Grootheden zijn: kilometer, hectometer, decameter, meter, decimeter, centimeter, millimeter.\n";

$waardeVoor = readline("Geef een waarde: ");
$waardeNa = "";
$grootheidVoor = readline("Geef een grootheid: ");
$gewensteGrootheid = readline("Geef een gewenste grootheid: ");

if (is_numeric($waardeVoor && $grootheidVoor != $gewensteGrootheid)) {
    //berekening omzetten afstanden
    //$waardeNa =

    echo "Welke waarde: " . $waardeVoor;
    echo "Welke grootheid" . $grootheidVoor;
    echo "Welke gewenste grootheid: " . $gewensteGrootheid;
    echo $waardeVoor . " " . $grootheidVoor . " = " . $waardeNa . " " . $gewensteGrootheid;
} else {
    echo "Voer een geldige waarde in.\n";
    echo "Denk er aan dat de grootheid niet gelijk mag zijn aan de gewenste grootheid.\n";
}

?>