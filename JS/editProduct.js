// editProduct.js
function editProduct(productId) {
    var productId = 123;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../adminPHP/editProducts.php?product_id=" + productId, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                location.reload();
            } else {
                console.error("Error in AJAX request:", xhr.statusText);
            }
        }
    };
    xhr.send();
}
