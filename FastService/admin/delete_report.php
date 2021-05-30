<?php
include 'connection.php';

$id = $_GET['ID']; // get ID through query string

$del = mysqli_query($conn, "delete from report where ID = '$id'"); // delete query

if ($del) {
    mysqli_close($conn); // Close connection
    header("location:report.php"); // redirects to all records page
    exit;
} else {
    echo "Error deleting record"; // display error message if not delete
}
