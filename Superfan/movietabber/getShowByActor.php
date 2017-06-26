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
            
            
 

$series_name = $_POST['series_name'];
 
$sql = "SELECT Id, created, episodenum, synstat, network, director,writer,name "
        . "FROM series WHERE name = '$series_name'";
 
$response = @mysqli_query($db, $sql);
 
if($response) {
    echo '<table align="left" cellspacing="5" cellpadding="8">
     
     
    <tr><td align="left"><b>Show ID</b>
    <td align="left"><b> Created by</b></td>
    <td align="left"><b>Number of Episodes</b></td>
    <td align="left"><b>Syndication Status</b></td>
    <td align="left"><b>network</b></td>
        <td align="left"><b>director</b></td>
    <td align="left"><b>writer</b></td>

    <td align="left"><b>Name of show</b></td></tr>';  
     
    while($row = mysqli_fetch_array($response)) {
        echo '<tr><td align="left">' .
        $row['Id'] . '</td><td align="left">' .
        $row['created'] . '</td><td align="left">' .
        $row['episodenum'] . '</td><td align="left">' .
        $row['synstat'] . '</td><td align ="left">' .
        $row['network'] . '</td><td align ="left">' .
        $row['director'] . '</td><td align= "left">';
                $row['writer'] . '</td><td align="left">' .
        $row['name'] . '</td><td align= "left">';
         
        echo '</tr>';
    }  
    echo '</table>';
     
}
else {
    echo "Couldn't issue database query";
}
 
            $conn-> close();            //close the connection to database

?>