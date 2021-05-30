<?php
include 'connection.php';



$n = $_POST['username'];
$e = $_POST['email'];
$m = $_POST['message'];

$sql = "INSERT INTO report(name,email,message ) VALUES('$n', '$e', '$m')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location:contactus.php");
