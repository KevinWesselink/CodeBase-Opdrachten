<?php

$grootheden = array("kilometer", "hectometer", "decameter", "meter", "decimeter", "centimeter", "millimeter");

echo "Geef een waarde en een grootte.\n";
echo "Geldige grootheden zijn: kilometer, hectometer, decameter, meter, decimeter, centimeter, millimeter.\n";

$waardeVoor = readline("Geef een waarde: ");
$waardeNa = "";
$grootheidVoor = readline("Geef een grootheid: ");
$gewensteGrootheid = readline("Geef een gewenste grootheid: ");

if (is_numeric($waardeVoor) && $grootheidVoor != $gewensteGrootheid) {
    if ((in_array($grootheidVoor, $grootheden) && in_array($gewensteGrootheid, $grootheden))) {
        //berekening omzetten afstanden
        $indexVoor = array_search($grootheidVoor, $grootheden);
        $indexNa = array_search($gewensteGrootheid, $grootheden);
        $verschil = $indexVoor - $indexNa;

        if ($verschil < 0) {
            $waardeNa = $waardeVoor * pow(10, -$verschil);
        } else {
            $waardeNa = $waardeVoor / pow(10, $verschil);
        }

        echo "\n";
        echo "Welke waarde: " . $waardeVoor . "\n";
        echo "Welke grootheid: " . $grootheidVoor . "\n";
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