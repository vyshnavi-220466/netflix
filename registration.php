<?php
$conn = new mysqli("localhost", "root", "", "netflix_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['signup'])) {

    $name         = trim($_POST['name']);
    $email        = trim($_POST['email']);
    $mobile       = trim($_POST['mobile']);
    $reg_date     = $_POST['reg_date'];
    $password     = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    if ($password !== $confirm_pass) {
        echo "❌ Passwords do not match";
        exit();
    }

    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user 
            (Name, email, mobile,reg_date, password)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "sssss",
        $name,
        $email,
        $mobile,
        $reg_date,
        $password
    );

    if ($stmt->execute()) {
        echo "✅ Inserted successfully";
    } else {
        echo "❌ Not inserted";
    }

    $stmt->close();
}

$conn->close();
?>