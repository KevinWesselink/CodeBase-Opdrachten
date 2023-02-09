<?php

$grootheden = array("kilometer", "hectometer", "decameter", "meter", "decimeter", "centimeter", "millimeter");

echo "Geef een waarde en een grootte.\n";
echo "Geldige grootheden zijn: kilometer, hectometer, decameter, meter, decimeter, centimeter, millimeter.\n";

$waardeVoor = readline("Geef een waarde: ");
$waardeNa = "";
$grootheidVoor = readline("Geef een grootheid: ");
$gewensteGrootheid = readline("Geef een gewenste grootheid: ");

if (is_numeric($waardeVoor && $grootheidVoor != $gewensteGrootheid)) {
    if ($grootheidVoor == $grootheden[0] || $grootheidVoor == $grootheden[1] || $grootheidVoor == $grootheden[2] || $grootheidVoor == $grootheden[3] || $grootheidVoor == $grootheden[4] || $grootheidVoor == $grootheden[5] || $grootheidVoor == $grootheden[6]) {
        //berekening omzetten afstanden
        //$waardeNa =

        echo "Welke waarde: " . $waardeVoor;
        echo "Welke grootheid" . $grootheidVoor;
        echo "Welke gewenste grootheid: " . $gewensteGrootheid;
        echo $waardeVoor . " " . $grootheidVoor . " = " . $waardeNa . " " . $gewensteGrootheid;
    } else {
        echo "De grootheid die je hebt ingevuld is niet geldig.";
    }
} else {
    echo "Voer een geldige waarde in.\n";
    echo "Denk er aan dat de grootheid niet gelijk mag zijn aan de gewenste grootheid.\n";
}

?>