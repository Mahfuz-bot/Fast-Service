<?php
include 'connection.php';

$id = $_GET['reference_number']; // get ID through query string

$del = mysqli_query($conn, "delete from parcel where reference_number = '$id'"); // delete query

if ($del) {
    mysqli_close($conn); // Close connection
    header("location:parcel_list.php"); // redirects to all records page
    exit;
} else {
    echo "Error deleting record"; // display error message if not delete
}
