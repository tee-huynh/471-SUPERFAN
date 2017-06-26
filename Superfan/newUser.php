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
            
            
 
 
$sql="INSERT INTO login (username, password, age, gender, fav_quote, about_me, image, name, email )
VALUES
('$_POST[username]','$_POST[login_password]','$_POST[age]  ','$_POST[gender] ','$_POST[fav_quote] ','$_POST[email]','$_POST[about_me] ','$_POST[image] ','$_POST[name]')";

            echo "<br><br>Inserting  into db: ";
            if($conn->query($sql)==TRUE){       //try executing the query 
                echo "Query executed<br>";
                

                                      $welcome = 'welcome.html';

     header('Location: '.$welcome);  
            }
            else{
                echo "We don't know what happened. looks like your info is invalid :( did not execute<br>";
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

