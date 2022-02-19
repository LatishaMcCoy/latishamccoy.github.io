<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latisha's Archive</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <header>
    <div>
        <h1>Latisha's Archive</h1>
    </div>
  </header>
    <div  class="main">
     <div id="hidden"class="col">
       <p class="description">
         Hi, I'm Latisha (she/her)! I'm a senior
        studying Emerging Media.
        I'm a freelance digital illustrator
        and hopefully a future web design &
        developer.
        <br>
        <br>
        things I like:
        coffee,
        music,
        drawing,
        snacks,
        napping,
        learning new code
        <br>
        things I don't like:
        interrupted naps,
        empty coffee cup,
        phone notifications
        <br>
        I hope to learn a lot during this class!</p>
      </div>
      <div id="icon" class="me">
      <img src="me1.png"
       alt="lati" / onclick="showDiv()">
       <p class="clickfor" onclick="myFunction()">Click to learn more about me!</p>
     </div>
     </div>

     <footer>
       <div>
         In all sincerity I just hope I find a job after this...
       </div>
     </footer>

     <script>
      $(document).ready(function(){
         $('#icon').click(function() {
           $('#hidden').toggle("slide");
         });
     });



 </script>
</body>
</html>
