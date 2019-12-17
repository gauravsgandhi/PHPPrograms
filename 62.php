<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
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
