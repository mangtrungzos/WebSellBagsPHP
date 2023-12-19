function deleteProduct(productId) {
    // Sử dụng AJAX để gửi yêu cầu xóa đến máy chủ
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Xử lý phản hồi từ máy chủ, ví dụ: reload trang để cập nhật dữ liệu
            location.reload();
        }
    };
    xhr.open("GET", "../adminPHP/deleteProduct.php?product_id=" + productId, true);
    xhr.send();
}