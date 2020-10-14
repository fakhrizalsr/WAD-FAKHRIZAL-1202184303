<!DOCTYPE html>
<html>

<head>
  <title>Booking</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link text-dark" href="Home.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-dark" href="Booking.php">Booking <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<body>
  <?php
  $name = $_POST['nama'];
  $checkin = $_POST['checkin'];
  $duration = $_POST['duration'];
  $number = $_POST['number'];
  $roomtype = $_POST['roomtype'];
  $checkout = date("d/m/Y", strtotime($checkin . "+" . $_POST["duration"] . "days"));

  if (!isset($_POST['service'])) {
    $service = $_POST['service'];
  } else {
    $service = [];
  }

  if ($roomtype == 'Standard') {
    $typeprice = 90;
  } elseif ($roomtype == 'Superior') {
    $typeprice = 150;
  } else {
    $typeprice = 200;
  }
$serviceadd = 20* sizeof($service);
  $total = ($typeprice * $duration) + $serviceadd;
  ?>

  <div class="container">
    <table class="table">
      <fieldset>
        <thead style="text-align: center;">
          <tr>
            <th scope="col">Booking Number</th>
            <th scope="col">Name</th>
            <th scope="col">Check-in</th>
            <th scope="col">Check-out</th>
            <th scope="col">Room Type</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Service</th>
            <th scope="col">Total Price</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
          <tr>
            <th><?= rand(1000, 9999); ?></th>
            <td><?= $name ?></td>
            <td><?php echo date("d/m/Y", strtotime($checkin)); ?></td>
            <td><?= $checkout ?></td>
            <td><?= $roomtype ?></td>
            <td><?= $number ?></td>
            <td><?php if (!isset($_POST["roomservice"])) echo $_POST["roomservice"] . "<br>";
                if (!isset($_POST["breakfast"])) echo $_POST["breakfast"] . "<br>"; ?></td>
            <td style="text-align: center;">$ <?= $total ?></th>
          </tr>
        </tbody>
      </fieldset>
  </div>
</body>

</html>