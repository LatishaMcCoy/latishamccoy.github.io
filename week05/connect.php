<?php
    //server info and log-in details
    //keep servername the same and change to your username, password, and database name
    $servername = "localhost:3308";
    $username = "web09dbuser";
    $password = "SP2022web0155";
    $dbname = "web09db";
    
    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "connected successfully<br>";

    //pull form data and store in variables
    if (isset($_POST['firstname'], $_POST['lastname'], $_POST['biggestfear'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $biggestfear = $_POST['biggestfear'];

        } else {
        echo 'You need to input all the details.';
            }

    //inserting form data into a table in your database
    //student is the name of the table i created and firstname, lastname, class, year are the names of my columns
    $sql = "INSERT INTO fears (firstname, lastname, biggestfear)
    VALUES ('$firstname', '$lastname', '$biggestfear')";
    
    //return status to user
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    //close connection
    mysqli_close($conn);
?>