<?php
 
 $servarname="localhost";
 $username="root";
 $password="";
 $database="data4";
 $con = mysqli_connect($servarname,$username,$password,$database);
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

 $sql="INSERT INTO `log4`(`name`, `email`, `password`, `contact`) VALUES ('$name','$email','$password','$contact')";
 $result = mysqli_query($con,$sql);
 if($result){
    echo "<br>connected";
 }
 else{
    echo "faild";
 }
?>