<?php include 'header.php'
?>
<div class="container-fluid mx-10 mt-5 bg-light h-100">
    <br>
    <br>
    <h4 class="fs-4 text-danger fw-bold">Customer Reports</h4>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'connection.php';
            $sql = "select *from report";
            $result =  mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) {
                // output data of each row


                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td>
                            <?php echo   $row["ID"]; ?>
                        </td>
                        <td>
                            <?php echo '<div class="text-capitalize" >' . $row["name"] . '</div>'; ?>
                        </td>
                        <td>
                            <?php echo     $row["email"]; ?>
                        </td>
                        <td>
                            <?php echo    $row["message"]; ?>
                        </td>
                        <td>
                            <a class="btn btn-danger" role="button" href="delete_report.php?ID=<?php echo $row['ID']; ?>">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "0 results";
            }

            ?>




        </tbody>

    </table>
</div>