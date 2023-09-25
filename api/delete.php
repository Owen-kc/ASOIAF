<?php

//db init
$host = "localhost";
$dbname = "asoiaf";
$username = "root";
$password = "";

//connection
$con = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

//error handling
if (mysqli_connect_errno()) {
    die("Error Connection: " .mysqli_connect_error());
}

//sql stmt, delete the MAX id from the database
$sql = "DELETE FROM characters WHERE id=(SELECT MAX(id) FROM characters)";

//stmt
$stmt = mysqli_stmt_init($con);

//error handling, prepare stmt
if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_errior($con));
}

//execute 
mysqli_stmt_execute($stmt);

echo "Latest Character Deleted, you can now close this page";
?>