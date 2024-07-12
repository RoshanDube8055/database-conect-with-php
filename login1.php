<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="localhost"method='post'>
        <input type="text"placeholder='Enter the name'name='name'><br><br>
        <input type="password"placeholder='Enter the password'name='password'><br><br>
        <input type="submit"value='login'>
</form>
</body>
<?php
     $name=$_POST["name"];
     $password=$_POST["password"];
     echo $name,'<br>';
     echo $password;
?>
</html>