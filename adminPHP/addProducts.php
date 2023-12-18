<?php 
include '../DB/ConnectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print the contents of the $_FILES array
    print_r($_FILES);
    $productName = $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $productQuantity = $_POST["productQuantity"];

    // Validate the data (you can add more validation as needed)

    // Handle file upload
    $targetDirectory = "uploads/"; // Specify your target directory
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }
    $targetFile = $targetDirectory . basename($_FILES["productImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["productImage"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size
    if (!empty($_FILES["productImage"]["tmp_name"]) && is_uploaded_file($_FILES["productImage"]["tmp_name"])) {
        if ($_FILES["productImage"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        } else {
            $targetFile = $targetDirectory . basename($_FILES["productImage"]["name"]);
            // Rest of your code for handling file upload
        }
    } else {
        echo "Sorry, your file was not uploaded.";
    }
    

    // Allow certain file formats
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
            echo "The file ". htmlspecialchars(basename($_FILES["productImage"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Insert data into the database
    $sql = "INSERT INTO product (productName, productDescription, productQuantity, productImage) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $productName, $productDescription, $productQuantity, $targetFile);

    if ($stmt->execute()) {
        echo "Product added successfully!";
    } else {
        echo "Error adding product. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>