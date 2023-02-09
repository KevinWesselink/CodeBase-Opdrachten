<?php

$grootheden = array("kilometer", "hectometer", "decameter", "meter", "decimeter", "centimeter", "millimeter");

echo "Geef een waarde en een grootte.\n";
echo "Geldige grootheden zijn: kilometer, hectometer, decameter, meter, decimeter, centimeter, millimeter.\n";

$waardeVoor = readline("Geef een waarde: ");
$waardeNa = "";
$grootheidVoor = readline("Geef een grootheid: ");
$gewensteGrootheid = readline("Geef een gewenste grootheid: ");

if (is_numeric($waardeVoor) && $grootheidVoor != $gewensteGrootheid) {
    if ($grootheidVoor == $grootheden[0] || $grootheidVoor == $grootheden[1] || $grootheidVoor == $grootheden[2] || $grootheidVoor == $grootheden[3] || $grootheidVoor == $grootheden[4] || $grootheidVoor == $grootheden[5] || $grootheidVoor == $grootheden[6] && $gewensteGrootheid == $grootheden[0] || $gewensteGrootheid == $grootheden[1] || $gewensteGrootheid == $grootheden[2] || $gewensteGrootheid == $grootheden[3] || $gewensteGrootheid == $grootheden[4] || $gewensteGrootheid == $grootheden[5] || $gewensteGrootheid == $grootheden[6]) {
        //berekening omzetten afstanden
        $indexVoor = array_search($grootheidVoor, $grootheden);
        $indexNa = array_search($gewensteGrootheid, $grootheden);
        $verschil = $indexVoor - $indexNa;
        echo $verschil;
        //$waardeNa =

        echo "\n";
        echo "Welke waarde: " . $waardeVoor . "\n";
        echo "Welke grootheid" . $grootheidVoor . "\n";
        echo "Welke gewenste grootheid: " . $gewensteGrootheid . "\n";
        echo $waardeVoor . " " . $grootheidVoor . " = " . $waardeNa . " " . $gewensteGrootheid . "\n";
    } else {
        echo "Eén of meer grootheden die je hebt ingevuld zijn niet geldig.\n";
        echo "Geldige grootheden zijn: kilometer, hectometer, decameter, meter, decimeter, centimeter, millimeter.\n";
    }
} else {
    echo "Voer een geldige waarde in.\n";
    echo "Denk er aan dat de grootheid niet gelijk mag zijn aan de gewenste grootheid.\n";
}

?>