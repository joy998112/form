<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["number"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $data = "Name: $name\nPhone: $number\nEmail: $email\nMessage: $address\n\n";

    $file = fopen("data.txt", "a"); // Open the file in append mode
    fwrite($file, $data); // Write data to the file
    fclose($file); // Close the file

    echo "Data saved successfully!";
}
?>
