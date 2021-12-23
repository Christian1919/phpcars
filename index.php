<?php
// var_export($car1);
// echo '<hr>';
// var_export($dodge);

require './Car.php';


$car1 = new Car(1, "Ford Mustang");
$car2 = new Car(2, "Dodge Charger");


echo "<p>";
echo $car1->getName();
echo "</p>";

$car1->setName("Dodge Challenger");
echo "<p>";
echo $car1->getName();
echo "</p>";


echo "<p>";
echo $car2->getName();
echo "</p>";
