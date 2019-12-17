<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(isset($_COOKIE[$cookie_name])) {
echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
   
} else {
    
	 echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>

</body>
</html>
