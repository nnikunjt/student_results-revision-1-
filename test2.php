<?php

    require_once('database/connection.php');

   
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">   
  </script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jspdf.js"></script>
  <script src="js/jquery-2.1.3.js"></script>
  <style media="screen">
        .col-sm-4{
            padding-top: .4rem;
        }
        .f{
            font-size: 2rem;
            color: #34AF23;
        }
 .downloadbutton{
    margin-top: .7rem;
}
</style>
    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark">
    <div class=" container-fluid">
      <a href="index.php" class="navbar-brand">Yash classes</a>
    </div>



     
</nav>



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form class="" action="test2.php" method="get">
                        <div class="form-group row" style="padding: .3rem;">
                            <label for="roll_no" class="col-sm-1 col-form-label">Roll no.</label>
                            <div class="col-sm-2">
                                <input type="text" name="roll_no" class="form-control" value="" required>
                            </div>
                            <div class="col-sm-1">
                               <!-- <input type="submit" name="find" class="text-center btn btn-success" value="Find Result">-->
                               <button type="submit" class="btn btn-success">Find Result</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
  $none="1";
    // showing results
    if (isset($_GET['roll_no'])) {
        $roll_no = $_GET['roll_no'];

        $select_query = "SELECT * FROM students INNER JOIN results ON students.roll_no = results.roll_no WHERE students.roll_no = $roll_no AND results.test_date = (SELECT MAX(test_date) FROM results WHERE roll_no = $roll_no)";
        $select_run = mysqli_query($conn, $select_query);
        $select_row = mysqli_fetch_array($select_run);

        $pdfname= $roll_no."_".$select_row['test_date'];
       $the_sitename= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      $the_sitename= substr(  $_SERVER['REQUEST_URI'] , 0, -7 );
    echo "
          <div class='container'>
            <div class='row'>
                <div class='col-md-10'>
                    <div class='card'>
                        <div class='card-header' >
                        <div class='row'>
                            <div class='col-sm-4'>
                                 Result
                            </div>
                            <div class='col-sm-4'></div>
                             <div class='col-sm-4' align='right'>
                             
                           <a href='https://api.whatsapp.com/send?phone=whatsappphonenumber&text="; echo 'http://' . $_SERVER['HTTP_HOST'] ."/student_results/your_student_result.php?".$roll_no; echo "'><i class='f fab fa-whatsapp'></i></a>
                            </div>

                        </div>
                       
                       
                    </div>
                    <div class='card-body'>
                    <div class='row'>
                    <form a ></form>
                        <label class='col-sm-2 col-form-label'>Name :</label>
                        <div class='col-sm-4' >" ;
                            echo $select_row['student_name'];
                  echo "</div>
                    </div>
                    <div class='row'>
                        <label class='col-sm-2 col-form-label'>Test Date :</label>
                        <div class='col-sm-4'>" ;
                            echo $select_row['test_date'];
                   echo "</div>
                    </div>
                    <div class='row'>
                        <label class='col-sm-2 col-form-label'>std. :</label>
                        <div class='col-sm-4'>";
                            echo $select_row['std'];
                    echo "</div>
                        <label class='col-sm-2 col-form-label'>Medium :</label>
                        <div class='col-sm-4'>";
                            echo $select_row['medium'];
                    echo "</div>
                    </div>
                    <table class='table'>
                        <thead class='thead-light'>
                            <tr>
                                <th>Subject</th>
                                <th>Total marks</th>
                                <th>Obtain marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>";
                            if ($select_row['math_total'] != 0 ) {
                                echo "<td>Math</td>";
                                echo "<td>".$select_row['math_total']."</td>";
                                echo "<td>".$select_row['math_obtain']."</td>";
                            }
                            echo "</tr>
                                    <tr>";
                            if ($select_row['sci_total'] != 0) {
                                echo "<td>Science</td>";
                                echo "<td>".$select_row['sci_total']."</td>";
                                echo "<td>".$select_row['sci_obtain']."</td>";
                            }
                            echo "</tr>
                                    <tr>";
                                    if ($select_row['sst_total'] != 0) {
                                        echo "<td>Social Science</td>";
                                        echo "<td>".$select_row['sst_total']."</td>";
                                        echo "<td>".$select_row['sst_obtain']."</td>";
                                    }
                        echo "</tr>
                            </tr>
                        </tbody>
                    </table>";
                    echo "<div class='row'>
                    <label class='col-sm-2 col-form-label'>Percentage :</label>
                    <div class='col-sm-4'>";
                        echo "<b>".$select_row['percentage']." %</b>";
                        if ($select_row['percentage']<35) {
                          echo "<br><br><label style='color: red ;'>Need Improvment</label> ";
                        }
                        elseif ($select_row['percentage']<80) {
                          echo "<br><br><label style='color:  #ff8000 ;'>Better luck next time</label> ";
                        }
                        else{
                          echo "<br><br><label style='color: green ;'>Weldone</label> ";
                        }
                    echo "</div>
                        </div>";

        echo "</div>
            </div>
            <div align='center'>
                <a href='pdfdownload.php?roll_no=$_GET[roll_no]' class=' downloadbutton btn btn-outline-primary' >Download As PDF</a>

            </div>
        </div>
    </div>
</div>
</div>
<br><br><br><br><br>";


}




?>


</style>
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


