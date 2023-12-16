<?php 
include '../DB/ConnectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob_month = $_POST["dob_month"];
    $dob_day = $_POST["dob_day"];
    $dob_year = $_POST["dob_year"];
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (email, password, first_name, last_name, dob_month, dob_day, dob_year) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $email, $hashed_password, $first_name, $last_name, $dob_month, $dob_day, $dob_year);

    if ($stmt->execute()) {
        echo '<script>alert("Registration successful!"); window.location.href = "../pages/register.php";</script>' ;
    } else {
        echo '<script>alert("Registration failed: ' . $stmt->error . '");</script>';
    }

    $stmt->close();
}
?>