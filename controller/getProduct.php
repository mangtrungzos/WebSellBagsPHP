<?php
require_once "../DB/ConnectDB.php";
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li class="cart-img">';
        echo isset($row['product_image']) ? '<img src="' 
        . $row['product_image'] . '" alt="Product Image" style="height:160px">' : 'Product Image: N/A<br>';

        echo '<div class="product-info" style="margin-left: 20px; ">';
        echo isset($row['product_brand']) ? '<h2 style="height: 20px;  font: 14px/18px AkkuratPro,Sans-Serif; letter-spacing: .28px; font-weight: 500; text-transform: uppercase;">'
        . $row['product_brand'] . '</h2>' : 'Brand: N/A<br>';
        echo isset($row['product_singleBadge']) ? '<span style=" font: 12px/16px AkkuratPro,Sans-Serif; color: #656565; letter-spacing: 2px;
        line-height: 1.5; font-weight: 400; text-transform: uppercase;"> '
        . $row['product_singleBadge'] .'</span>'  : 'Single Badge: N/A<br>';
        echo isset($row['product_name']) ? '<span style=" font: 14px/18px AkkuratPro,Sans-Serif; letter-spacing: .14px; color: #656565; font-weight: 400;"> '
        . $row['product_name'] .'</span>'  : 'Name: N/A<br>';
        echo isset($row['product_color']) ? '<span style=" color: #656565; font: 14px/18px AkkuratPro,Sans-Serif; letter-spacing: .14px; font-weight: 400;"> '
        . $row['product_color'] .'</span>'  : 'Color: N/A<br>';
        echo isset($row['product_price']) ? '<span style=" color: #111; font: 14px/18px AkkuratPro,Sans-Serif;letter-spacing: .28px;font-weight: 700;text-transform: uppercase;"> '
        . '$' . $row['product_price'] .'</span>'  : 'Price: N/A<br>';
        echo '</div>';
        echo '</li>';
        
    }
} else {
    echo 'No products in the cart.';
}
$conn->close();
?>
