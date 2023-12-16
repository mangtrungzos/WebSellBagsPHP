<?php
include '../DB/ConnectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetch user information from the database based on the entered email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the entered password against the hashed password stored in the database
        if (password_verify($password, $user['password'])) {
            // Password is correct, set session and redirect
            $_SESSION["email"] = $email;
            header("Location: ./index.php");
            $stmt->close();
            $conn->close();
            exit();
        } else {
            // Incorrect password
            $stmt->close();
            $conn->close();
            header("Location: loginAcc.php?error=1");
            exit();
        }
    } else {
        // User not found
        $stmt->close();
        $conn->close();
        header("Location: loginAcc.php?error=1");
        exit();
    }
}
?>
