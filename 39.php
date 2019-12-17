<?php
echo "<h3>Index array</h3>";
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br/>";
?>


<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br/>";
?>


<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>


<?php
$cars = array("Volvo", "BMW", "Toyota");
print_r($cars);
echo "<br/>";
?>
