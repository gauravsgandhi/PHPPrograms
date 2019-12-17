<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("d-m-Y") . "<br>";
echo "Today is " . date("m-d-Y") . "<br>";
echo "Today is " . date("l");
?>

<?php
echo "<br/>";
echo "&copy; 2010-" ;echo date("Y");
?>


<?php
echo "<br/>";
echo "The time is " . date("y-m-d h:i:sa");
?>


<?php
echo "<br/>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

<?php
echo "<br/>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<?php
echo "<br/>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<?php
echo "<br/>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";


$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>







