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
            
            
 
$series_director = $_POST['series_director'];
 


// This is in the PHP file and sends a Javascript alert to the client

echo "<script type='text/javascript'>alert('$series_director');</script>";


$sql = "SELECT Id, created, episodenum, synstat, network, director,writer, name
FROM series WHERE director = '$series_director'";
$response = $conn->query($sql);
//$response = $conn->query($sql);

 
if($response-> num_rows >0) {
     

    while($row = $response->fetch_assoc()) {
        echo "<tr> <td> " .$row["name"]."</td><td>";
        echo "<br>";
        echo "<tr><td>".$row["Id"]."</td><td>";
        echo "<br>";
        echo "<tr><td>".$row["created"]."</td><td>";
                echo "<br>";
        echo "<tr><td>".$row["episodenum"]."</td><td>";
                echo "<br>";
        echo "<tr><td>".$row["synstat"]."</td><td>";
                echo "<br>";
        echo "<tr><td>".$row["network"]."</td><td>";
                echo "<br>";
        echo "<tr><td>".$row["director"]."</td><td>";
                echo "<br>";
        echo "<tr><td>".$row["writer"]."</td><td>";
                echo "<br>";
        echo "<tr><td>".$row["name"]."</td><td>";


    }  
     
}
else {
    echo "Couldn't issue database quey";
}
 
            $conn-> close();            //close the connection to database

?>