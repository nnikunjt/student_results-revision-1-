<?php
SESSION_START();

 if($_SESSION['user_name'] ==""){
     header('location: ./index.php');
 }

  	require_once("../database/connection.php");


	if(isset($_POST['submit'])){
		$fname = $_POST['first_name'];
		$mname = $_POST['middle_name'];
		$lname = $_POST['last_name'];
		$name = $fname." ".$mname." ".$lname;
		$birthdate = $_POST['birthdate'];
		$std = $_POST['std'];
		$medium = $_POST['medium'];
		$school= $_POST['school'];
		$f_name = $_POST['father_name'];
		$m_name = $_POST['mother_name'];
		$father_no = $_POST['father_no'];
		$mother_no = $_POST['mother_no'];
		$address = $_POST['address'];
		$name = strtoupper($name);
		$f_name=strtoupper($f_name);
		$m_name=strtoupper($m_name);
        $year = date('Y');
        $year = substr($year,2,3);
        $school=strtoupper($school);

		$insert_query ="INSERT INTO students(student_name,std,medium,birthdate,school,father_name,father_no,mother_name,mother_no,address
		) VALUES('$name','$std','$medium','$birthdate','$school','$f_name','$father_no','$m_name','$mother_no','$address')";

		if($conn->query($insert_query) === TRUE)
            {
                //echo "Your account has been created successfully !";
                $id = $conn->insert_id;
                if ($id<10) {
                	$id = "0".$id;
                	}
                $roll_no= $year.$std.$id;
                //echo $roll_no;
                $update_query="UPDATE students SET roll_no=$roll_no WHERE id=$id";
                if ($conn->query($update_query) === TRUE) {
                    echo "Student has been added successfully !";
                }
                else
                {
                    echo "Problem occurd during registration proccess.";
                }

            }

	}
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add student</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../jquery/jquery.min.js"></script>  
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.js"></script>
  <link href="../css/style.css" rel="stylesheet">
  <script src="../js/jspdf.js"></script>
  <script src="../js/jquery-2.1.3.js"></script>

  <style media="screen">	
		.container{
			padding-top: 1rem;
		}
	</style>
    <script>
        function sync(){
            var m_name = document.getElementById('m_name');
            var father_name = document.getElementById('father_name');
            father_name.value = m_name.value;
        }
    </script>
</head>
<body>

	<nav class="navbar navbar-dark navbar-expand-md bg-dark">
		<div class="container-fluid">
			<a href="../index.php" class=" navbar-brand">Yash classes</a>
		</div>
		<ul class="navbar-nav">
            <!--<li class="nav-item"><label class="nav-link" style="color :#FFF"></label></li>-->
            <li class="nav-item"><a href="./logout.php" class="btn btn-primary">Log out</a></li>
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
                                <a href="add_student.php" class="list-group-item disabled">Add student</a>
                                <a href="add_result.php" class="list-group-item">Add result</a>
                                <a href="add_user.php" class="list-group-item">Add user</a>
                                <a href="settings.php" class="list-group-item">Settings</a>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
	                    
			<div class="col-md-9">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<h1 class="card-title">Add student</h1>
						    <div class="card">
						        <div class="card-body">
						            <form class="" action="" method="post">
						                <div class="form-group row">
						                    <label for="student_name" class="col-sm-2 col-form-label">Student name</label>
						                    <div class="col-sm-3">
						                        <input type="text" class="form-control" name="first_name" value="" placeholder="firstname" autofocus required style='text-transform:uppercase'>
						                    </div>
						                    <div class="col-sm-3">
						                        <input type="text" class="form-control" name="middle_name" value="" placeholder="middlename" required style='text-transform:uppercase' id="m_name" onkeyup="sync()">
						                    </div>
						                    <div class="col-sm-3">
						                        <input type="text" class="form-control" name="last_name" value="" placeholder="lastname" required style='text-transform:uppercase'>
						                    </div>
						                </div>
										<div class="form-group row">
										   <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
										   <div class="col-sm-4">
											   <input type="date" class="form-control" name="birthdate" value="" required>
										   </div>
									   </div>
						                <div class="form-group row">
						                    <label for="std" class="col-sm-2 col-form-label">Std.</label>
						                    <div class="col-sm-4">
						                        <select class="form-control" name="std">
						                            <option value="01">1</option>
						                            <option value="02">2</option>
						                            <option value="03">3</option>
						                            <option value="04">4</option>
						                            <option value="05">5</option>
						                            <option value="06">6</option>
						                            <option value="07">7</option>
						                            <option value="08">8</option>
						                            <option value="09">9</option>
						                            <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    
						                        </select>
						                    </div>
						                    <label for="medium" class="col-sm-2 col-form-label">Medium</label>
						                    <div class="col-sm-4">
						                        <select class="form-control" name="medium">
						                            <option>Gujarati</option>
						                            <option>English(GSEB)</option>
						                            <option>English(CBSC)</option>
						                        </select>
						                    </div>
						                </div>
						                <div class="form-group row">
						                	<label for="school" class="col-sm-2 col-form-label">School	Name</label>
						                		<div class="col-sm-10">
						                			<input type="text" name="school" class=" form-control"  required style='text-transform:uppercase'>
						                		</div>
						                		
						                </div>
										<div class="form-group row">
						                    <label for="father_name"  class="col-sm-2 col-form-label">Father name</label>
						                    <div class="col-sm-5">
						                        <input type="text" name="father_name" class="form-control" value="" required style='text-transform:uppercase'  id="father_name">
						                    </div>
						                    <label for="father_no"  class="col-sm-2 col-form-label">Phone no. </label>
						                    <div class="col-sm-3">
						                        <input type="text" name="father_no" class="form-control" value="" required>
						                    </div>
						                </div>
						                <div class="form-group row">
						                    <label for="mother_name"  class="col-sm-2 col-form-label">Mother name</label>
						                    <div class="col-sm-5">
						                        <input type="text" name="mother_name" class="form-control" value="" required style='text-transform:uppercase'   >
						                    </div>
						                    <label for="mother_no"  class="col-sm-2 col-form-label">Phone no. </label>
						                    <div class="col-sm-3">
						                        <input type="text" name="mother_no" class="form-control" value="">
						                    </div>
						                </div>
						                <div class="form-group row">
						                    <label for="address" class="col-sm-2 col-form-label">Address</label>
						                    <div class="col-sm-10">
						                        <textarea name="address" rows="4" class="form-control" required style='text-transform:uppercase'></textarea>
						                    </div>
						                </div>
						                <center><input type="submit" name="submit" value="Add student" class="btn btn-outline-primary btn-lg"></center>
						            </form>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br>

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
