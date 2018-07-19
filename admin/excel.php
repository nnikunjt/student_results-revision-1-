<?php 
	require_once("../database/connection.php");


	if(isset($_GET['xls'])){
		$excel = $_GET['xls'];
		$select_query = "SELECT * FROM `$excel` ";
		$select_run = mysqli_query($conn,$select_query);

		if ($select_run->num_rows>0) {
			$delimiter = ",";
			$filename = $excel."csv";

			$f =fopen('php://memory', 'w');

			$fields = array('roll_no','student_name','std','medium','birthdate','school','father_name','father_no','mother_name','mother_no','address');
			fputcsv($f, $fields,$delimiter);


			while ($res = mysqli_fetch_array($select_run)){
				
				$linedata = array($res['roll_no'],$res['student_name'],$res['std'],$res['medium'],$res['birthdate'],$res['school'],$res['father_name'],$res['father_no'],$res['mother_name'],$res['mother_no'],$res['address']);
				fputcsv($f, $linedata, $delimiter);
			}
			fseek($f, 0);


			header("Content-Type: text/csv");
			header("Content-Disposition:attachment; filename='$excel.csv'");

			fpassthru($f);
		}
		exit;



	}

	if(isset($_GET['excel'])){
		$excel = $_GET['excel'];
		$select_query = "SELECT * FROM `$excel` ";
		$select_run = mysqli_query($conn,$select_query);

		if ($select_run->num_rows>0) {
			$delimiter = ",";
			$filename = $excel."csv";

			$f =fopen('php://memory', 'w');


			$fields = array('roll_no','test_date','math_total','math_obtain','sci_total','sci_obtain','sst_total','sst_obtain','percentage');
			fputcsv($f, $fields,$delimiter);


			while ($res = mysqli_fetch_array($select_run)) {
				$linedata = array($res['roll_no'],$res['test_date'],$res['math_total'],$res['math_obtain'],$res['sci_total'],$res['sci_obtain'],$res['sst_total'],$res['sst_obtain'],$res['percentage']);
				fputcsv($f, $linedata, $delimiter);
			}
			fseek($f, 0);

			
			
			header("Content-Type: text/csv");
			header("Content-Disposition:attachment; filename='$excel.csv'");
			fpassthru($f);
			

			//header('location:settings.php');
	}
			
		}

			

?>