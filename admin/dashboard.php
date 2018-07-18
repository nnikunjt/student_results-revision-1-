<?php
SESSION_START();

 if($_SESSION['user_name'] ==""){
     header('location: ./index.php');
 }

    require_once('..\database\connection.php');

    $select_query="SELECT * FROM students";
    $select_run = mysqli_query($conn,$select_query);
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
            
            <ul class="navbar-nav" >
            <a href="./logout.php" class="btn btn-primary" >Log out</a>
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
                                <a href="dashboard.php" class="list-group-item disabled" >Dashboard</a>
                                <a href="add_student.php" class="list-group-item ">Add student</a>
                                <a href="add_result.php" class="list-group-item">Add result</a>
                                <a href="add_user.php" class="list-group-item">Add user</a>
                                <a href="settings.php" class="list-group-item">Settings</a>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-9">
                    <div class="container-fluid">
                        <h1>Student details</h1>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead >
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Roll no.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">std.</th>
                                        <th scope="col">Medium</th>
                                        <th scope="col">Father Name</th>
                                        <th scope="col">Mobile no.</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($select_row = mysqli_fetch_array($select_run)){
                                            echo "<tr>";
                                            echo "<td><a href='update.php?update=$select_row[roll_no]' class='nav-link text-dark'>".$select_row['id']."</a></td>";
                                            echo "<td><a href='update.php?update=$select_row[roll_no]' class='nav-link text-dark'>".$select_row['roll_no']."</a></td>";
                                            echo "<td><a href='update.php?update=$select_row[roll_no]' class='nav-link text-dark'>".$select_row['student_name']."</a></td>";
                                            echo "<td><a href='update.php?update=$select_row[roll_no]' class='nav-link text-dark'>".$select_row['std']."</a></td>";
                                            echo "<td><a href='update.php?update=$select_row[roll_no]' class='nav-link text-dark'>".$select_row['medium']."</a></td>";
                                            echo "<td><a href='update.php?update=$select_row[roll_no]' class='nav-link text-dark'>".$select_row['father_name']."</a></td>";
                                            echo "<td><a href='update.php?update=$select_row[roll_no]' class='nav-link text-dark'>".$select_row['father_no']."</a></td>";
                                            echo "<td><a href='delete.php?del=$select_row[roll_no]' class='btn btn-danger'>X</a></td>";
                                            echo "</tr>";
                                        }
                                     ?>
                                </tbody>
                            </table>
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
