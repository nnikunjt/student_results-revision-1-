<?php

	require '../PHPExcel/IOFactory.php'; 
	require_once('../database/connection.php');

	if (isset($_POST['upload'])) {
		$inputfilename =$_FILES['file']['tmp_name'];
	$exceldata=array();

	try {
		$inputfiletype =PHPExcel_IOFactory::identify($inputfilename);
		$objReader = PHPExcel_IOFactory::createReader($inputfilename);
		$objPHPExcel =$objReader->load($inputfilename);

	} catch (Exception $e) {
		dia('Error loading file"'.pathinfo($inputfilename,PATHINFO_BASENAME).'":'.$e->getMessage());

	}
	$sheet = $objPHPExcel->getSheet(0);
	$highestRow =$sheet->getHighestRow();
	$highestColumn =$sheet->getHighestColumn();

	for ($row=1; $row <=$highestRow ; $row++) { 
		$rowData = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);

		$insert_query ="INSERT INTO students(roll_no,student_name,std,medium,birthdate,school,father_name,father_no,mother_name,mother_no,address
		) VALUES('".$rowData[0][0]."','".$rowData[0][1]."','".$rowData[0][2]."','".$rowData[0][3]."','".$rowData[0][4]."','".$rowData[0][5]."','".$rowData[0][6]."','".$rowData[0][7]."','".$rowData[0][8]."','".$rowData[0][9]."','".$rowData[0][10]."')";

		if (mysqli_query($conn,$insert_query)) {
			$exceldata[]=$rowData[0];
		}
		else{
			echo "Error";
		}
	}

	}


	
 ?>