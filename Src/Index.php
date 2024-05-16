<?php

require "vendor/autoload.php";

$Toyota = new Toyota("Toyota Fortuner", 10);
$Calculator = new Calculator($Toyota);
echo "Jarak maksimum".$Toyota->getMerk().$Calculator->hitungjarak()."km";
echo "<hr>";

$Honda = new Honda("Honda Brio", 10);
$Calculator = new Calculator($Honda);
echo "Jarak maksimum".$Honda->getMerk().$Calculator->hitungjarak()."km";
