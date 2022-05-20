<?php
	$sender = $_POST['sender'];
	$receiver = $_POST['receiver'];
	$amount = $_POST['amount'];

	// Database connection
	$conn = new mysqli('localhost','root','','banktest');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into ledger(Sender,Receiver, Amount) values(?, ?, ?)");
		$stmt->bind_param("ssi", $sender,$receiver,$amount);
		header("Location: transfer.php"); /* Redirect browser */
		echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
	}
?>