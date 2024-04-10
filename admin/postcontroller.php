<?php
include('config.php');

if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    
    if ($_FILES["image"]["error"] === 4) {
        echo "<script> alert('Image Does Not Exist'); </script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
        $validImageExtension = ['jpg', 'jpeg', 'png'];

        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script> alert('Invalid ext'); </script>";
        } else if ($fileSize > 1000000) {
            echo "<script> alert('Image Size Is Too Large'); </script>";
        } else {
            $newImageName = uniqid() . '.' . $imageExtension;
            move_uploaded_file($tmpName, 'uploads/' . $newImageName);

            // Prepare the SQL statement with placeholders
            $query = "INSERT INTO news (title, category, data, img) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $query);

            // Bind parameters to the prepared statement
            mysqli_stmt_bind_param($stmt, 'ssss', $title, $category, $content, $newImageName);

            // Execute the prepared statement
            mysqli_stmt_execute($stmt);

            // Check if insertion was successful
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo '<script>alert("added success");location.replace(document.referrer);</script>';
            } else {
                echo '<script>alert("Insertion failed");location.replace(document.referrer);</script>';
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        }
    }
}
?>
