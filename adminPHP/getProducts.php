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
        $imagePath = "../adminPHP/uploads/" . basename($productImage);
        // Output a table row with the product information
        echo "<tr>";
        echo "<td class='border-left tbodyProduct' style='text-align:center; width: 77px'>$productId</td>";
        echo "<td style='width: 125px; padding-left: 30px' class='border-left tbodyProduct'>$productName</td>";
        echo "<td style='text-align:center;  width: 175px' class='border-left tbodyProduct'><img style='width: 70px; height: 100px' src='$imagePath' alt='Product Image' '></td>";
        echo "<td  class='border-left tbodyProduct' style='text-align:left; width: 255px'>$productDescription</td>";
        echo "<td style='text-align:center; width: 209px' class='border-left tbodyProduct'>$productQuantity</td>";
        echo "<td class='border-left tbodyProduct'>";
        echo "<button id='editBtn' class='editBtn' onclick='editProduct($productId)'>Edit</button>";
        echo "<button class='deleteBtn' onclick='deleteProduct($productId)'>Delete</button>";
        echo "</td>";
        echo "</tr>";
        
    }

    echo '</table>';
} else {
    echo 'No products in the cart.';
}

$conn->close();
?>
