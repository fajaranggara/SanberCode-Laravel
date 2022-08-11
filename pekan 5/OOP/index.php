<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';

echo "<h2> Class Animal </h2>";
$sheep = new Animal("ducky");
echo "Name: " . $sheep->name . "<br>"; // "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // 2
$sheep->get_cold_blooded(); // false

echo "<br> <br>";

echo "<h2> Class Ape </h2>";
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>";
echo "Legs: " . $sungokong->legs . "<br>";
$sungokong->get_cold_blooded(); // false
$sungokong->yell(); // "Auooo"

echo "<br> <br>";

echo "<h2> Class Frog </h2>";
$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "<br>";
echo "Legs: " . $kodok->legs . "<br>";
$kodok->get_cold_blooded(); // true
$kodok->jump(); // "hop hop"
?>