<html>
<body>

</body>
<style>
h2{
    display:inline-block;
    color:red;
}
    </style>


</html>


<?php

$servername = 'localhost';
$username="sai";
$password="sai";
$database="sai";

$conn = mysqli_connect($servername, $username, $password, $database);


$error="";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{


    $c = $_POST['username'];
    $r = $_POST['pasword'];

    $s = "SELECT * FROM login where username = '$c' and pasword = '$r'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result); 
    // $num = mysqli_num_col($result);

    

    // echo $num;
    // echo " records found in my table<br>";


if($r = mysqli_fetch_assoc($result) ){
    // while($r = mysqli_fetch_assoc($result)){
        echo "<span><b><h2>Welcome</h2></b></span>   "  .$r['username']; 
        

// }

}
else {
    
    echo "Invalid Username and Password";
    
    
    // $error= "Invalid Credential";
}
}


?>





