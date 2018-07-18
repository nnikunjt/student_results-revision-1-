<?php
    require_once('../database/connection.php');


    if(isset($_GET['del'])){
        $roll_no = $_GET['del'];



        $delete ="DELETE FROM results WHERE roll_no = $roll_no ";

        if($conn->query($delete) === TRUE){
            $delete_query = "DELETE FROM students WHERE roll_no = $roll_no";
            if ($conn->query($delete_query) === TRUE) {
                header('location:dashboard.php');
            }
        }
    }

    if(isset($_GET['delete'])){
        $table = $_GET['delete'];

        $drop = "DROP TABLE `$table`";
        if ($conn->query($drop) === TRUE) {
            header('location:settings.php');
        }
        else {
            echo "string";
        }
    }


$backup_students = mysqli_query( $conn, "SHOW TABLES LIKE '%backup_students_%' ");
$backup_results = mysqli_query( $conn, "SHOW TABLES LIKE '%backup_results_%' ");
        

   

?>
