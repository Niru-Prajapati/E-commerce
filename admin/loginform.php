<?php
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
    //handle login submit
    $username =  $_POST['username'];
    $pwd=$_POST['pwd'];
    if ($username==='Niru' && $pwd==='Niru@123'){
        echo 'Correct login';
    }else{
        echo 'Invalid credentials';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative pannel-Swastik Ecommerce</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
    <form  method="post" action="">
        <div class="row">
            <div class="col-4">
                <label for="">Username</label>
            </div>
            <div class="col-8">
              <input type="text" name="username" id="username">
            </div>
       </div>
        <div class="row">
            <div class="col-4">
                <label for="pwd">Password</labek>
           </div>
           <div class="col-8">
            <input required type="password" name="pwd" id="pwd">
           </div>
        </div>
        <div class="row">
            <div class="col-12">
               <button class="btn btn-primary" type="submit">Login</button>
           </div>        
        </div>

</form>
</body>
</html>