<?php

session_start();
$con =mysqli_connect('localhost','root');
#if($con){
 #   echo "Succesful";
#}
#else{
#    echo "Not succesful";
#}
mysqli_select_db($con,'demo');
if(isset($_POST['username']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
$sql="select * from loginform where user='".$uname."' AND pass='".$password."' limit 1";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
    if($num==1)
    {
    echo "You have sucessfully logged in";    
    exit();    
     }
    else
    {
        echo "you have enter incorrect password";
            exit();
        
    }
    
    
}


?>


















<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
    <form  method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username" class="form-control">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>