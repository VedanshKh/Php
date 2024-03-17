<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];

    // Open a file to store the data
    $file = fopen("form_data.txt", "a");

    // Write the data to the file
    fwrite($file, "First Name: $first_name\n");
    fwrite($file, "Last Name: $last_name\n");
    fwrite($file, "Password: $password\n");
    fwrite($file, "-------------------------\n");

    // Close the file
    fclose($file);

    // Redirect the user to a thank you page or wherever you want
    header("Location: thank_you.html");
    exit();
}
?>
