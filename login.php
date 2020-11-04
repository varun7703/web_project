<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link rel="stylesheet" href="css/site.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="login-page">
        <div class="modal-heading">
            <style>
               
               
                </style>
				<h2 class="text-center logintext">ROOM SERVICE</h2>
			</div>
        <div class="form">
          
          <form class="login-form" method='post'>
            <input name="uname" type="text" placeholder="Room no."/>
            <input name="pass"type="password" required placeholder="password"/>
            <input type="submit" name="submit"  class="waves-effect waves-light btn" value="login">
          </form>
        </div>
      </div>


    <!--JavaScript at end of body for optimized loading-->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>

</body>

</html>
<?php

$conn=mysqli_connect("localhost","root","","db1");

if (isset($_POST["submit"]))
{
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];

    $sql=mysqli_query($conn,"SELECT count(*) as total from login where username='".$uname."' and password ='".$pass."'") or die(mysqli_error($conn));
    $rw= mysqli_fetch_array($sql);

    if($rw['total']>0){
        echo "<script>window.open('firstpage.php')</script>";
    }
    else{
        echo "<script>alert('username and password NOT valid')</script>";
    }

}