<?php
include 'connect.php';


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $description=$_POST['desc'];

  $sql="insert into todolist (name,`Username/Email`,password,description) values('$name','$email','$password','$description') ";

  $result=mysqli_query($conn,$sql);
  if($result){
    header('location:display.php');
  }
  else{
    echo"error Generated";
    die(mysqli_error($conn));
  }
}
?>
















<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="box">
<div class="form-container">
    <form class="form" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="text" name="name" required="" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="email">Email/Username</label>
          <input type="text" id="text" name="email" required="" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="text" name="password" required="" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="text_area">description</label>
          <input type="text" id="text" name="desc" required="" autocomplete="off">
        </div>
        <button class="form-submit-btn" type="submit" name="submit">Submit</button>
      </form>
    </div>
</div>    

</body>
</html>