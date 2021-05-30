<?php include 'connection.php';
session_start();
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
  <!-- external style css -->
  <link rel="stylesheet" href="style.css" />

</head>

<body>
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top fs-6 px-3">
        <a class="navbar-brand lh-1 text-center" href="index.php"><span class="fs-2 fw-bold" style="letter-spacing: 3px">FAST</span>
          <br />
          <span class="fs-6 text-center" style="letter-spacing: 2px">SERVICE</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fas fa-bars bars text-white"></i></span>
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <?php
              if ($_SESSION["name"]) {
              ?>
                <a class="nav-link me-4 active bg-danger" href="logout.php" tite="Logout">Logout</a>
              <?php
              } else
                header("Location:login.php");

              ?>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Parcels
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                <li><a class="dropdown-item" href="add_parcel.php">Add Parcel</a></li>
                <li><a class="dropdown-item" href="parcel_list.php">List All</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="tracker.php" class="nav-link me-4">Track Parcel</a>
            </li>
            <li class="nav-item">
              <a href="report.php" class="nav-link me-4">Reports</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- bundle -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>