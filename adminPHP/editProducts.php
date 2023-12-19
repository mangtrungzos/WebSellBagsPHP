<?php
include "../DB/ConnectDB.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["product_id"])) {
    $productId = $_GET["product_id"];

    // Thực hiện truy vấn xóa từ cơ sở dữ liệu
    $sql = "UPDATE product SET status = 'deleted' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $productId);
        if ($stmt->execute()) {
            $stmt->close();
            echo "<script>window.location.href = '../pages/editProduct.php'</script>";
            exit();
        } else {
            echo "Error in query execution: " . $stmt->error;
        }
    }
    $conn->close();
}
?>
