<?php
echo $t = date("H");
echo "<br/>";
if ($t < "20") {
    echo "Have a good day!";
}
echo "<br/>";
?>

<?php
$t = date("H");

if ($t < "15") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
	
}
echo "<br/>";
?>

<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>


