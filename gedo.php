<?php

$Email=$_REQUEST["email"];
$Name=$_REQUEST["Name"];
$phonenumber=$_REQUEST["phonenuber"];
$Address=$_REQUEST["Address"];
$Faculty_and_level= $_REQUEST ["Faculty and level"]
$Department= $_REQUEST ["Department"]
if(isset($_POST['Register'])){
    

    $host="localhost";
    $user="root";
    $password="";
    $database="bisian";

    $conn = mysqli_connect($host,$user,$password,$database);
    
    
    $insert="insert into users values($$Department','$Email','$Name','$Faculty_and_level','$phonenumber','$Address')";
    
    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style='color:green;'> studenet register complete</h1>!");
    }else{
        echo("<h1 style='color:red;'>student register Failed!</h1>!");
    };
}
?>