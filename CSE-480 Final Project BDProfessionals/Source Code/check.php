<?php
    require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
        <li class="active"><a href="fhome.php">Home</a></li>
        <li><a href="view_repairman.php">View Repairmans</a></li>
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
      <p><a href="offer.php">Make a work</a></p>
      <p><a href="offer_view.php">View Offers</a></p>
      <p><a href="my_offer.php">View My Offers</a></p>
      <p><a href="apply.php">Apply</a></p>
      <p><a href="req.php">View My Requests</a></p>
      <p><a href="view_freelancer.php">View Freelancers</a></p>
      <p><h1 class="panel-title">
          <center>
              <h1><a href="#"><img src="1.gif" height="110px"   width="120px"></a></h1></center>
          </h1> 
      </p>
    </div>
    
   
    
    
    
    
    
    
<div class="col-sm-8 text-left"> 
          
<div class="col-md-6 col-md-offset-3">
    <br>
    <div class="login-panel panel panel-success">
    <div class="panel-heading">
                    <h4 class="panel-title"><center><h4>Offer Approval</h4></center></h4>
                </div>
    
    <div class="panel-body">

        <form role="form" method="post" action="check.php">
            <fieldset>
                <div class="form-group">
                    <p>Offer Id</p>
                    <input class="form-control" name="offerid" type="name" autofocus>
                </div>
                <div class="form-group">
                    <p>Apply Id</p>
                    <input class="form-control" name="applyid" type="name" autofocus>
                </div>
                <input class="btn btn-success btn-block" type="submit" value="submit" name="submit"> 
            </fieldset>
        </form>
    </div>
    </div>
</div>
    

    <div class="table-responsive">
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <?php
        include("database/db_conection.php");
        //$find_user="select * from repairman where type = '$user_type'";
        if(isset($_POST['submit']))
        {
            $offerid=$_POST['offerid'];
            $applyid=$_POST['applyid'];
            $approved="approved";
            $denied="denied";
            $update1="update apply set status = '$denied' where offerid = '$offerid'";
            $update2="update apply set status = '$approved' where applyid = '$applyid'";
            $run=mysqli_query($dbcon,$update1);
            $run=mysqli_query($dbcon,$update2);
        }
        
            
        $view_offer_query="select * from apply where offermail = '$email' order by offerid";
        $run=mysqli_query($dbcon,$view_offer_query);

        while($row=mysqli_fetch_array($run))
        {
            $applyid = $row['applyid'];
            $offerid = $row['offerid'];
            $usermail  = $row['usermail'];
            $status  = $row['status'];
        ?>
        <div class="list-group">
              <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">Offer Id: <?php echo $offerid; ?></h4>
                <h4 class="list-group-item-heading">Apply Id: <?php echo $applyid; ?></h4>
                <h4 class="list-group-item-heading">User Mail: <?php echo $usermail; ?></h4>
                <h5 class="list-group-item-heading"><b>Current Status: <?php echo $status; ?></b></h5>
              </a>
        </div>
       <?php }?>

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
