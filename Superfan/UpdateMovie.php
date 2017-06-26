<html>
<body>
 
 
<?php

            // put your code here
            $servername = "localhost";          //should be same for you
            $username = "user";                 //same here
            $password = "password";             //your localhost root password
            $db = "superfan";                     //your database name


            $conn = new mysqli($servername, $username, $password, $db);
            if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
            }else{
                echo "Connected<br>";
            }

         
      //    $movie_to_change="Shrek";
$movie_release=$_POST['movie_release'];
 $movie_to_change=$_POST['movie_to_change'];
 $title=$_POST['title'];
 $synopsis=$_POST['synopsis'];
 
      echo "<script type='text/javascript'>alert('$title');</script>";
            echo "<script type='text/javascript'>alert('$movie_to_change');</script>";
            echo "<script type='text/javascript'>alert('$synopsis');</script>";
            echo "<script type='text/javascript'>alert($movie_release);</script>";
            

      
 //$movie_release=$_POST['movie_release'];
 //$movie_to_change=$_POST['movie_to_change'];



 //$synopsis=$_POST['synopsis'];

 
$sql = "UPDATE movie"
        ." SET title = '$title', movie_release = $movie_release, synopsis = '$synopsis'"
        ." WHERE title = '$movie_to_change'";
          
if($conn->query($sql)==TRUE){       //try executing the query 
                echo "<p>Movie with the original name of: ".$movie_to_change. " has been updated!</p>" ;
            }
            else{
                echo "Query did not execute<br>";
            }
 

?>
</body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

