//**Opdracht 1 */
<?php

$uur = date("H");



if ($uur >= 6 && $uur < 12) {
    $dagdeel = "ochtend";
} else if ($uur >= 12 && $uur < 18) {
    $dagdeel = "middag";
} else if ($uur >= 18 && $uur < 24) {
    $dagdeel = "avond";
} else {
    $dagdeel = "nacht";
}

echo "het is" . $dagdeel;
?>

//**Opdracht 2 */

<?php 

$uur = date("H");
$dagdeel = match (true) {
    $uur >= 6 && $uur < 12 => "Het is ochtend",
    $uur >= 12 && $uur < 18 => "Het is middag",
    $uur >= 18 && $uur < 24 => "Het is avond",
    default => "Het is nacht",
};


echo $dagdeel;
?>