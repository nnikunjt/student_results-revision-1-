<?php

	//require '../PHPExcel/IOFactory.php'; 
	require_once('../database/connection.php');

	if (isset($_POST["upload"])) {
		$file = $_FILES["file"]["tmp_name"];
		$file_open = fopen($file,"r");

		if ($file_open) {
			while(($csv = fgetcsv($file_open, 1000, ",")) !== false){

			
  			$roll_no = $csv[0];
  			$name = $csv[1];
			$std = $csv[2];
			$medium = $csv[3];
			$birthdate = $csv[4];
			$school = $csv[5];
			$f_name = $csv[6];
			$father_no = $csv[7];
			$m_name = $csv[8];
			$mother_no = $csv[9];
			$address = $csv[10];
						


		  


		   $insert_query ="INSERT INTO students(roll_no,student_name,std,medium,birthdate,school,father_name,father_no,mother_name,mother_no,address
		) VALUES('$roll_no','$name','$std','$medium','$birthdate','$school','$f_name','$father_no','$m_name','$mother_no','$address')";

		if ($conn->query($insert_query) === TRUE) {
			echo "done";
		}
		else{
			echo "string";
		}

		}


 		
 		}
 		else{
 			echo "unable to open";
 		}
	}


	
 ?>