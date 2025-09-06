<?php
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $tent_type = $_POST['tent_type'];
    $capacity = $_POST['capacity'];
    $total = $_POST['total'];
    $price_min = $_POST['price_min'];
    $price_max = $_POST['price_max'];
    $availability = $_POST['availability'];
    $description = $_POST['description'];

    
    $stmt = $conn->prepare("INSERT INTO tent_inventory (tent_type, capacity, total, price_min, price_max, availability, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siiddss", $tent_type, $capacity, $total, $price_min, $price_max, $availability, $description);

    if ($stmt->execute()) {
        // header("Location: Tentmanagement.php?msg=success");
        // exit();
       echo "save sucessfuly";
    } else {
        echo "Error: " . $stmt->error;
    }
}


?>


