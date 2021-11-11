<?php
	$studnum = $_POST['studnum'];
	$studname = $_POST['studname'];
	$gender = $_POST['gender'];
	$program = $_POST['program'];
	$yearlevel = $_POST['yearlevel'];
	$email = $_POST['email'];
	$phonenum = $_POST['phonenum'];
	$birthdate = $_POST['birthdate'];

	//database connection
	$conn = new mysqli('localhost', 'root','','testreg');
	if ($conn->connect_error) {
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into registration(studnum, studname, gender, program, yearlevel, email, phonenum, birthdate) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssssis", $studnum, $studname, $gender, $program, $yearlevel, $email, $phonenum, $birthdate);
		$stmt->execute();
		echo "Thank you! Your account was registered";
		$stmt->close();
		$conn->close();
	}
?>
