<?php 

$host = "localhost";
$dbname = "asoiaf";
$username = "root";
$password = "";

$newDescription = $_GET["newDescription"];

//connection with mysqliconnect
$con = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

//error handling
if (mysqli_connect_errno()) {
    die("Error Connection: " .mysqli_connect_error());
}

$sql = "UPDATE characters SET description = newDescription WHERE id=(SELECT MAX(id) FROM characters)";

//stmt
$stmt = mysqli_stmt_init($con);

//error handling, prepare stmt
if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_errior($con));
}

//execute 
mysqli_stmt_execute($stmt);

echo "Latest Character Updated, you can now close this page";

?>