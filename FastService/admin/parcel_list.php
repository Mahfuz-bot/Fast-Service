<?php include "header.php";
?>
<style>
    table td {
        text-transform: capitalize;
    }
</style>
<div class="container-fluid mx-10 mt-5 bg-light h-100">
    <br>
    <br>
    <h4 class="fs-4 text-danger fw-bold">Parcel Lists</h4>
    <hr>



    <div class="card">
        <div class="table-responsive">
            <table class="table table-dark table-hover ">
                <thead>
                    <tr>
                        <th scope="col">Reference Number</th>
                        <th scope="col">Sender Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Ricipient Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'connection.php';
                    $sql = "select *from parcel";
                    $result =  mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row

                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                            <tr>
                                <td>
                                    <?php echo   $row["reference_number"]; ?>
                                </td>
                                <td>
                                    <?php echo    $row["sname"]; ?>
                                </td>
                                <td>
                                    <?php echo     $row["scontact"]; ?>
                                </td>
                                <td>
                                    <?php echo    $row["rname"]; ?>
                                </td>
                                <td>
                                    <?php echo    $row["money"] . " tk"; ?>
                                </td>
                                <td>
                                    <?php echo    $row["status"]; ?>
                                </td>


                                <td>

                                    <a class="btn btn-info fw-bold" role="button" href="update_status.php?reference_number=<?php echo $row['reference_number']; ?>">Update</a>

                                    <!-- delete -->

                                    <a class="btn btn-danger" role="button" href="delete_parcel_list.php?reference_number=<?php echo $row['reference_number']; ?>">Delete</a>
                                </td>
                            </tr>


                </tbody>

        <?php
                        }
                    }

        ?>
            </table>
        </div>
    </div>

</div>