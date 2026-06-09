<?php
    session_start();
    $_SESSION["username"] = "Ram";
    echo "Welcome back," .$_SESSION["username"];
    session_destroy();
?>