<?php
// Vargjet me emra
$a[] = "Arta";
$a[] = "Bleta";
$a[] = "Ceka";
$a[] = "Drita";
$a[] = "Endrit";
$a[] = "Fidan";
$a[] = "Gegë";
$a[] = "Hadria";
$a[] = "Irma";
$a[] = "Jehon";
$a[] = "Kastriot";
$a[] = "Lindita";
$a[] = "Ndriçim";
$a[] = "Ora";
$a[] = "Petale";
$a[] = "Shkodra";
$a[] = "Rreze";
$a[] = "Ardian";
$a[] = "Dardan";
$a[] = "Alban";
$a[] = "Sopi";
$a[] = "Gashi";
$a[] = "Kelmendi";
$a[] = "Zaharia";

// merr q parametrin nga URL
$q = $_REQUEST["q"];

$hint = "";


if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
echo $hint === "" ? "no suggestion" : $hint;
?>