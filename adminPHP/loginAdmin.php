<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../DB/ConnectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fetch user information from the database based on the entered email
    $sql = "SELECT * FROM useradmin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        exit();
    }
    
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the entered password against the hashed password stored in the database
        if ($password === $user['password']) {
            $_SESSION["username"] = $user['username'];
            echo '<script>alert("Login successful!"); window.location.href = "../admin/index.php";</script>' ;
            exit();
        } else {
            // Incorrect password
            echo '<script>alert("Login Failed!"); window.location.href = "../pages/adminLogin.php";</script>' ;

            exit();
        }
    }
        $stmt->close();
        $conn->close();
}
?>
