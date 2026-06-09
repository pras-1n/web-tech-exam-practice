<?php
    $products = array (
        array("P001", "Laptop", 80000),
        array("P002", "Mobile", 25000),
        array("P003", "Tablet", 35000)
    );
?>

<table border="1">
    <tr>
        <th>PCode</th>
        <th>PName</th>
        <th>Price</th>
    </tr>
    <?php
        for($row=0; $row<count($products); $row++) {
            echo "<tr>";
            for ($col = 0; $col < 3; $col++) {
                echo "<td>" .products[$row][$col]."</td>";
            }
            echo "</tr>";
        }
    ?>
</table>