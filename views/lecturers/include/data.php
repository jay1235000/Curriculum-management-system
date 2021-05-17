<?php
    include_once 'config.php';

    $facultyId = $_POST['facultyId'];
	

	if (!empty($facultyId)) {
		// Fetch school name base on faculty
		$query = "SELECT * FROM schools WHERE Faculty_ID = {$facultyId}";

		$result = $conn->query($query);
		
		if ($result->num_rows > 0) {
			echo "<option selected disabled>Select School</option>";

			while ($row = $result->fetch_assoc()) {
				echo '<option value="'.$row['School_ID'].'">'.$row['Name'].'</option>'; 
			}
		}else{
			echo '<option value="">School NOT Available</option>'; 
		}
	}elseif (!empty($_POST['schoolId'])) {
		$schoolId = $_POST['schoolId']; 
		// Fetch major name base on school

		$query = "SELECT * FROM school_major WHERE School_ID = {$schoolId}";

		$result = $conn->query($query);

		if ($result->num_rows > 0) {
			echo "<option selected disabled>Select Subject Leader Division</option>";

			while ($row = $result->fetch_assoc()) {
				 echo '<option value="'.$row['Programme_ID'].'">'.$row['Major'].' / '.$row['Minor'].'</option>'; 
			}
		}else{
			echo '<option value="">Major NOT Available</option>'; 
		}
	}

?>