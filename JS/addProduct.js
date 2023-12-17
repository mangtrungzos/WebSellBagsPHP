
    function addToCart() {
        var productImage = document.querySelector('.imgdetailss').src;
        var productBrand = document.querySelector('.productInfomation--brand').textContent;
        var productName = document.querySelector('.productInfomation__name').textContent;
        var singleBadge = document.querySelector('.singlebadge').textContent;
        var productColor = document.querySelector('.productDetail__colours--span').textContent;
        var productPrice = document.querySelector('.priceProduct').textContent;
    
        // document.getElementById('addToCartForm')
       
            var formData = new FormData();
            formData.append('product_image', productImage);
            formData.append('product_brand', productBrand);
            formData.append('product_name', productName);
            formData.append('product_singleBadge', singleBadge);
            formData.append('product_color', productColor);
            formData.append('product_price', productPrice);
    
    
        // Send request AJAX to add product into cart
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../controller/addTocart.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Show notifications or update interface if necessary
                alert(xhr.responseText);
            }
        };
        xhr.send(formData);
    }
