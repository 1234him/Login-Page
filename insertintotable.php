<?php
$servername = 'localhost';
$username="sai";
$password="sai";
$database="sai";


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
die("Sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo 'Connection is successful<br>';
}

$un = "venkat";
$pw = 1234;


$s = "insert into login values ('$un', '$pw')" ;
// $p = "SELECT * FROM login

$result = mysqli_query($conn, $s);

// $num = mysqli_num_rows($result)



if($result){
echo " inserted sucessfully<br>";
}
else{
    echo "The record was not inserted  successfully because of this error -->".mysqli_error($conn);
}




    


?>