<!--
Credits for base template and navigation toolbar:
http://ettrics.com/code/horizontal-tab-menu/
-->

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Expanding Column Layout</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <section class="strips">
  <article class="strips__strip">
    <div class="strip__content">
        <h1 class="strip__title" data-name="Lorem">About You</h1>
        <div class="strip__inner-text">

          
        
        <?php
 


            // put your code here
            $servername = "localhost";          //should be same for you
            $username = "root";                 //same here
            $password = "password";             //your localhost root password
            $db = "superfan";                     //your database name


            $conn = new mysqli($servername, $username, $password, $db);
            if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
            }
            
          
 
            $log_password = $_POST['password'];
            $log_username = $_POST['username'];
            


            // This is in the PHP file and sends a Javascript alert to the client

            echo "<script type='text/javascript'>alert('$log_username');</script>";
            echo "<script type='text/javascript'>alert('$log_password');</script>";



            $sql = "SELECT username, password, age, gender, fav_quote,about_me ,name, image
            FROM login WHERE username = '$log_username' AND password = '$log_password'";
            $response = $conn->query($sql);
            //$response = $conn->query($sql);


            if($row = $response->fetch_assoc()) {
                
                echo "<h2>".$row["name"]."</h2>";
                echo $row["image"];
                echo "<p>Age".$row["age"]."</p>";
                echo "<br>";
                echo "<p>Gender: ".$row["gender"]."</p>";
                echo "<br>";
                echo "<p>Favorite quotes: ".$row["fav_quote"]."</p>";
                echo "<br>";
                echo "<p>About Me: ".$row["about_me"]."</p>";
            
                
                /*
                while($row = $response->fetch_assoc()) {
                    echo "<tr> <td> " .$row["username"]."</td><td>";
                    echo "<br>";
                    echo "<tr><td>".$row["password"]."</td><td>";
                    echo " welcome back user ";



                }  
                   */
            }
            

            $conn-> close();            //close the connection to database

        ?>

      <!--  
        <p>Age:20</p>
        <br>
        <p>Gender: Female</p>
        <br>
        <p> Favorite quotes: "Life imitates art"- Oscar Wilde</p>
        <br>
        <p>About Me: Hey there lemon square my name is Ore A and I am a student at the university of calgary! My favorite movie is Beasts of the Southern Wild. My Favorite Genre is Magical Realism.</p>
      -->

        <p>
          <a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
        </p>
      </div>
      
    </div>
  </article>
  <article class="strips__strip">
    <div class="strip__content">
      <h1 class="strip__title" data-name="Ipsum">movies that you follow</h1>
      <div class="strip__inner-text">
        <h2>Ettrics</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sapiente deserunt consectetur, quod reiciendis corrupti quo ea aliquid! Repellendus numquam quo, voluptate. Suscipit soluta omnis quibusdam facilis, illo voluptates odit!</p>
        <p>
          <a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
        </p>
      </div>
    </div>
  </article>
  <article class="strips__strip">
    <div class="strip__content">
      <h1 class="strip__title" data-name="Dolor">Actors that You follow</h1>
      <div class="strip__inner-text">
        <h2>Ettrics</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sapiente deserunt consectetur, quod reiciendis corrupti quo ea aliquid! Repellendus numquam quo, voluptate. Suscipit soluta omnis quibusdam facilis, illo voluptates odit!</p>
        <p>
          <a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
        </p>
      </div>
    </div>
  </article>
  <article class="strips__strip">
    <div class="strip__content">
      <h1 class="strip__title" data-name="Sit">Ratings</h1>
      <div class="strip__inner-text">
        <h2>Ettrics</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sapiente deserunt consectetur, quod reiciendis corrupti quo ea aliquid! Repellendus numquam quo, voluptate. Suscipit soluta omnis quibusdam facilis, illo voluptates odit!</p>
        <p>
          <a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
        </p>
      </div>
    </div>
  </article>
  <article class="strips__strip">
    <div class="strip__content">
      <h1 class="strip__title" data-name="Amet">Member Deals</h1>
      <div class="strip__inner-text">
        <h2>Ettrics</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sapiente deserunt consectetur, quod reiciendis corrupti quo ea aliquid! Repellendus numquam quo, voluptate. Suscipit soluta omnis quibusdam facilis, illo voluptates odit!</p>
        <p>
          <a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
        </p>
      </div>
    </div>
  </article>
  <i class="fa fa-close strip__close"></i>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
