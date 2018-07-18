<?php 
	require_once("../database/connection.php");

	$output = '';

	if(isset($_GET['xls'])){
		$excel = $_GET['xls'];
		$select_query = "SELECT * FROM `$excel` ";
		$select_run = mysqli_query($conn,$select_query);

		$output .= '
			<table class="table" border="1">
				<tr>
					<th>roll_no</th>
					<th>student_name</th>
					<th>std</th>
					<th>medium</th>
					<th>birthdate</th>
					<th>school</th>
					<th>father_name</th>
					<th>father_no</th>
					<th>mother_name</th>
					<th>mother_no</th>
					<th>address</th>
				</tr>';
			while ($res = mysqli_fetch_array($select_run)){
				$output .='
					<tr>
						<td>'.$res['roll_no'].'</td>
						<td>'.$res['student_name'].'</td>
						<td>'.$res['std'].'</td>
						<td>'.$res['medium'].'</td>
						<td>'.$res['birthdate'].'</td>
						<td>'.$res['school'].'</td>
						<td>'.$res['father_name'].'</td>
						<td>'.$res['father_no'].'</td>
						<td>'.$res['mother_name'].'</td>
						<td>'.$res['mother_no'].'</td>
						<td>'.$res['address'].'</td>
					</tr>';
			}
			$output .= '</table>';

			header("Content-Type: application/xls");
			header("Content-Disposition:attachment; filename='$excel.xls'");
			echo $output;

			//header('location:settings.php');

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