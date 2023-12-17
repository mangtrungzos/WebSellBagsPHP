<?php
include '../DB/ConnectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetch user information from the database based on the entered email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        exit();
    }
    
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the entered password against the hashed password stored in the database
        if (password_verify($password, $user['password'])) {
            $_SESSION["email"] = $user['email'];
            echo '<script>alert("Registration successful!"); window.location.href = "../pages/bags.php";</script>' ;
            exit();
        } else {
            // Incorrect password
            header("Location: loginAcc.php?error=1");
            exit();
        }
    }
        $stmt->close();
        $conn->close();
}
?>
