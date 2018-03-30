<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Repairmans</title>
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
        <li><a href="apply.php">Apply</a></li>
        <li><a href="search.php">Search</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo 'ADMIN' ?></a></li>
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
          
<div class="col-md-4 col-md-offset-4">
    <br>
    
    <div class="login-panel panel panel-success">
    <div class="panel-heading">
                    <h4 class="panel-title"><center><h4>Search</h4></center></h4>
                </div>
    
<div class="panel-body">
    
    <form role="form" method="post" action="viewrip.php">
        <fieldset>
            <div class="form-group">
                    <p>Type</p>
                    <select name="type">
                        <option value="Electrician">Electrician</option>
                        <option value="Plumber">Plumber</option>
                        <option value="GAS mistree">Gas mistree</option>
                        <option value="TV repairman">TV repairman</option>
                        <option value="Fridge Repairman">Fridge Repairman</option>
                        <option value="AC Repairman">AC Repairman</option>
                  </select>
            </div>
            <input class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="submit"> 
            <br>
            <a href="viewfre.php" class="btn btn-primary">View Freelancers</a>
                <a href="repairman.php" class="btn btn-primary">Add Repairman</a>
        </fieldset>
    </form>
</div>
    </div>
    </div>
    
    
    
    
    
<div class="table-scrol">
    <h1 align="center"></h1>

<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>
        <tr>
            <th colspan="3"><center>Name</center></th>
            <th colspan="2"><center>Type</center></th>
            <th colspan="2"><center>Area</center></th>
            <th colspan="2"><center>Address</center></th>
            <th colspan="2"><center>Mobile Number</center></th>        
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        if(isset($_POST['submit']))
        {
            ?>
        
            <h3 align="center"><br><br><br><br><br><br><br><br><br><br><br><br><br>Repairmans</h3>
            <?php
            $user_type  = $_POST['type'];
            //$find_user="select * from repairman where type = '$user_type'";
            
            $view_repairman_query="select * from repairman where type = '$user_type'";
            $run=mysqli_query($dbcon,$view_repairman_query);

            while($row=mysqli_fetch_array($run))
            {
                $user_name  = $row[0];
                $user_type = $row[1];
                $user_area  = $row[3];
                $user_address  = $row[2];
                $user_cnumber  = $row[4];
            ?>

            <tr>
                <td colspan="3"><?php echo $user_name;  ?></td>
                <td colspan="2"><?php echo $user_type;  ?></td>
                <td colspan="2"><?php echo $user_area;  ?></td>
                <td colspan="2"><?php echo $user_address;  ?></td>
                <td colspan="2"><?php echo $user_cnumber;  ?></td>
            </tr>
       <?php }?>
        

        <?php }
        else
        {
            ?>
        <h3 align="center"><br><br><br><br><br><br><br><br><br><br><br><br><br>Repairmans</h3>
        <?php
            $view_repairman_query="select * from repairman";
            $run=mysqli_query($dbcon,$view_repairman_query);

            while($row=mysqli_fetch_array($run))
            {
                $user_name  = $row[0];
                $user_type = $row[1];
                $user_area  = $row[3];
                $user_address  = $row[2];
                $user_cnumber  = $row[4];
            ?>

            <tr>
                <td colspan="3"><?php echo $user_name;  ?></td>
                <td colspan="2"><?php echo $user_type;  ?></td>
                <td colspan="2"><?php echo $user_area;  ?></td>
                <td colspan="2"><?php echo $user_address;  ?></td>
                <td colspan="2"><?php echo $user_cnumber;  ?></td>
            </tr>

            <?php } ?>
        <?php } ?>

    </table>
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
