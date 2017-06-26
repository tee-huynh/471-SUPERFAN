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
            
<<<<<<< HEAD

=======
            
 
            
            
            
            
            
            
            
            
>>>>>>> origin/php+-website
 
$sql = "UPDATE movie SET `name` = "$_POST[title]", `release` = "$_POST[movie_release]", synopsis = "$_POST[synopsis]"
WHERE `name = '$_POST['movie_to_change']'";

    $response = $conn->query($sql);
    if($response->num_rows > 0){

        echo $sql["name"]."------".$sql["release"]."------".$sql["synopsis"];

    }
    else{
        echo "Problem executing the quesry!! nigguh butch as cunt!! <3 8=======D`~~~~~";
    }

            echo "<br><br>Inserting  into db: ";
            if($conn->query($sql)==TRUE){       //try executing the query 
                echo "Query executed<br>";
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

