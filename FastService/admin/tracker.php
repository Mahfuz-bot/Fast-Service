<?php include 'header.php';
include 'connection.php';


?>
<div class="container p-5 mt-5">
    <!-- <br><br><br>
    <div id="track-bar">
        <h6 class="text-white">Track</h6>

        <form action="" method="POST" class="d-flex align-content-center">
            <input name="tracker" class="form-control me-1" type="search" placeholder="Track" aria-label="search" />
            <button class="btn btn-danger" name="submit" type="submit">TRACK</button>
        </form> -->
    <div id="track-bar mt-5">
        <br>

        <h3>Track#</h3>

        <form action="" method="POST" class="d-flex align-content-center">
            <input name="tracker" class="form-control me-1" type="search" placeholder="Track" aria-label="search" />
            <button class="btn btn-danger" name="submit" type="submit">TRACK</button>
        </form>
        <?php
        // $errmessage = "";
        // $successmessage = "";
        if (isset($_POST["submit"])) {

            $t = $_POST['tracker'];
            $sql = "select status from parcel WHERE reference_number = '$t'";
            $result =  mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row

                $successmessage = "Your Parcel Status: ";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"">';
                    echo $successmessage . $row['status'];
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"</button> ';
                    echo '</div>';
                }
            } else {
                $errmessage = "Invalid Tracking ID!";
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"">';
                echo $errmessage;
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"</button> ';
                echo '</div>';
            }
        }


        // unset($successmessage, $errmessage)
        ?>
    </div>

</div>