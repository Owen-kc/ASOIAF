<?php
//require 'database.php';

//db init
$host = "localhost";
$dbname = "asoiaf";
$username = "root";
$password = "";


//get values from application
$name = $_POST["name"];
$born = $_POST["born"];
$allegiance = $_POST["allegiance"];
$title = $_POST["title"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$spouse = $_POST["spouse"];
$culture = $_POST["culture"];
$alignment = $_POST["alignment"];
$equipment = $_POST["equipment"];
$description = $_POST["description"];

//connection with mysqliconnect
$con = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

//error handling
if (mysqli_connect_errno()) {
    die("Error Connection: " .mysqli_connect_error());
}

//echo "Connection established"

//sql stmt, insert new values into db
$sql = "INSERT INTO characters (name, born, allegiance, title, height, weight, spouse, culture, alignment, equipment, description)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 

//stmt init with connection
$stmt = mysqli_stmt_init($con);

//use prepared stmt to protect against sql injection
if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_errior($con));
}

//bind param with stmt, string of "s" is for all values being a string (s stands for string)
mysqli_stmt_bind_param($stmt, "sssssssssss", $name, $born, $allegiance, $title, $height, $weight, $spouse, $culture, $alignment, $equipment, $description);

//execute
mysqli_stmt_execute($stmt);

//keep echo here for clarity, when new char is created the page opens which gives the user notice they've added the character successfully
echo "New Character Created, you can now close this page.";
?>