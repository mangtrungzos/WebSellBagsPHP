<?php
require_once "../DB/ConnectDB.php";

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

$totalPrice = 0; // Khởi tạo biến tổng giá trị

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Lấy ra giá của sản phẩm
        $productPrice = isset($row['product_price']) ? $row['product_price'] : 0;

        // Cập nhật tổng giá trị
        $totalPrice += $productPrice;
    }

    // Hiển thị tổng giá trị của giỏ hàng vào thẻ <ul>
    echo '<ul
    style="position: absolute;
    top: 550px;
    right: 228px;
    list-style:none;
    "
    id="total-price"><li style="margin-bottom: 10px; 
    font: 14px/18px AkkuratPro,Sans-Serif;
    ">Total Price: $' . $totalPrice . '</li></ul>';
} else {
    echo 'No products in the cart.';
}

$conn->close();
?>
