<?php
    require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Apply</title>
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
      <a class="navbar-brand" href="fhome.php"><i><b>BD Professionals</b></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="fhome.php">Home</a></li>
        <li><a href="approval.php">Make Approval</a></li>
        <li><a href="offer.php">Offer</a></li>
        <li class="active"><a href="apply.php">Apply</a></li>
        <li><a href="search.php">Search</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <?php
          include("database/db_conection.php");
          $email = $_SESSION['SESS_EMAIL'];
          ?>
        <li><a href="#"><?php echo $email ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="view_repairman.php">View Repairmans</a></p>
      <p><a href="offer_view.php">View Offers</a></p>
      <p><a href="my_offer.php">View My Offers</a></p>
      <p><a href="req.php">View My Requests</a></p>
      <p><a href="view_freelancer.php">View Freelancers</a></p>
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
                    <h4 class="panel-title"><center><h4>Apply</h4></center></h4>
                </div>
                    
                <div class="panel-body">
                    <form role="form" method="post" action="apply.php">
                        <fieldset>
                            <div class="form-group">
                                <p>Offer Id</p>
                                <input class="form-control" name="offerid" type="name" autofocus>
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
    $offerid  = $_POST['offerid'];
    if($offerid=='')
    {
        echo"<script>alert('Please enter the offer id')</script>";
        exit();
    }
    $view_offer_query="select email from offer where offerid = '$offerid'";
    $run=mysqli_query($dbcon,$view_offer_query);
    
    $check_query="select * from offer WHERE offerid='$offerid'";
    $run_que=mysqli_query($dbcon,$check_query);

    if(mysqli_num_rows($run_que)==0)
    {
        echo "<script>alert('There is no data with this offer id.')</script>";
        exit();
    }

    while($row=mysqli_fetch_array($run))
    {
        $offeremail  = $row['email'];
    }
    
    $email = $_SESSION['SESS_EMAIL'];
    $status = "pending";
    
    $insert_apply="insert into apply 
    (offerid,usermail,offermail,status) VALUE 
    ('$offerid','$email','$offeremail','$status')";
    
    if(mysqli_query($dbcon,$insert_apply))
    {
        echo"<script>alert('Successfully Inserted')</script>";
        echo"<script>window.open('apply.php','_self')</script>";
    }

}

?>
