<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hotel Reservation!</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1 class="display-4">Booking Details</h1>


            <?php 

            $conn = mysqli_connect("localhost", "root", "Green200%", "hotel_booking");

            $sql = "CREATE TABLE hotel_booking(
                ID INT NOT NULL AUTO_INCREMENT,
                first_name VARCHAR(225),
                last_name VARCHAR(225),
                email VARCHAR(225),
                name_of_hotel VARCHAR(225),
                price_of_room INT,
                number_of_days INT,
                total_cost INT,
                PRIMARY KEY (ID)
            )";

            $query = mysqli_query($conn, $sql);

            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            $email = $_POST['email'];

                $sql = "SELECT * FROM hotel_booking WHERE email = '$email'";

                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);

        if($num == 1){
            echo "Hotel Booking Already Exist";
                } else {
                    $conn = mysqli_connect("localhost", "root", "Green200%", "hotel_booking");
                        $sql = "INSERT INTO hotel_booking(first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
                            mysqli_query($conn, $sql);
 
    
                echo "Hotel Succcessfully Booked for " . $first_name;
}

?>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>