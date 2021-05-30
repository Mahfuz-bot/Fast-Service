<?php include 'header.php';
include 'connection.php';
?>
<div class=" container-fluid h-100 bg-light mt-5">
    <br>

    <h3 class="fs-3 fw-bolder text-danger mt-3">Update Parcel Status</h3>
    <hr>
    <form action="" method="post">
        <select class="form-select text-capitalize" aria-label="Default select example" name="status">
            <option selected disabled>choose option</option>
            <option value="Ready to Pickup">ready to pickup</option>
            <option value="Out for Delivery">out for delivery</option>
            <option value="Delivered">delivered</option>
            <option value="Unsuccessfull">unsuccessfull delivery attempt</option>
        </select>
        <center>

            <button type="submit" class="btn btn-success text-white mt-5 mx-auto" name="submit">Save</button>
        </center>
    </form>
    <?php if (isset($_POST["submit"])) {
        $s = $_POST['status'];


        $id = $_GET['reference_number'];
        $del = mysqli_query($conn, "UPDATE parcel SET status='$s' WHERE reference_number = '$id'");
        header('location:parcel_list.php');
    }

    ?>
</div>