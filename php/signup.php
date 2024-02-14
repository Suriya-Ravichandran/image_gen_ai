<?php
session_start();
include_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are present in the $_POST array
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['pass']) && isset($_POST['pass2'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);

        if (!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($pass2)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if ($pass === $pass2) {
                    // Hash the password
                    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

                    // Check if email already exists
                    $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");

                    if (mysqli_num_rows($sql) > 0) {
                        echo "Email already exists!";
                    } else {
                        // Insert user data into the database
                        $sql2 = mysqli_query($conn, "INSERT INTO users (name, email, phone, password) 
                                VALUES ('{$name}', '{$email}', '{$phone}', '{$hashed_password}')");

                        if ($sql2) {
                            // Start session and set session variable
                            $_SESSION['id'] = mysqli_insert_id($conn);
                            echo "success";
                        } else {
                            echo "Something went wrong!";
                        }
                    }
                } else {
                    echo "Passwords do not match!";
                }
            } else {
                echo "Invalid email format!";
            }
        } else {
            echo "All fields are required!";
        }
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Invalid request!";
}
?>
