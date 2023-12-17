<?php 
include '../DB/ConnectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productImage = $_POST['product_image'];
    $productBrand = $_POST['product_brand'];
    $productName = $_POST['product_name'];
    $singleBadge = $_POST['product_singleBadge'];
    $productColor = $_POST['product_color'];
    $productPrice = $_POST['product_price'];

    $productPrice = str_replace('$', '', $productPrice);
    $productPrice = str_replace(',', '', $productPrice);

    $sql = "INSERT INTO cart (product_image, product_brand, product_name, product_singleBadge, product_color, product_price)
            VALUES ('$productImage', '$productBrand', '$productName', '$singleBadge', '$productColor', '$productPrice')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    // Handle non-POST requests
    http_response_code(405); // Method Not Allowed
    echo "Invalid request method";
}
?>