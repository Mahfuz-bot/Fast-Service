<?php

include "connection.php";
session_start();
$message = "";

if (count($_POST) > 0) {

    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_name='" . $_POST["user_name"] . "' and password = '" . $_POST["password"] . "'");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {

        $_SESSION["name"] = $row['user_name'];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION["name"])) {
    header("Location:index.php");
}
?>
<html>

<head>
    <!-- bootstarap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>User Login</title>
</head>

<body>
    <div class="container-fluid bg-dark h-100 d-flex justify-content-center">


        <div class="card d-flex align-self-center py-3 px-4 rounded">

            <form name="frmUser" method="post" action="" class="was-validated">
                <div class="message"><?php if ($message != "") {
                                            echo $message;
                                        } ?></div>
                <h4>Enter Login Details</h4>
                <div class="form-group mb-3">

                    <label for="user" class="form-label">Username</label>

                    <input type="email" name="user_name" class="form-control" required>
                </div>
                <div class="form-group mb-3">

                    <label for="user" class="form-label">Password</label>

                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="form-group d-flex justify-content-around mt-4">
                    <input class="btn btn-primary" type="submit" class="form-control" name="submit" value="Submit">
                    <input class="btn btn-danger" type="reset">
                </div>
            </form>
        </div>
    </div>
    <!-- bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>