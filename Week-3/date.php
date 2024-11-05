<?php
$today = date ("l j F Y");
echo " Vandaag is het: $today .";

echo "<br>";

$day = date (" z");
echo " Vandaag is het de $day e  dag van het jaar.";

echo "<br>";

$dayOfTheWeek = date("l");
$numericDay = date("w");
echo "$dayOfTheWeek is de $numericDay e dag van de week.";

echo "<br>";

$month = date ("F");
$daysInMonth = date ("t");
echo "De maand , $month heeft in totaal $daysInMonth dagen."



?>