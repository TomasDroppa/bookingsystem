<?php
if(isset($_GET['date'])){
  $date = $_GET['date'];
}

if(isset($_POST['submit'])){
    $fname = $_POST['FIRSTNAME'];
    $lname = $_POST['LASTNAME'];
    $phone = $_POST['PHONE'];
    $email = $_POST['EMAIL'];

    //propojení s databází
    $conn = new mysqli('localhost', 'root', '', 'bookingsysystem');

    $sql ="INSERT INTO bookings_record(FIRSTNAME,LASTNAME,PHONE,EMAIL,DATE)VALUES('$fname','$lname','$phone','$email','$date')";
    if($conn->query($sql)){
      $message = "<div class='alert alert-success'>Booking Successfull</div>";
    }else{
      $message = "<div class='alert alert-danger'>Booking was not Successfull</div>";
    }


}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comatible" content="ie-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Booking System</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">  <!--css/style.-->
</head>
  <body>
      <div class="container">
        <h1 class="text-center alert alert-danger" style="background:#2ecc71;border:none;color:#fff"> Book for Date: <?php echo date('d/m/Y', strtotime($date)) ?></h1>
        <div class="row">
          <div class="col-md-12">
            <?php echo isset ($message)?$message:'';?>
            <form action="" method="POST" autocomplete="off">
                <div class="form-group">
                  <label for=""> FIRST NAME</label>
                  <input type="text" class="form-control" name="FIRSTNAME" required>
                </div>
                <div class="form-group">
                  <label for=""> LAST NAME</label>
                  <input type="text" class="form-control" name="LASTNAME" required>
                </div>
                <div class="form-group">
                  <label for=""> PHONE NUMBER</label>
                  <input type="text" class="form-control" name="PHONE" required>
                </div>
                <div class="form-group">
                  <label for=""> EMAIL</label>
                  <input type="email" class="form-control" name="EMAIL" required>
                </div>
              
                <button type="submit" name="submit" class="btn btn-primary"> Submit </button>
                <a href="index.php" class="btn btn-success">Back</a> <!---tlačítko zpět, přesměruje na href=""-->
              </form>
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>