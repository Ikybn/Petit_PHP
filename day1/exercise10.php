<?php
$packages = array(["Amazon", 20, 45000], ["Cdiscount, 8, 192000"], ["etsy", 4, 68000]);

foreach ($packages as $package) {
    $name = $package[0];
    $weight = $package[1];
    $vilume = $package [2];
    if (($weight >= 10) || ($volume > 68000)) {
        echo "SPECIAL:" . $name, "<br/>";
    } else {
        echo "STANDARD:" . $name, "<br/>";
    }

}

?>