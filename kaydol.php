<?php 
include 'dbh.php';
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$sql = "SELECT username FROM user Where username = '".$uname."'";
		$result=$conn->query($sql);
			if($result->num_rows > 0){
				echo "Böyle Bir Kullanıcı Zaten Mevcut.";
			}else{


	$sql="INSERT INTO user (username,password,email)VALUES('".$uname."','".$pass."','".$email."')";
	if(!$uname || !$email || !$pass ){
		echo "lütfen boş alan bırakmayınız";
	}
	else if ($conn->query($sql) === TRUE) {
	   
	    header("Location: index.php?state=signup_success");
	     echo "kayıt başarılı";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();





 ?>
