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

		$output .= '
			<table class="table" border="1">
				<tr>
					<th>id</th>
					<th>roll_no</th>
					<th>test_date</th>
					<th>math_total</th>
					<th>math_obtain</th>
					<th>sci_total</th>
					<th>sci_obtain</th>
					<th>sst_total</th>
					<th>sst_obtain</th>
				</tr>';

			while ($res = mysqli_fetch_array($select_run)) {
				$output .= '<tr>
								<td>'.$res['id'].'</td>
								<td>'.$res['roll_no'].'</td>
								<td>'.$res['test_date'].'</td>
								<td>'.$res['math_total'].'</td>
								<td>'.$res['math_obtain'].'</td>
								<td>'.$res['sci_total'].'</td>
								<td>'.$res['sci_obtain'].'</td>
								<td>'.$res['sst_total'].'</td>
								<td>'.$res['sst_obtain'].'</td>';
			}
			$output .='</table>';
			
			header("Content-Type: application/xls");
			header("Content-Disposition:attachment; filename='$excel.xls'");
			echo $output;

			//header('location:settings.php');
	}

?>