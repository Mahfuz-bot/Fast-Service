<?php
// setcookie("count", '0', time() + 30);
?>
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
   <header>
      <div class="container-fluid">
         <nav class="navbar navbar-expand-md bg-light fixed-top fs-6 px-3">
            <a class="navbar-brand lh-1 text-center" href="#"><span class="fs-2 fw-bold" style="letter-spacing: 3px">FAST</span>
               <br />
               <span class="fs-6 text-center" style="letter-spacing: 2px">SERVICE</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
               <span><i class="fas fa-bars bars"></i></span>
               <!-- <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="collapse navbar-collapse" id="navbar">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                     <a href="admin\login.php" class="nav-link active me-4">Portal Login</a>
                  </li>
                  <li class="nav-item">
                     <a href="service.php" class="nav-link me-4">Service</a>
                  </li>
                  <li class="nav-item">
                     <a href="#about-us" class="nav-link me-4">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a href="contactus.php" class="nav-link me-4">Contact Us</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </header>

   <!-- slider -->
   <div class="whole">
      <div class="row">
         <div class="col-lg-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="500" data-pause="hover">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item new-item active">
                     <img src="assets\image\banner7.jpg" class="w-100" alt="..." />
                     <div class="carousel-caption d-block">
                        <h5>First slide label</h5>
                        <p>
                           Some representative placeholder content for the
                           first slide.
                        </p>
                     </div>
                  </div>
                  <div class="carousel-item new-item">
                     <img src="assets\image\banner8.jpg" class="w-100" alt="..." />
                     <div class="carousel-caption d-block">
                        <h5>Second slide label</h5>
                        <p>
                           Some representative placeholder content for the
                           second slide.
                        </p>
                     </div>
                  </div>
                  <div class="carousel-item new-item">
                     <img src="assets\image\banner9.jpg" class="w-100" alt="..." />
                     <div class="carousel-caption d-block">
                        <h5>Third slide label</h5>
                        <p>
                           Some representative placeholder content for the
                           third slide.
                        </p>
                     </div>
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>
      </div>
      <div id="track-bar">

         <?php
         include 'admin/connection.php';
         ?>


         <div id="track-bar">
            <h6 class="text-white">Track</h6>

            <form action="" method="POST" class="d-flex align-content-center">
               <input name="tracker" class="form-control me-1" type="search" placeholder="Track" aria-label="search" />
               <button class="btn btn-danger" name="submit" type="submit">TRACK</button>
            </form>
            <?php
            // $errmessage = "";
            // $successmessage = "";

            // if (count($_COOKIE) < 3) {
            //    echo "Welcome! This is the first time you have viewed this page.";
            //    $cookie = 1;
            //    setcookie("count", $cookie);



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
            //    else {
            //       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"">';
            //       echo 'You are out of limit';
            //       echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"</button> ';
            //       echo '</div>';
            //    }
            // } else {
            //    $cookie = ++$_COOKIE["count"];
            //    setcookie("count", $cookie);
            //    echo "You have viewed this page " . $_COOKIE["count"] . " times.";
            // }

            // unset($successmessage, $errmessage)
            ?>
         </div>
      </div>
   </div>

   <!-- Feature section -->
   <div class="container feature-card p-2" id="feature">
      <h3 class="text-center fw-bolder display-5 mt-2 mb-2 mt-lg-3 mb-lg-3">
         Manage Your Shipments
      </h3>
      <div class="row">
         <!-- card 1 -->
         <div class="card col-12 col-sm-4 mx-auto my-2 bg-light" style="width: 13rem">
            <i class="text-center mt-3 fas fa-train" style="font-size: 2rem; color: red"></i>
            <div class="card-body">
               <p class="text-center fw-bold mt-0 mb-2">Train Freight</p>
               <a href="#train" data-bs-toggle="collapse" class="btn btn-info d-block text-white text-bold" role="button" aria-expanded="false" aria-controls="train">By Train</a>
               <div id="train" class="collapse multi-collapse mt-3">
                  <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing
                     elit. Natus fuga et enim qui nesciunt iure accusamus
                     modi consequatur, at ratione?
                  </p>
               </div>
            </div>
         </div>
         <!-- card 2 -->
         <div class="card col-12 col-sm-4 mx-auto my-2 bg-light" style="width: 13rem">
            <i class="text-center mt-3 fas fa-shipping-fast" style="font-size: 2rem; color: red"></i>
            <div class="card-body">
               <p class="text-center fw-bold mt-0 mb-2">Road Freight</p>
               <a href="#van" data-bs-toggle="collapse" class="btn btn-info d-block text-white text-bold" role="button" aria-expanded="false" aria-controls="van">By Road</a>
               <div id="van" class="collapse multi-collapse mt-3">
                  <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing
                     elit. Natus fuga et enim qui nesciunt iure accusamus
                     modi consequatur, at ratione?
                  </p>
               </div>
            </div>
         </div>
         <!-- card 3 -->
         <div class="card col-12 col-sm-4 mx-auto my-2 bg-light" style="width: 13rem">
            <i class="text-center mt-3 fas fa-plane" style="font-size: 2rem; color: red"></i>
            <div class="card-body">
               <p class="text-center fw-bold mt-0 mb-2">Air Freight</p>
               <a href="#plane" data-bs-toggle="collapse" class="btn btn-info d-block text-white text-bold" role="button" aria-expanded="false" aria-controls="plane">By Plane</a>
               <div id="plane" class="collapse multi-collapse mt-3">
                  <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing
                     elit. Natus fuga et enim qui nesciunt iure accusamus
                     modi consequatur, at ratione?
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- end of Feature section -->

   <!-- media text -->
   <h3 class="text-center fw-bolder px-2 px-lg-3 my-2 my-lg-3 display-5">
      How We Deal With Your Products
   </h3>
   <div class="container-fluid mx-auto px-3">
      <div class="row">
         <div class="col-12 position-relative my-3 my-lg-4">
            <img class="flex-fill w-100" src="assets\image\banner1.jpg" alt="..." />
            <div class="position-absolute card-img-overlay"></div>
            <div class="position-absolute service-style">
               <p>
                  This is some content from a media component. You can
                  replace this with any content and adjust it as needed.
               </p>
            </div>
         </div>
         <div class="col-12 position-relative my-3 my-lg-4">
            <img class="flex-fill w-100" src="assets\image\banner2.jpg" alt="..." />
            <div class="position-absolute card-img-overlay"></div>
            <div class="position-absolute service-style">
               <p>
                  This is some content from a media component. You can
                  replace this with any content and adjust it as needed.
               </p>
            </div>
         </div>
         <div class="col-12 position-relative my-3 my-lg-4">
            <img class="flex-fill w-100" src="assets\image\banner3.jpg" alt="..." />
            <div class="position-absolute card-img-overlay"></div>
            <div class="position-absolute service-style">
               <p>
                  This is some content from a media component. You can
                  replace this with any content and adjust it as needed.
               </p>
            </div>
         </div>
      </div>
   </div>


   <!-- media text -->

   <!-- About Us section -->
   <div class="container-fluid" id="about-us">
      <div class="about-section">
         <div class="p-3 bg-light rounded-3" style="background-color: #cfe2ff">
            <h3 class="display-4 fw-bold text-center">About Us</h3>
            <div class="row">
               <div class="col-lg-4 text-center">
                  <img src="assets\image\me.jpg" alt="owner" class="rounded-circle img-fluid" style="width: 16rem" />
               </div>
               <div class="col-lg-8 media-body">
                  <p class="mt-3">
                     Lorem ipsum dolor sit amet consectetur, adipisicing
                     elit. Quae, voluptatem nostrum, adipisci earum ipsum
                     nobis vitae possimus necessitatibus sint harum ipsam,
                     quaerat odit quia amet quis? Illum laudantium eaque
                     doloremque eveniet est, praesentium hic, at, deserunt
                     quae similique laborum magnam autem iure facilis
                     consectetur odio dolore repellat sed amet non!
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- End of About section -->

   <!-- customer review  -->
   <div class="container-fluid">
      <div class="customer-review-section">
         <div class="p-3 my-3" style="background-color: #d2f4ea">
            <h5 class="fw-bold display-4 text-center">Customer Review</h5>
            <div class="row text-center">
               <div class="col-lg-4">
                  <blockquote class="blockquote">
                     <i class="p-2 fa-3x fas fa-user-circle"></i>
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Vitae, ex. Et, ratione quos eum explicabo harum
                        ipsum cumque minima nesciunt vel beatae dignissimos
                        nostrum nulla fugiat at natus qui maiores tenetur
                        modi repellat vitae eligendi, quidem officia ad.
                        Ratione tenetur aspernatur praesentium reiciendis
                        rerum? Qui debitis totam dicta dolorum minima?
                     </p>
                     <footer class="blockquote-footer">
                        Mr.x in <cite>facebook</cite>
                     </footer>
                  </blockquote>
               </div>
               <div class="col-lg-4">
                  <blockquote class="blockquote">
                     <i class="p-2 fa-3x fas fa-user-circle"></i>
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Vitae, ex. Et, ratione quos eum explicabo harum
                        ipsum cumque minima nesciunt vel beatae dignissimos
                        nostrum nulla fugiat at natus qui maiores tenetur
                        modi repellat vitae eligendi, quidem officia ad.
                        Ratione tenetur aspernatur praesentium reiciendis
                        rerum? Qui debitis totam dicta dolorum minima?
                     </p>
                     <footer class="blockquote-footer">
                        Mr.x in <cite>facebook</cite>
                     </footer>
                  </blockquote>
               </div>
               <div class="col-lg-4">
                  <blockquote class="blockquote">
                     <i class="p-2 fa-3x fas fa-user-circle"></i>
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Vitae, ex. Et, ratione quos eum explicabo harum
                        ipsum cumque minima nesciunt vel beatae dignissimos
                        nostrum nulla fugiat at natus qui maiores tenetur
                        modi repellat vitae eligendi, quidem officia ad.
                        Ratione tenetur aspernatur praesentium reiciendis
                        rerum? Qui debitis totam dicta dolorum minima?
                     </p>
                     <footer class="blockquote-footer">
                        Mr.x in <cite>facebook</cite>
                     </footer>
                  </blockquote>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end of customer review  -->
   <!-- Footer -->
   <?php include 'footer.php'; ?>
   <!-- Footer ends -->
   <!-- bundle cdn -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>