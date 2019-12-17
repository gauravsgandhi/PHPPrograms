<?php
echo "<h3>Associative array</h3>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br/><br/><br/>";
?>



<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br><br/>";
}
?>


<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r($age);

?>