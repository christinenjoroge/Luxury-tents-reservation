<?php

include "dbconnection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input
    $Emailaddress = $_POST['Emailaddress'];
    $password = $_POST['password'];

    

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a secure SQL statement
    $stmt = $conn->prepare("SELECT admin_id, password FROM  admin WHERE email = ?");
    $stmt->bind_param("s", $Emailaddress);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();

        // Verify the hashed password
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['admin_id'];

            // Redirect to admin dashboard
            header("Location: admin-dashboard.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo " Admin not found.";
    }


    // echo password_hash("admin123", PASSWORD_DEFAULT);

    // Clean up
    $stmt->close();
    $conn->close();
}
?>
