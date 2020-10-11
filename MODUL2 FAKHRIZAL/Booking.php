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
  ?>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
        <form action="MyBooking.php" method="post">
          <div class="form group">
            <div class="col-md-6 mb-3 ">
              <label for="name">Name</label>
              <input type="name" class="form-control" name="name">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 mb-3 ">
              <label for="checkin">Check-in</label>
              <input class="form-control" type="date" placeholder="dd/mm/yyyy" name="checkin">
            </div>
          </div>
          <div class="form group">
            <div class="col-md-6 mb-3 ">
              <label for="name">Duration</label>
              <input type="text" class="form-control" name="duration">
              <medium id="days" class="form-text text-muted">Day(s)</medium>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 mb-3 ">
              <label for="roomtype">Room Type</label>
              <select class="form-control" name="roomtype">
                <option>Standard</option>
                <option>Superior</option>
                <option>Luxury</option>
              </select>
            </div>
            <label for="service">Add Service(s)</label>
            <small id="service" class="form-text">$20/Service</small>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="roomservice" value="Room Service">
              <label class="form-check-label">Room Service</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="breakfast" value="Breakfast">
              <label class="form-check-label">Breakfast</label>
            </div>
            <br>
            <div class="form group">
              <div class="col-md-6 mb-3 ">
                <label for="number">Phone number</label>
                <input type="text" class="form-control" name="number">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 mb-3 ">
              <button type="book" class="btn btn-primary">Book</button>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
</body>

</html>