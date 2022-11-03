<?php

$ster = "*";
$teller = 1;

while ($teller < 6) {
    if ($teller == 1) {
        echo $ster . " \n";
        $teller++;
    } else if ($teller == 2) {
        echo $ster . " ";
        echo $ster . " \n";
        $teller++;
    } else if ($teller == 3) {
        echo $ster . " ";
        echo $ster . " ";
        echo $ster . " \n";
        $teller++;
    } else if ($teller == 4) {
        echo $ster . " ";
        echo $ster . " ";
        echo $ster . " ";
        echo $ster . " \n";
        $teller++;
    } else if ($teller == 5) {
        echo $ster . " ";
        echo $ster . " ";
        echo $ster . " ";
        echo $ster . " ";
        echo $ster . " \n";
        $teller++;
        break;
    }
}

?>