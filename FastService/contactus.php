<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- bootstrap cdn -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
   <!-- font awesome cdn -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="style.css" />

   <title>Fast Service</title>
</head>

<body>
   <?php include 'header.php'; ?>
   <div>
      <br />
   </div>
   <div class="container-fluid my-3 pt-5 mx-auto">
      <div id="contact">
         <div class="section-titel">
            <h3 class="text-center fw-bold fs-1 text-danger">Contact Us</h3>
         </div>
         <div class="section-body lead text-center">
            <p>
               Do you have any questions? Contact us and our team will be
               happy to help within 2 business days
            </p>
         </div>
         <div class="row mx-3">
            <div class="col-lg-12">
               <form action="save_report.php" method="POST" class="was-validated">
                  <div class="form-group mb-1">
                     <label for="username">Fullname</label>
                     <input type="text" class="form-control text-capitalize" name="username" required />
                     <div class="invalid-feedback">Enter fullname</div>
                  </div>
                  <div class="form-group mb-1">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" name="email" required />
                     <div class="invalid-feedback">Enter valid mail</div>
                  </div>
                  <div class="form-group mb-1">
                     <label for="subject">Subject</label>
                     <input type="text" class="form-control" name="subject" required />
                     <div class="invalid-feedback">Please add a subject</div>
                  </div>
                  <div class="form-group mb-1">
                     <label for="message">Message</label>
                     <input type="textarea" style="resize: none" name="message" cols="30" rows="4" class="form-control" required />
                  </div>
                  <div class="form-group text-center">
                     <input type="submit" class="btn btn-danger my-3" value="Submit" />
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer -->
   <?php include 'footer.php'; ?>
   <!-- Footer -->

   <!-- bundle cdn -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>