<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
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
        <li class="active"><a href="freelancer.php">Become a user?</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
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
        <div class="col-md-4 col-md-offset-2">
        <div class="panel-heading">
                </div>
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title"><center><h4>Freelancer Registration</h4></center></h4>
                </div>
                    
                <div class="panel-body">
                    <form role="form" method="post" action="freelancer.php">
                        <fieldset>
                            <div class="form-group">
                                <p>First Name</p>
                                <input class="form-control" name="fname" type="name" autofocus>

                            </div>
                            <div class="form-group">
                                <p>Last Name</p>
                                <input class="form-control" name="lname" type="name" autofocus>
                            </div>
                            <div class="form-group">
                                <p>Email Address</p>
                                <input class="form-control" name="email" type="name" autofocus>
                            </div>
                            <div class="form-group">
                                <p>Password</p>
                                <input class="form-control" name="pass" type="Password" autofocus>
                            </div>
                            <div class="form-group">
                                <p>Contact Number</p>
                                <input class="form-control" name="cnumber" type="name" autofocus>
                            </div>
                           
                            <div class="form-group">
                                <p>Address</p>
                                <input class="form-control" name="address" type="name" autofocus>
                            </div>
                            <div class="form-group">
                                <p>Present Working/Institution Name</p>
                                <input class="form-control" name="uni" type="name" autofocus>
                            </div>
                            <div class="form-group">
                                <p>Skill</p>
                                <select name="type">
                                    <option value="General Member">General Member</option>
                                    <option value="C/C++ Programmer">C/C++ Programmer</option>
                                    <option value="Java Programmer">Java Programmer</option>
                                    <option value="C# programmer">C# Programmer</option>
                                    <option value="Python programmer">Python Programmer</option>
                                    <option value="Web developer (dot net)">Web developer (dot net)</option>
                                    <option value="Web developer (PHP + Laravel framework)">Web developer (PHP + Laravel framework)</option>
                                    <option value="2D Graphics Designer">2D Graphics Designer</option>
                                    <option value="3D Graphics Designer">3D Graphics Designer</option>
                                    <option value="Game Developer">Game Developer</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <p>Gender</p>
                                <input type="radio" name="gender" value="male" checked> Male
                                <input type="radio" name="gender" value="female"> Female 
                                <input type="radio" name="gender" value="other" checked> Other<br>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="submit" >
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
              <h1><a href="https://www.facebook.com/ruhul.kabir.3"><img src="f2.gif" height="110px"   width="120px"></a></h1></center>
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

include("database/db_conection.php");
if(isset($_POST['submit']))
{
    $user_fname  = $_POST['fname'];
    $user_lname  = $_POST['lname'];
    $user_cnumber  = $_POST['cnumber'];
    $user_type  = $_POST['type'];
    $user_address  = $_POST['address'];
    $user_uni  = $_POST['uni'];
    $user_email  = $_POST['email'];
    $user_pass  = $_POST['pass'];
    $user_gender  = $_POST['gender'];
    $user_type = $_POST['type'];
    if($user_fname=='')
    {
        echo"<script>alert('Please enter the first name')</script>";
        exit();
    }
    if(strlen($user_fname)<3||strlen($user_fname)>20)
    {
        echo"<script>alert('First name atleast 3 characters and at most 20 characters long')</script>";
        exit();
    }
    if($user_lname=='')
    {
        echo"<script>alert('Please enter the last name')</script>";
        exit();
    }
    if(strlen($user_lname)<3||strlen($user_lname)>20)
    {
        echo"<script>alert('Last name atleast 3 characters and at most 20 characters long')</script>";
        exit();
    }

    if($user_cnumber=='')
    {
        echo"<script>alert('Please enter your mobile number')</script>";
        exit();
    }
    if(strlen($user_cnumber)<6||strlen($user_cnumber)>20)
    {
        echo"<script>alert('Mobile number must be 6 to 20 characters long')</script>";
        exit();
    }
    if($user_type=='')
    {
        echo"<script>alert('Please select your skill')</script>";
        exit();
    }
    if($user_address=='')
    {
        echo"<script>alert('Please enter your full address')</script>";
        exit();
    }
    if(strlen($user_address)<6||strlen($user_address)>40)
    {
        echo"<script>alert('Address must be 12 to 40 characters long')</script>";
        exit();
    }
    if($user_uni=='')
    {
        echo"<script>alert('Please enter your current institution name')</script>";
        exit();
    }
    if(strlen($user_uni)<6)
    {
        echo"<script>alert('Institution name atleast 6 character long')</script>";
        exit();
    }
    if($user_email=='')
    {
        echo"<script>alert('Please enter your email address')</script>";
        exit();
    }
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) 
    {
        echo"<script>alert('Please enter a valid email address')</script>";
        exit();
    }
    if($user_pass=='')
    {
        echo"<script>alert('Please enter a password')</script>";
        exit();
    }
    if(!preg_match("#[0-9]+#", $user_pass) ) 
    {
        echo"<script>alert('Password have at least one number')</script>";
        exit();
    }
    if(!preg_match("#[a-z]+#", $user_pass) ) 
    {
        echo"<script>alert('Password have at least one lowercase letter')</script>";
        exit();
    }
    if(!preg_match("#[A-Z]+#", $user_pass) ) 
    {
        echo"<script>alert('Password have at least one uppercase letter')</script>";
        exit();
    }
    if(strlen($user_pass)<8||strlen($user_pass)>12)
    {
        echo"<script>alert('User password atleast 8 to 12 characters long')</script>";
        exit();
    }
    if($user_gender=='')
    {
        echo"<script>alert('Please select your gender')</script>";
        exit();
    }

    $check_freelancer_query="select * from freelancer WHERE email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_freelancer_query);

    if(mysqli_num_rows($run_query)>0)
    {
        echo "<script>alert('Handle $user_email is already exist in our database, Please try another one!')</script>";
        exit();
    }

    $insert_freelancer="insert into freelancer 
    (fname,lname,email,pass,mobile,gender,address,ins,type) VALUE 
    ('$user_fname','$user_lname','$user_email','$user_pass','$user_cnumber',
    '$user_gender','$user_address','$user_uni','$user_type')";
    if(mysqli_query($dbcon,$insert_freelancer))
    {
        echo"<script>alert('Successfully Registered.')</script>";
        echo"<script>window.open('login.php','_self')</script>";
    }

}

?>
