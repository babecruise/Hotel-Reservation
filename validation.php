<?php 
require "header.php"; 

    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email'])) {
            $conn = mysqli_connect("localhost", "root", "Green200%", "hotel_booking");

            $create_database = "CREATE DATABASE hotel_booking";
            mysqli_query($conn, $create_database);

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
} else {
    echo "Go back and complete your booking";
}
require "footer.php";
?>