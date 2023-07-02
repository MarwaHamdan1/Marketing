<?php
include("admin/include/connectDB.php");

$con = connectDB();

if ($con) {
    if (isset($_POST['submit'])) {
        $fullName = mysqli_real_escape_string($con, $_POST['fullName']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        $sql = "INSERT INTO contact (fullName, email, message) VALUES ('$fullName', '$email', '$message')";
        $query = mysqli_query($con, $sql);

        if ($query) {
            // Message stored successfully
            // You can redirect the user to a thank you page or show a success message
            header("Location: thankyou.php");
            exit;
        } else {
            echo "Failed to store the message.";
        }
    }
}
?>
