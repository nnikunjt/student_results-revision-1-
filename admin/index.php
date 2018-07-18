<?php
SESSION_START();

    require_once('../database/connection.php');


    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select_query = "SELECT `user_name`, `password` FROM `users` WHERE `user_name` = '$username' AND `password` = '$password'";
        $select_run = mysqli_query($conn, $select_query);
        $select_row = mysqli_fetch_array($select_run, MYSQLI_ASSOC);


        $user = $select_row['user_name'];
        $pass = $select_row['password'];



        if($username == $user && $password == $pass)
        {
            $_SESSION['user_name'] = $user ;
            header('location:./dashboard.php');
        }
        else {
            echo "Invalid username or password.";
        }

    }
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>
		
 		<link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../jquery/jquery.min.js"></script>  
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.js"></script>
  		<link href="../css/style.css" rel="stylesheet">
  <script src="../js/jspdf.js"></script>
  <script src="../js/jquery-2.1.3.js"></script>

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1 class="card-title">Login</h1>
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
						<input type="submit" class="btn btn-outline-primary btn-lg" name="login" value="Login">
					</form>
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
