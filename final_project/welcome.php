<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Artist Hub </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Rubik+Puddles&display=swap');

  :root{
  --primary: #D81E5D;
  --secondary: #8A4FFF;
  --light: #eee;
  --grey: #a09ca0;;
  --dark: #1e2f42;

}
html {
  height: 100%;
}


* {
  box-sizing: border-box;
  margin:  0;
  padding: 0;
  font-family: 'Fredoka One', cursive;
  color: #a09ca0;
}

body {
  
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  background-size: cover;
  font-family: sans-serif;
}

#overlay {
  background: rgba(147, 135, 242, 0.9);
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

#box{
   font-family: 'Fredoka One', cursive;
  width: 400px;
  height: 550px;
  border-radius: 5px;
  color: #a09ca0;
  background-color: ghostwhite;
  box-shadow: 0 4px 8px 0 rgba(67, 60, 123, 0.6);
  text-align: center;
  padding: 10px 20px 10px 20px;
 
}

h1{
  font-family: 'Rubik Puddles', cursive;
  font-size: 44px;
  color: white;
}

.form{
  font-family: 'Fredoka One', cursive;
  padding: 3px;
  display: inline-block;
  text-align: center;
  justify-content: center;
  border-radius: 6px;
  background-color: rgba(251, 115, 65, 0.2);
  border-style: none;
}

header{
  top: 0;
  font-size: 22px;
  font-kerning: 2px;
  background-color: rgba(71, 50, 191, 0.8);
  padding: 30px 20px 30px 20px;
  border-radius: 6px;


}

header #brush{
  color:#fb7341;
  transform: rotate(-180deg);
  font-size: 34px;

}

.intro{
  margin-bottom: 2rem;
}

.welcome-contents{
  margin-bottom: 0.9rem;
}

.welcome-contents p {
  text-align: left;
  padding: 2px;
  font-size: 15.5px;
}

h3{
  margin-top: -0.5rem;
  margin-bottom: 4px;
}


.box .icon-bar{
  overflow: hidden;
  position: fixed;
  bottom: 0;
  
}

.icon-bar{
  align-content: center;
  justify-content:center;
  display: flex;
  border-radius: 6px;
  background-color: rgba(109, 93, 206, 1);
  max-height: 55px;



}

.icon-bar a {
  text-align: center;
  margin: 4px auto;
  color: white;
  padding: 5px 10px 0px 10px ;
  background-color:  rgba(94, 78, 190, 1);
  border-radius: 70%;

}
.icon-bar a:hover{
  transform: scale(1.3)rotate(-25deg);

}

.icon-bar a:active{
  transform: scale(1.3);

}

.icon-bar .active{
  transform: scale(1.3);
  box-shadow: 0 4px 8px 0 rgba(67, 60, 123, 0.8);
}
.icon-bar img{
  width: 36px;
  height: auto;
  color: white;
}

.icon-bar #homebutton{
  font-size: 34px;
  background-color: #fb7341;

}
</style>

</head>
<body>
  <div>
  
  <div id="box">
    <header> 
      <h1>
        Artist Hub
        <i class="fa fa-paint-brush" id="brush" aria-hidden="true"></i>
      </h1>
    </header>
      
    <br>

  <?php

  // Create connection
    $servername = "localhost:3306";
      $username = "root";
      $password = "root";
      $dbname = "signup";
      
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, name, artist FROM signup ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //return the string Welcome + the last enter data row for name and artist which is descened by id number
      echo  "Welcome " . $row["name"]. "<br>". " The " . $row["artist"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>

      <div class="welcome-contents">
        <p>
          With the use of color, image, and idea generators ArtistHub is the hot spot for artists suffering from lack of inspiration or even burn out.
        </p>
        <h3>Tips to keep in mind:</h3>
        <p>1. There is nothing wrong with using references. Every artist does it, you can't draw something if you don't know what it looks like!</p>
        <p>2. The most important thing is to have fun. Art shouldn't be stressful.</p>
        <p>3. Color is relative, so even though color theory may tell you that two colors are complimentary or triadic they may only be so in small amounts, serving as highlights or accent shadows.</p>
      </div>
    <div class="icon-bar">
      <a class="active" id = "homebutton" href="pages/welcome-after.html"><img src="images/home.png"></a>
        <a href="pages/image.html"><img src="images/image.png"></i></a>
        <a href="pages/idea.html"><img src="images/thought.png"></a>
        <a href="pages/color.html"><img src="images/color_wheel.png"></a>
    
    </div>

  </div>
    <div id="overlay"></div>

</body>

</html>