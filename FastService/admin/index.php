<?php include 'header.php';
include 'connection.php';

if ($_SESSION["name"]) {
?>
    <!-- <a class="nav-link me-4 active bg-danger" href="logout.php" tite="Logout">Logout</a> -->
<?php
} else
    header("Location:login.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid vh-100 bg-light">
        <br>
        <br>
        <h1 class="mt-5">Fast Service</h1>
        <hr>
        <div class="row d-flex justify-content-evenly">

            <div class="card text-center mb-2" style="width: 12rem;">
                <div class="card-body">
                    <h4 class="card-title">Item Accepted</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <?php include 'connection.php';
                    $sql = "select count(status) as total from parcel where status='Item Accepted by Fast Service'";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($result);
                    echo '<h6>' . $data['total'] . '</h6>';
                    ?>

                </div>
            </div>
            <div class="card text-center mb-2" style="width: 12rem;">
                <div class="card-body">
                    <h4 class="card-title">Out for Delivery</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <?php include 'connection.php';
                    $sql = "select count(status) as total from parcel where status='Out for Delivery'";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($result);
                    echo '<h6>' . $data['total'] . '</h6>';
                    ?>

                </div>
            </div>
            <div class="card text-center mb-2" style="width: 12rem;">
                <div class="card-body">
                    <h4 class="card-title">Ready To Pickup</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <?php include 'connection.php';
                    $sql = "select count(status) as total from parcel where status='Ready to Pickup'";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($result);
                    echo '<h6>' . $data['total'] . '</h6>';
                    ?>

                </div>
            </div>
            <div class="card text-center mb-2" style="width: 12rem;">
                <div class="card-body">
                    <h4 class="card-title">Delivered</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <?php include 'connection.php';
                    $sql = "select count(status) as total from parcel where status='Delivered'";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($result);
                    echo '<h6>' . $data['total'] . '</h6>';
                    ?>

                </div>
            </div>

            <div class="card text-center mb-2" style="width: 12rem;">
                <div class="card-body">
                    <h4 class="card-title">Unsuccessfull Delivery Attempt</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <?php include 'connection.php';
                    $sql = "select count(status) as total from parcel where status='Unsuccessfull'";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($result);
                    echo '<h6>' . $data['total'] . '</h6>';
                    ?>

                </div>
            </div>

            <div class="card text-center mb-2" style="width: 12rem;">
                <div class="card-body">
                    <h4 class="card-title">Report</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <?php include 'connection.php';
                    $sql = "select count(ID) as total from report";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($result);
                    echo '<h6>' . $data['total'] . '</h6>';
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>