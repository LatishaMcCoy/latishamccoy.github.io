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
        echo "<a class="active" id = "homebutton" href="pages/welcome.html"><img src="../images/home.png"></a>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    //close connection
    mysqli_close($conn);
?>