<?php
session_start();
include_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);

        if (!empty($email) && !empty($password)) {
            // Check if the user exists in the database
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
                // Verify password
                if (password_verify($password, $row['password'])) {
                    // Password is correct, set session variables
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    echo "success"; // Send success response to JavaScript
                } else {
                    echo "Invalid email or password!";
                }
            } else {
                echo "Invalid email or password!";
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
