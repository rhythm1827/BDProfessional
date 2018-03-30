<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.css">
  <script src="bootstrap-3.2.0-dist/js/bootstrap.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home1.php"><i><b>BD Professionals</b></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home1.php">Home</a></li>
        <li><a href="freelancer.php">Become a user?</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><h1 class="panel-title">
          <center>
              <h1><a href="#"><img src="1.gif" height="110px"   width="120px"></a></h1></center>
          </h1> 
      </p>
    </div>
    <div class="col-sm-8 text-left"> 
      

<div class="container">
    <div class="row">
        <br><br>
        <div class="col-md-4 col-md-offset-2">

            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title"><center>User Login</center></h4>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="i.e: ruhul5347@gmail.com" name="email" type="name" autofocus value="ruhul5347@gmail.com">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="Loga61827">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><h1 class="panel-title">
          <center>
              <h1><a href="#"><img src="2.gif" height="110px"   width="120px"></a></h1></center>
          </h1> 
        </p>
      </div>
      <div class="well">
        <p><h1 class="panel-title">
          <center>
              <h1><a href="https://www.facebook.com/ruhul.kabir.3"><img src="f2.gif" height="110px" width="120px"></a></h1></center>
          </h1> 
        </p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>copyright @ rhythm</p>
</footer>

</body>
</html>


<?php
//session_start();
include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];
    if($user_email=='')
    {
        echo"<script>alert('Please enter the handle')</script>";
        exit();
    }
    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
        exit();
    }
    $check_user="select * from freelancer WHERE email='$user_email' AND pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if($run){
        if(mysqli_num_rows($run))
        {
            while($row=mysqli_fetch_array($run))
            {
                session_start();
                $_SESSION['SESS_EMAIL'] = $row['email'];
                session_write_close();
            }
            echo "<script>window.open('fhome.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Email or password is incorrect!')</script>";
            exit();
        }
    }else{
        echo "An error";
    }
}
?>