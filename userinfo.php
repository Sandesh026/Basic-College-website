<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection successful";
    
}else{
    echo"no connection";
}

 mysqli_select_db($con,'studentinfo');

$fname = $_post['fname'];
$lname = $_post['lname'];
$email = $_post['email'];
$mobile = $_post['mobile'];

$query="insert into studentinfo(fname,lname,email,mobile) 
        values ('$fname','$lname','$email','$mobile')";



mysqli_query($con,$query);

header('location:index.php');
 

?>
