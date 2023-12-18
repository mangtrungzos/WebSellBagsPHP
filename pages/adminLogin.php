<?php include('../config/constants.php'); ?>
<?php include('../adminPHP/loginAdmin.php'); ?>
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
    <link rel="stylesheet" href="../assest/admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="form-container sign-up">
                <form action="<?php echo SITEURLADMIN?>loginAdmin.PHP" id="login-form" method="POST">
                    <h1>Product Management</h1>
                    <input type="text" id="username" name="username" placeholder="username">
                    <input type="text" id="password" name="password" placeholder="password">
                    <button type="submit">Login</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-right">
                        <h2>Welcome!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>