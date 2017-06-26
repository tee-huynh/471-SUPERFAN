<?php
 


            // put your code here
            $servername = "localhost";          //should be same for you
            $username = "root";                 //same here
            $password = "future";             //your localhost root password
            $db = "superfan";                     //your database name


            $conn = new mysqli($servername, $username, $password, $db);
            if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
            }else{
                echo "Connected<br>";
            }
            
            
 
$movie_name = $_POST['movie_name'];
 


// This is in the PHP file and sends a Javascript alert to the client
echo "<script type='text/javascript'>alert('hi I am ore');</script>";

echo "<script type='text/javascript'>alert('$movie_name');</script>";


$sql = "SELECT movie_release, synopsis, title
FROM movie WHERE title = '$movie_name'";
$response = $conn->query($sql);
//$response = $conn->query($sql);

 
if($response-> num_rows >0) {
     

    while($row = $response->fetch_assoc()) {
        echo "<tr> <td> " .$row["release"]."</td><td>";
        echo "<br>";
        echo "<tr><td>".$row["synopsis"]."</td><td>";
        echo "<br>";
        echo "<tr><td>".$row["title"]."</td><td>";
      


    }  
     
}
else {
    echo "Couldn't issue database query";
                   echo "Query did not execute<br>";
                $notMovieFound = 'noSearchResults.html';
         //   header('Location: '.$notMovieFound);
}
 
            $conn-> close();            //close the connection to database

?>