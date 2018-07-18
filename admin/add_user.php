<?php
SESSION_START();

 if($_SESSION['user_name'] ==""){
     header('location: ./index.php');
 }



    require_once('../database/connection.php');


    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST ['password'];

        $insert_query = "INSERT INTO users(user_name,password) VALUES ('$user','$pass')";

        if($conn->query($insert_query) === TRUE){
			echo "Your account has been created successfully !";
		}
		else
		{
			echo "This student is not registered ";
		}
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Admin</title>
    
        <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../jquery/jquery.min.js"></script>  
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.js"></script>
        <link href="../css/style.css" rel="stylesheet">
  <script src="../js/jspdf.js"></script>
  <script src="../js/jquery-2.1.3.js"></script>

        <style type="text/css">
            h1 {
                margin-top: 1rem;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <div class="container-fluid">
                <a href="../index.php" class="navbar-brand">Yash classes</a>
            </div>
            <ul class="navbar-nav">
                <a href="./logout.php" class="btn btn-primary">Log out</a>
        </ul>
        </nav>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            Links
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <a href="dashboard.php" class="list-group-item">Dashboard</a>
                                <a href="add_student.php" class="list-group-item ">Add student</a>
                                <a href="add_result.php" class="list-group-item">Add result</a>
                                <a href="add_user.php" class="list-group-item disabled">Add user</a>
                                <a href="settings.php" class="list-group-item">Settings</a>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col-md-9">
                    <div class="container-fluid">
                        <h1>Add User</h1>
                        <div class="card">
                            <div class="card-body">
                                <form class="" action="" method="post">
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-2 col-form-label">User name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username" value="" autofocus required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password" value="" required>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-outline-primary btn-lg" name="submit" value="Add user">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>


 <footer class="footer">
 <div class="container-fluid paddind">
    <div class="row ">
        
        <div class="col-md-4">          
           <p class="text-muted" >B-4, Chitrakoot Society - 2, Opp. Tulsidham Market, Zadeshwar Road, Bharuch.<br>
             Dipesh sir Mo. 96381 92399 </p>
           
        </div>
        <div class="col-md-8" align="right">
            <p> Developed by
            <a href="https://plus.google.com/103929880037258813858" target="_blank">Nikunj,</a>
                  <a href="https://plus.google.com/100510913946087775138" target="_blank"> Kishan</a></p>
        </div>      
</footer>



</body>
</html>
