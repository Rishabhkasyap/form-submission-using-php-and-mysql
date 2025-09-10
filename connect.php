<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'test1')
        or die("Connection Failed: " . mysqli_connect_error());

    // Check if all fields are set
    if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['bg_group'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bg_group = $_POST['bg_group'];

        // SQL query
        $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `bg_group`) 
                VALUES ('$name', '$email', '$phone', '$bg_group')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "Entry successful";
        } else {
            echo "Error Occurred: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }

    // Close connection
    mysqli_close($conn);
}
?>
