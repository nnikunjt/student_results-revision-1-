<?php
SESSION_START();

 if($_SESSION['user_name'] ==""){
     header('location: ./index.php');
 }


  	require_once("../database/connection.php");

    if(isset($_GET['update'])){
        $roll_no =$_GET['update'];

        $select_query ="SELECT * FROM students WHERE roll_no = $roll_no";
        $select_run=mysqli_query($conn,$select_query);
        $res=mysqli_fetch_array($select_run);

        $name= explode(" ",$res['student_name']);

    }


	if(isset($_POST['update'])){
        $fname = $_POST['f_name'];
        $mname = $_POST['m_name'];
        $lname = $_POST['l_name'];
        $name =$fname." ".$mname." ".$lname;
		$birthdate = $_POST['birthdate'];
		$school=$_POST['school'];
		$std = $_POST['std'];
		$medium = $_POST['medium'];
		$f_name = $_POST['father_name'];
		$m_name = $_POST['mother_name'];
		$father_no = $_POST['father_no'];
		$mother_no = $_POST['mother_no'];
		$address = $_POST['address'];
		$name = strtoupper($name);
		$f_name=strtoupper($f_name);
		$m_name=strtoupper($m_name);
        $school=strtoupper($school);

		$update_query ="UPDATE students SET student_name ='$name', std ='$std', medium='$medium', birthdate='$birthdate',school='$school', father_name ='$f_name', father_no='$father_no',mother_no='$mother_no',mother_name='$m_name', address='$address' WHERE roll_no=$roll_no";

		if($conn->query($update_query) === TRUE)
            {
                header('location:dashboard.php');
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
                                <a href="add_student.php" class="list-group-item">Add student</a>
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
							<h1 class="card-title">Update student details</h1>
						    <div class="card">
						        <div class="card-body">
						            <form class="" action="" method="post">
                                        <div class="form-group row">
						                    <label for="student_name" class="col-sm-2 col-form-label">Student name</label>
						                    <div class="col-sm-3">
						                        <input type="text" class="form-control" name="f_name" value="<?php echo $name[0]; ?>" placeholder="first name" autofocus required>
						                    </div>
                                            <div class="col-sm-3">
						                        <input type="text" class="form-control" name="m_name" value="<?php echo $name[1]; ?>" placeholder="middle name" id="m_name" onkeyup="sync()" required>
						                    </div>
                                            <div class="col-sm-3">
						                        <input type="text" class="form-control" name="l_name" value="<?php echo $name[2]; ?>" placeholder="last name"  required>
						                    </div>
						                </div>
										<div class="form-group row">
										   <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
										   <div class="col-sm-4">
											   <input type="date" class="form-control" name="birthdate" value="<?php echo $res['birthdate']; ?>" required>
										   </div>
									   </div>
						                <div class="form-group row">
						                    <label for="std" class="col-sm-2 col-form-label">Std.</label>
						                    <div class="col-sm-4">
						                        <select class="form-control" name="std">
						                            <option value="01" <?php if($res['std'] == '01'){ echo "selected";} ?>>1</option>
						                            <option value="02" <?php if($res['std'] == '02'){ echo "selected";} ?>>2</option>
						                            <option value="03"<?php if($res['std'] == '03'){ echo "selected";} ?>>3</option>
						                            <option value="04" <?php if($res['std'] == '04'){ echo "selected";} ?>>4</option>
						                            <option value="05" <?php if($res['std'] == '05'){ echo "selected";} ?>>5</option>
						                            <option value="06" <?php if($res['std'] == '06'){ echo "selected";} ?>>6</option>
						                            <option value="07" <?php if($res['std'] == '07'){ echo "selected";} ?>>7</option>
						                            <option value="08" <?php if($res['std'] == '08'){ echo "selected";} ?>>8</option>
						                            <option value="09" <?php if($res['std'] == '09'){ echo "selected";} ?>>9</option>
						                            <option <?php if($res['std'] == '10'){ echo "selected";} ?>>10</option>
                                                    <option <?php if($res['std'] == '11'){ echo "selected";} ?>>11</option>
                                                    <option <?php if($res['std'] == '12'){ echo "selected";} ?>>12</option>
						                        </select>
						                    </div>
						                    <label for="medium" class="col-sm-2 col-form-label">Medium</label>
						                    <div class="col-sm-4">
						                        <select class="form-control" name="medium">
						                            <option <?php if($res['medium'] == 'Gujarati'){ echo "selected";} ?>>Gujarati</option>
						                            <option <?php if($res['medium'] == 'English(GSEB)'){ echo "selected";} ?>>English(GSEB)</option>
						                            <option <?php if($res['medium'] == 'English(CBSC)'){ echo "selected";} ?> >English(CBSC)</option>
						                        </select>
						                    </div>
						                </div>
						                <div class="form-group row">
						                	<label for="school" class="col-sm-2 col-form-label">
						                		School	Name</label>
						                		<div class="col-sm-10">
						                			<input type="text" name="school" class=" form-control"  required style='text-transform:uppercase' value="<?php  echo $res['school']; ?>">
						                		</div>
						                		
						                </div>
										<div class="form-group row">
						                    <label for="father_name"  class="col-sm-2 col-form-label">Father name</label>
						                    <div class="col-sm-5">
						                        <input type="text" name="father_name" class="form-control" id="father_name" value="<?php echo $name[1]; ?>" required>
						                    </div>
						                    <label for="father_no"  class="col-sm-2 col-form-label">Phone no. </label>
						                    <div class="col-sm-3">
						                        <input type="text" name="father_no" class="form-control" value="<?php echo $res['father_no']; ?>" required>
						                    </div>
						                </div>
						                <div class="form-group row">
						                    <label for="mother_name"  class="col-sm-2 col-form-label">Mother name</label>
						                    <div class="col-sm-5">
						                        <input type="text" name="mother_name" class="form-control" value="<?php echo $res['mother_name']; ?>" required>
						                    </div>
						                    <label for="mother_no"  class="col-sm-2 col-form-label">Phone no. </label>
						                    <div class="col-sm-3">
						                        <input type="text" name="mother_no" class="form-control" value="<?php echo $res['mother_no']; ?>">
						                    </div>
						                </div>
						                <div class="form-group row">
						                    <label for="address" class="col-sm-2 col-form-label">Address</label>
						                    <div class="col-sm-10">
						                        <textarea name="address" rows="4" class="form-control" required><?php echo $res['address']; ?></textarea>
						                    </div>
						                </div>
						                <center><input type="submit" name="update" value="Update" class="btn btn-outline-primary btn-lg"></center>
						            </form>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br><br>


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
