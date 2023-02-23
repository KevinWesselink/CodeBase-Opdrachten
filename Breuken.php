<?php

$deelGetal = readline("Geef een deelgetal in: ");
$deler = readline("Geef een deler in: ");

if ($deelGetal % $deler != 0) {
    $heelGetal = floor($deelGetal / $deler);
    $decimaal = $deelGetal / $deler;
    $verschil = $decimaal - $heelGetal;
    $uitkomst = $verschil * $deler;
    echo $heelGetal . " " . $uitkomst . "/" . $deler;
} else {
    $uitkomst = $deelGetal / $deler;
    echo "De uitkomst is: " . $uitkomst;
}

?>