<?php
$cookie_name = "username";
$cookie_value = "sneha";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$cookie_name])) {
 echo "Cookie name '" . $cookie_name . "' is not set!";
} else {
 echo "Cookie '" . $cookie_name . "' is set!<br>";
 echo "Value is: " . $_COOKIE[$cookie_name];
}
setcookie($cookie_name," ", time() -3600, "/"); 
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie name '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}

?> 
