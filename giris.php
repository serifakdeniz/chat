<?php 
session_start();
if(!isset($_SESSION['User'])){
include 'dbh.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sql="SELECT * FROM user WHERE username='".$uname."' AND password='".$pass."'";
$result=$conn->query($sql);
		
		if($result->num_rows > 0 ){
		
			while($row = $result->fetch_assoc()) {
				$user_id = $row["id"];
			}
			$_SESSION['User'] = $user_id;
			header("Location:anasayfa.php");
		}else{
			echo "Giriş Talebiniz Başarısız Oldu ! ('_^)";
		}
		$conn->close();
}else{
	echo "Zaten Oturum Açık";
	header("Location: anasayfa.php");
}
 ?>
 