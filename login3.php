<?php

$servername="localhost";
$username="root";
$password="";
$database="data2";
$con = mysqli_connect($servername,$username,$password,$database);
if(!$con){
    echo "not connected";
}
else{
    echo "connected";
}
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];

$sql="INSERT INTO `log3`(`name`, `email`, `password`, `contact`) VALUES ('$name','$email','$password','$contact')";
$result=mysqli_query($con,$sql);
if($result){
    echo "data submited";
}
else{
    echo "not submit showing error";
}
?>