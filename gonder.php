<?php 
session_start();
print_r($_SESSION);
if(isset($_SESSION['User'])){
	include 'dbh.php';
	$message=$_POST['msg'];
	$name=$_SESSION['User'];
	$sql="INSERT INTO posts(user_id,message) VALUES('".$name."','".$message."')";
	if ($conn->query($sql) === TRUE) {
		echo " ";
		header("Location: anasayfa.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}



 ?>