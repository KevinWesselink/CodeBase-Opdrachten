<?php

$teller = 1;
$bedragTeller = 1;
$bedrag = array ();

$invoer = readline("Geef een bedrag in: ");

while ($invoer > 0) {
    if (is_numeric($invoer)) {
        "bedrag" . $teller = $invoer;
        echo "Bedrag " . $bedragTeller . " is: " . $invoer . " euro\n";
        array_push($bedrag, $teller);
        var_dump($bedrag);
        $teller++;
        $bedragTeller++;
        $invoer = readline("Geef een bedrag in: \n");
    } else {
        echo "Je moet een getal invoeren";
        //Breekt deze break de code af, of breekt het alleen uit dit gedeelte van de if statement?
        break;
    }
}

print_r(array_sum($bedrag))

?>