<?php include('../adminPHP/getProducts.php'); ?>
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
    <link rel="stylesheet" href="../assest/adminss.css">
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
                            <a href="../pages/adminLogin.php" class="logout">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="add-product">
                <button class="addproductnew" onclick="addProduct()">Thêm Sản Phẩm</button>
            </div>
            <div class="tbl">
                <table class="table-head" id="product-table">
                    <tr>
                        <th class="border-left" style="width: 55px">ID</th>
                        <th class="border-left" style="width: 130px">Name</th>
                        <th class="border-left" style="width: 150px">Image</th>
                        <th class="border-left">Description</th>
                        <th class="border-left" style="width: 187px">Price</th>
                        <th class="border-left">Edit</th>
                        <th class="border-left">Delete</th>
                    </tr>
                </table>
                <div id="loading"></div>
                <table id="tablebody" class="table-body"></table>
            </div>
        </div>
    </div>


    <script>
        function addProduct() {
            window.location.href = "../pages/addProduct.php";
        }
        </script>
    <script src="../JS/editProduct.js"></script>
    <script src="../JS/deleteProduct.js"></script>
</body>
</html>