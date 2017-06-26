<?php
 


            // put your code here
            $servername = "localhost";          //should be same for you
            $username = "root";                 //same here
            $password = "password";             //your localhost root password
            $db = "superfan";                     //your database name


            $conn = new mysqli($servername, $username, $password, $db);
            if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
            }else{
                echo "Connected<br>";
            }
            
            
 
$log_password = $_POST['password'];
$log_username = $_POST['username'];

 


// This is in the PHP file and sends a Javascript alert to the client





$sql = "SELECT username, password
FROM login WHERE username = '$log_username' AND password = '$log_password'";
$response = $conn->query($sql);
//$response = $conn->query($sql);

 
if($response-> num_rows >0) {
     

    while($row = $response->fetch_assoc()) {
        echo "<tr> <td> " .$row["username"]."</td><td>";
        echo "<br>";
        echo "<tr><td>".$row["password"]."</td><td>";
        echo " welcome back user ";
    


    }  
    
        $memberPage = 'member/memberPage.php';

     header('Location: '.$memberPage);

}
else {
    echo "Couldn't issue database quey";
    $notUser = 'notUser.html';

header('Location: '.$notUser);

}
 
            $conn-> close();            //close the connection to database

?>