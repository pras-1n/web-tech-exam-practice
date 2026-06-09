<?php
function concatStrings($str1, $str2) {
    $result = $str1 . "" . $str2;
    echo "Concatenated"
}

concatStrings("Hello", "World");
?>