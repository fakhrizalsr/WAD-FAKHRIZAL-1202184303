<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="Booking.php">Booking</a>
      </li>
    </ul>
  </div>
</nav>
<body>
  <?php
  ?>
  <br>
  <h2 style="text-align: center; color: cyan;">EAD HOTEL</h2>
  <h4 style="text-align: center; color: rgb(0 123 255);">Welcome To 5 Star Hotel</h4>
  <br>
  <div class="card-deck" style="margin-top: -50px; margin-left: 175px; margin-right: 175px;">
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 5px; margin: 40px; margin-bottom:250px">
      <img class="card-img-top" src="Standard.jpg" alt="Standard" style="height: 13rem">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Standard</h5>
        <h5 class="card-text" style="text-align: center; color: rgb(0 123 255);">$ 90/Day</h5>
        <br>
        <div class="card-header" style="text-align: center;">Facilities</div>
        <ul class="list-group list-group-flush" style="text-align: center;">
          <li class="list-group-item">1 Single Bed </li>
          <li class="list-group-item">1 Bathroom</li>
        </ul>
      </div>
      <div class="card-footer" style="text-align: center;">
        <a href="Booking.php" class="btn btn-primary">Book Now</a>
      </div>
    </div>
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 5px; margin: 40px; margin-bottom:200px">
      <img class="card-img-top" src="Superior.jpg" alt="Superior" style="height: 13rem">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Superior</h5>
        <h5 class="card-text" style="text-align: center; color: rgb(0 123 255);">$ 150/Day</h5>
        <br>
        <div class="card-header" style="text-align: center;">Facilities</div>
        <ul class="list-group list-group-flush" style="text-align: center;">
          <li class="list-group-item">1 Double Bed</li>
          <li class="list-group-item">1 Television and Wi-Fi</li>
          <li class="list-group-item">1 Bathroom with hot water</li>
        </ul>
      </div>
      <div class="card-footer" style="text-align: center;">
        <a href="Booking.php" class="btn btn-primary">Book Now</a>
      </div>
    </div>
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 5px; margin: 40px; margin-bottom:120px">
      <img class="card-img-top" src="Luxury.jpg" alt="Luxury" style="height: 13rem;">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Luxury</h5>
        <h5 class="card-text" style="text-align: center; color: rgb(0 123 255);">$ 200/Day</h5>
        <br>
        <div class="card-header" style="text-align: center;">Facilities</div>
        <ul class="list-group list-group-flush" style="text-align: center;">
          <li class="list-group-item">2 Double Bed</li>
          <li class="list-group-item">2 Bathroom with hot water</li>
          <li class="list-group-item">1 Kitchen</li>
          <li class="list-group-item">1 Television and Wi-Fi</li>
          <li class="list-group-item">1 Workroom</li>
        </ul>
      </div>
      <div class="card-footer" style="text-align: center;">
        <a href="Booking.php" class="btn btn-primary">Book Now</a>
      </div>
    </div>
  </div>
</body>
</html>