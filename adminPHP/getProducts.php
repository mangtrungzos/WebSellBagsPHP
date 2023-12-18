<?php
require_once "../DB/ConnectDB.php";

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table id="tablebody" class="table-body"
        style="border: 1px solid #aab7b8;">';

    while ($row = $result->fetch_assoc()) {
        // Access individual fields in the $row array
        $productId = $row['id'];
        $productName = $row['productName'];
        $productImage = $row['productImage'];  // Assuming the column name is "product_image"
        $productDescription = $row['productDescription'];
        $productQuantity = $row['productQuantity'];

        // Output a table row with the product information
        echo "<tr>";
        echo "<td class='border-left' style='text-align:center'>$productId</td>";
        echo "<td style='width: 100px; padding-left: 30px' class='border-left'>$productName</td>";
        echo "<td style='text-align:left; padding-left: 30px; width: 330px' class='border-left'><img src='$productImage' alt='Product Image' '></td>";
        echo "<td style='text-align:left; class=border-left; width: 290px'>$productDescription</td>";
        echo "<td style='text-align:left' class='border-left'>$productQuantity</td>";
        echo "<td class='border-left'>";
        echo "<button onclick='editProduct($productId)'>Edit</button>";
        echo "<button onclick='deleteProduct($productId)'>Delete</button>";
        echo "</td>";
        echo "</tr>";
        
    }

    echo '</table>';
} else {
    echo 'No products in the cart.';
}

$conn->close();
?>
