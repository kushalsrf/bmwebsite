<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email, mobile, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $name, $email, $mobile, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script>
			alert('Message Sent To Builtron Machines Pvt. Ltd.');
			window.location.href='index.html';  
			</script>";
		sleep(1);
	//	header("Location: index.html");
	//	die();
		$stmt->close();
		$conn->close();
	}
?>