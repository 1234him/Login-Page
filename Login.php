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

<!-- 
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
        // header("Location:Welcome.php");
        echo "<span><b><h2>Welcome</h2></b></span>   "  .$r['username']; 
        
        // header("Location:Name.php?n=".$_POST["username"] );

// }

}
else {
    // echo "Invalid Username and Password";
    $error= "Invalid Credential";
}
}


?> -->












<html>

<body>






<form method="post" action="Welcome.php"  >
    <div class="head">

    <h2>MEMBER LOGIN</h2>
</div>

    <label for="username">Username</label>

    <input type="text" name="username" placeholder="Username">
<br><br>
    <label for="pasword">Pasword</label>
    
    <input type="text" name="pasword" placeholder="Password">
    <span id="err" ><?php echo $error?></span>
<br><br>

<input type="submit" value="Sign-in" id="btn">
</form>

<style>

    form{
        background-color: silver;
        /* padding:20px; */
        border:none;
        height:220px;
        width:400px;
        margin-left:35%;
        margin-top: 15%; 
        /* border-radius: 25px; */
        
    }
    
    label{
        display: inline-block;
        width:80px;
        margin-left: 50px;
    }
    h2{
        padding:5px;
        margin-left: 70px;
        
    }

    .head{
        background-color: rgba(199, 190, 190, 0.767);
        border:none;
        color:rgb(114, 106, 106);

    }
    #btn{
        height:35px;
        width:255px;
        background-color: aqua;
        border:none;
        margin-left: 67px;


    }
    #btn:hover{
        opacity: 0.8;
        cursor: pointer;
    }
    input{
        border-inline:none;
        border-bottom: none;
        border-top: none;
        height:30px;
        width:230px
    }
    #err{
        color:red;

    }


    </style>
    


</body>






</html>