<?php 
session_start();

include '../DB/ConnectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_PORT["product"];
    $quantity = $_PORT["quantity"];
    $user_id = $_SESSION["user_id"];
    $product_image = $_PORT["product_image"];
    $product_price = $_PORT["product_price"];
    $product_brand = $_PORT["product_brand"];
    $product_color = $_PORT["product_color"];
    try {
        $stmt = $conn->prepare("INSERT INTO giohang (product_id, quantity, user_id, product_image, product_price, product_brand, product_color) VALUES ('$product_id', '$quantity', '$user_id', '$product_image', '$product_price', '$product_brand', '$product_color')");
    
        $stmt->bindParam(1, $product_id);
        $stmt->bindParam(2, $quantity);
        $stmt->bindParam(3, $user_id);
        $stmt->bindParam(4, $product_image);
        $stmt->bindParam(5, $product_price);
        $stmt->bindParam(6, $product_brand);
        $stmt->bindParam(7, $product_color);
    
        $stmt->execute();
        echo "Sản phẩm đã được thêm vào giỏ hàng thành công.";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>