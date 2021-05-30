<?php include 'connection.php';

$sn = $_POST['sname'];
$sa = $_POST['saddress'];
$sc = $_POST['scontact'];
$rn = $_POST['rname'];
$ra = $_POST['raddress'];
$rc = $_POST['rcontact'];
$q = $_POST['quantity'];
$w = $_POST['weight'];
$s = $_POST['size'];
$m = $_POST['money'];




$sql = "INSERT INTO parcel(sname,saddress,scontact,rname,raddress,rcontact,quantity,weight,size,money,status) VALUES('$sn', '$sa ', '$sc','$rn ','$ra ','$rc ','$q','$w','$s','$m','Item Accepted by Fast Service')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location:add_parcel.php");
