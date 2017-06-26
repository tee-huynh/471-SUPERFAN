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
            
 $name_to_change = $_POST['name_to_change'];           
 $name=$_POST['name'];
 $created=$_POST['created'];
 $tvepisodes=$_POST['tvepisodes'];
 $tvss=$_POST['tvss'];
 $tvne=$_POST['tvne'];
 $tvdirector=$_POST['tvdirector'];
 $tvwriter=$_POST['tvwriter'];
 $tvyear=$_POST['tvyear'];

  echo "<script type='text/javascript'>alert('$name_to_change');</script>";
  echo "<script type='text/javascript'>alert('$name');</script>";
 echo "<script type='text/javascript'>alert('$created');</script>";
  echo "<script type='text/javascript'>alert('$tvepisodes');</script>";
  
$sql="UPDATE series"
     ." SET name = '$name', created = '$created', episodenum = $tvepisodes, synstat = '$tvss', network = '$tvne', director = '$tvdirector',
         writer = '$tvwriter', year = $tvyear"
     ." WHERE name = '$name_to_change'";

            echo "<br><br>Inserting  into db: ";
            if($conn->query($sql)){       //try executing the query 
                echo "TV Show with the name: $name_to_change<br>";
            }
            else{
                echo "Query did not execute<br>";
            }
 
            $conn-> close();            //close the connection to database

?>
</body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

