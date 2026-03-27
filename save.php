<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $stocks = $_POST['stocks'];

    if (!isset($_FILES['product_image']) || $_FILES['product_image']['error'] !== 0) {
        die("Image upload failed.");
    }

    $imageData = file_get_contents($_FILES['product_image']['tmp_name']);

    $sql = "INSERT INTO other_product
    (Product_ID, Product_name, Product_image, Price, Stocks)
    VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "issdi",
        $product_id,
        $product_name,
        $imageData,
        $price,
        $stocks
    );

    if ($stmt->execute()) {
        echo "<script>
        alert('Product saved successfully!);
        window.location.href='ad.php';
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
