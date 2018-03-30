<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>View repairman</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>
        <div class="panel-bodyf"><center>
           <a href="prob.php" class="btn btn-primary">Problem Entry</a>
           <a href="problem.php" class="btn btn-success">Submission Entry</a>
           <a href="view_users.php" class="btn btn-info">View All Users</a>
           <a href="view_prob.php" class="btn btn-info">View All Problems</a>
        </center></div>
    
    
    
    
<div class="panel-body">
    <form role="form" method="post" action="view_repairman.php">
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
        </fieldset>
    </form>
</div>
    
    
    
    
    
<div class="table-scrol">
    <h1 align="center">Repairmans</h1>

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
            $user_type  = $_POST['type'];
            //$find_user="select * from repairman where type = '$user_type'";
            
            $view_repairman_query="select * from repairman where type = '$user_type'";
            $run=mysqli_query($dbcon,$view_repairman_query);

            while($row=mysqli_fetch_array($run))
            {
                $user_name  = $row[0];
                $user_type = $row[1];
                $user_area  = $row[2];
                $user_address  = $row[3];
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
        

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>