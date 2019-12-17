<?php
echo "<h3>Sort Array in Ascending Order</h3>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
echo "<br/>";
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo "<br/>";
?>

<?php
echo "<h3>Sort Array in Descending Order </h3>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
echo "<br/>";
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
echo "<br/>";
?>

<?php
echo "Sort Array (Ascending Order), According to value ";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
echo "<br/>";
?>
<?php
echo "Sort Array (Ascending Order), According to key";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
echo "<br/>";
?>

<?php
echo "Sort Array (Descending Order), According to value ";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
echo "<br/>";
?>

<?php
echo "Sort Array (Descending Order), According to key ";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
echo "<br/>";
?>




