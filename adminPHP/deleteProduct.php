<?php
// delete_product.php

include "../DB/ConnectDB.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["product_id"])) {
    $productId = $_GET["product_id"];

    // Thực hiện truy vấn xóa từ cơ sở dữ liệu
    $sql = "DELETE FROM product WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $stmt->close();
    }

    $conn->close();
}
?>
