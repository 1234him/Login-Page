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

// $s = "Create table login(username varchar(25), password varchar(10), primarykey(username))" ;

$s = "CREATE TABLE login
( 
    username VARCHAR(12) NOT NULL,
    pasword VARCHAR(10) NOT NULL, 
    
    PRIMARY KEY (username)
)";

$result = mysqli_query($conn,$s);

if($result){
    echo "The table created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}


?>