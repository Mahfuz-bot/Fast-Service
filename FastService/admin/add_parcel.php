<?php include 'header.php';
?>
<style>
    form input {
        margin-bottom: 20px;
        text-transform: capitalize;
    }
</style>
<div class="container-fluid mt-5 px-5 bg-light h-100">
    <br>
    <br>
    <br>
    <div class='contaier fs-4'>
        <h3 class="fw-bolder text-center text-danger text-capitalize"> price per Kg 200BDT <br>plus per inch 12BDT</h3>
    </div>

    <p class="text-danger fw-bold fs-5 mt-3">Fill the required informaiton</p>
    <hr>

    <form action="insert_parcel.php" method="post">
        <div class="row">
            <div class="col">
                <label>Sender name</label>
                <input type="text" class="form-control" name="sname" required />
                <label>Sender Address</label>
                <input type="text" class="form-control" name="saddress" required />
                <label>Sender contact</label>
                <input type="text" class="form-control" name="scontact" required />
            </div>
            <div class="col">
                <label>Ricipient name</label>
                <input type="text" class="form-control" name="rname" required />
                <label>Ricipient Address</label>
                <input type="text" class="form-control" name="raddress" required />
                <label>Ricipient contact</label>
                <input type="text" class="form-control" name="rcontact" required />
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label>Quantity</label><input type="text" id="quantity" class="form-control" name="quantity" min="1" required />
            </div>
            <div class="col-3">
                <label>Weight</label><input type="text" id="weight" class="form-control" name="weight" min="0" required />
            </div>
            <div class="col-3">
                <label>Size</label><input type="text" id="size" class="form-control" name="size" min="0" required />
            </div>
            <div class="col-3">
                <label>Money</label><input type="text" id="total" class="form-control" name="money" value="0" />

            </div>
        </div>

        <center>
            <button type="submit" name='submit' onclick="run()" class="btn btn-danger text-white mt-5">Save</button>
        </center>


    </form>
</div>


<script>
    function run() {
        var final_result = 0;
        var q = document.getElementById("quantity").value;
        var w = document.getElementById("weight").value;
        var s = document.getElementById("size").value;
        //document.getElementById("total").value = final_result;
        var final_result = document.getElementById("total");
        final_result.value = q * ((w * 200) + (s * 12));
    }
</script>