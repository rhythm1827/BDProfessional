<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Add Repairman</title>
</head>
<style>
    .login-panel {
        margin-top: 50px;

</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><center><h2>Insert Repairman</h2></center></h3>
                </div>
                    
                <div class="panel-body">
                    <form role="form" method="post" action="repairman.php">
                        <fieldset>
                            <div class="form-group">
                                <p>Name</p>
                                <input class="form-control" name="name" type="name" autofocus>

                            </div>
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
                            <div class="form-group">
                                <p>Area</p>
                                <select name="area">
                                    <option value="Gulshan">Gulshan</option>
                                    <option value="Banani">Banani</option>
                                    <option value="Mohakhali">Mohakhali</option>
                                    <option value="Tejgoan">Tejgoan</option>
                                    <option value="Dhanmondi">Dhanmondi</option>
                                    <option value="Mirpur 1">Mirpur 1</option>
                                    <option value="Mirpur 10">Mirpur 10</option>
                                    <option value="Mirpur 12">Mirpur 12</option>
                                    <option value="Cantonment">Gulshan</option>
                                    <option value="Uttara">Uttara</option>
                                    <option value="Mohammadpur">Mohammadpur</option>
                                    <option value="Bashundhara/Baridhara">Bashundhara/Baridhara</option>
                                    <option value="Khilgaon">Khilgoan</option>
                                    <option value="Rampura">Rampura</option>
                                    <option value="Sayedabad">Sayedabad</option>
                                    <option value="Motijheel">Motijheel</option>

                              </select>
                            </div>
                            <div class="form-group">
                                <p>Contact Number</p>
                                <input class="form-control" name="cnumber" type="name" autofocus>
                            </div>
                           
                            <div class="form-group">
                                <p>Address</p>
                                <input class="form-control" name="address" type="name" autofocus>
                            </div>
                            
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="submit" >
                            <br>
                            <a href="viewrip.php" class="btn btn-primary">View Users</a>
                            <a href="viewfre.php" class="btn btn-primary">View Freelancer</a>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");
if(isset($_POST['submit']))
{
    $user_name  = $_POST['name'];
    $user_cnumber  = $_POST['cnumber'];
    $user_address  = $_POST['address'];
    $user_type  = $_POST['type'];
    $user_area  = $_POST['area'];

    $insert_user="insert into repairman 
    (name,type,address,area,mobile) VALUE 
    ('$user_name','$user_type','$user_address','$user_area','$user_cnumber')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>alert('Successfully Inserted')</script>";
        echo"<script>window.open('repairman.php','_self')</script>";
    }

}

?>