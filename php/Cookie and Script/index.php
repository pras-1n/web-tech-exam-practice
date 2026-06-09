<?php
    $cookie_name="user";
    $cookie_value="Shyam";

    setcookie($cookie_name, $cookie_value, time() + 86400, "/");

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named" .$cookie_name. "is not set!";
    } else {
        echo "Cookie".$cookie_name. "is set!"
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?>