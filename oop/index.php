<?php

require_once "frog.php";
require_once "ape.php";
require_once "animal.php";

$sheep = new animal("shaun");
echo "Name: " . $sheep->get_name() . "<br>";
echo "Legs: " . $sheep->get_legs() . "<br>";
echo "Cold Blooded: " . $sheep->get_cold_blooded() . "<br>";

echo "<br>";

$kodok = new frog("buduk");
echo "Name: " . $kodok -> getFrogName() . "<br>";
echo "Legs: " . $kodok -> getFrogLegs() . "<br>";
echo "Cold Blooded: " . $kodok -> getFrogBlood() . "<br>";
echo "Jump: " . $kodok -> getFrogJump();

echo "<br/><br>";

$ape = new ape("kera sakti");
echo "Name:" . $ape -> getApeName() . "<br>";
echo "Legs:" . $ape -> getApeLegs(). "<br>";
echo "Blood:" . $ape -> getApeBlood(). "<br>";
echo "Yell:" . $ape -> getApeYell(). "<br>";

?>