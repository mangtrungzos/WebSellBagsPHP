<?php
include '../DB/ConnectDB.php';

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Debugging: Print the contents of the $_FILES array
        print_r($_FILES);

        $productName = $_POST["productName"];
        $productDescription = $_POST["productDescription"];
        $productQuantity = $_POST["productQuantity"];

        // Validate the data (you can add more validation as needed)

        // Handle file upload
        $targetDirectory = "uploads/";

        if (!empty($_FILES["productImage"]["name"])) {
            $targetFile = $targetDirectory . basename($_FILES["productImage"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if the image file is an actual image or fake image
            $check = getimagesize($_FILES["productImage"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["productImage"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            $allowedFormats = array("jpg", "jpeg", "png", "gif");
            if (!in_array($imageFileType, $allowedFormats)) {
                echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                $uploadOk = 0;
            }
        } else {
            echo "No file selected for upload.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Try to upload file
            if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
                // Insert data into the database
                $sql = "INSERT INTO product (productName, productDescription, productQuantity, productImage) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("ssis", $productName, $productDescription, $productQuantity, $targetFile);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "Product added successfully!";
                    } else {
                        echo "Error adding product. Please try again.";
                    }

                    $stmt->close();
                } else {
                    echo "Database error. Please try again.";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $conn->close();
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
