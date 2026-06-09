<?php
    function add($num1, $num2) {
        $sum = $num1 + $num2;
        return $sum;
    }

    $total = add(10, 20);
    echo "The sum is: ". $total;
?>