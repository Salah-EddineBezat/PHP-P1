<?php 

$getal = rand(1, 6);

echo "<p>Je hebt een $getal gegooid.</p>";

if($getal > 3) {
    echo "Je hebt gewonnen!";
} elseif($getal == 6) {
    echo "Je krijgt een speciale prijs!";
} else {
    echo " Helaas je hebt verloren.";
}
?>