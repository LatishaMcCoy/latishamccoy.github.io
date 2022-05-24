<?php
    //server info and log-in details
    //keep servername the same and change to your username, password, and database name
    $servername = "localhost:3306";
    $username = "root";
    $password = "root";
    $dbname = "signup";
    
    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);



    //pull form data and store in variables
    if (isset($_POST['name'], $_POST['artist'])) {
        $name = $_POST['name'];
        $artist = $_POST['artist'];

        } else {
        echo 'You need to input all the details.';
            }

    //inserting form data into a table in your database
    //student is the name of the table i created and firstname, lastname, class, year are the names of my columns
    $sql = "INSERT INTO signup (name, artist)
    VALUES ('$name', '$artist')";
    
    //return status to user
    if (mysqli_query($conn, $sql)) {
        
        header('location: welcome.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    //close connection
    mysqli_close($conn);
?>