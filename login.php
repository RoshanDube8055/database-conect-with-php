<?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="data1";
  $con = mysqli_connect($servername,$username,$password,$database);
  if(!$con){
    echo "not connected showing error";
  }
  else{
    echo "connection sussesful";
  }

  $name=$_POST['name'];
  $email=$_POST['email'];

  $sql ="INSERT INTO `log3`(`name`, `email`) VALUES ('$name','$email')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "data submited";

  }
  else{
    echo "qury faild";
  }
?>