<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="../assest/fonts/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/webfonts/fa-solid-900.ttf">
    <link rel="stylesheet" href="../assest/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assest/admins.css">
    <title>Admin Product</title>
</head>
<body>
    <div class="main">
        <header>
            <div class="header-navbar">
                <div class="header-wrapper">
                    <div class="header-title">
                        <h2 class="">Product Management</h2>
                    </div>
                    <div class="user-info">
                        <img src="../image/poster/account.jpg" alt="" class="img-user">
                        <span class="user-name">vu trong sang</span>
                        <div class="user-logout">
                            <a href="#" class="logout">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="containerProduct">
            <h1>Add Product</h1>

            <form id="addProductForm"  class="addproduct-form" method="POST" enctype="multipart/form-data" >
                <div class="productInfo">
                    <label class="productLabel" for="productName">Product Name</label>
                    <input type="text" id="productName" name="productName" required>
                </div>
                
                <div class="productInfos">
                    <label class="productLabel" for="productImage">Product Image</label>
                    <input type="file" id="productImage" name="productImage" accept="image/*" required>
                </div>

                <div class="productInfo">
                    <label class="productLabel" for="productDescription">Product Description</label>
                    <textarea id="productDescription" name="productDescription" required></textarea>
                </div>

                <div class="productInfo">
                    <label class="productLabel" for="productQuantity">Product Quantity</label>
                    <input type="text" id="productQuantity" name="productQuantity" required>
                </div>
        
                <button class="addProduct-btn" type="submit" onclick="addProduct()">Add Product</button>
                <button class="addProduct-btn" type="button" onclick="back()">Back</button>
            </form>
        </div>
    </div>
    <script>
        function addProduct() {
            // Collect form data
           const productName = document.getElementById('productName').value;
           const productImageInput = document.getElementById('productImage');
           const productImage = productImageInput.files[0];
           const productDescription = document.getElementById('productDescription').value;
           const productQuantity = document.getElementById('productQuantity').value;


            // Send data to server using AJAX (you may use Fetch API or other libraries)
           const formData = new FormData();
            
            formData.append('productName', productName);
            formData.append('productDescription', productDescription);
            formData.append('productQuantity', productQuantity);
            if (productImage) {
                // Only append the image if it's selected
                formData.append('productImage', productImage);
            }
            
            
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '../adminPHP/addProducts.php', true);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Process the response from the server if needed
                    alert(xhr.responseText);
                } else {
                    alert('Error adding product. Please try again.');
                }
            };

            // Send the request
            xhr.send(formData);
        }
    </script>
    <script>
        function back() {
            window.location.href = '../admin/index.php'
        }
    </script>
</body>
</html>