<!-- register.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate and check if passwords match
    if ($password === $confirm_password) {
        // Here you would typically save the new user data to a database
        // For example:
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // // Save $username and $hashed_password to your database
        // After successful registration, you might redirect to a login page
        // header("Location: login_form.php");
        // exit;
    } else {
        // Passwords don't match
        echo "Passwords do not match";
    }
}
?>
