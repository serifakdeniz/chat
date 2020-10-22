<?php 
session_start();
if(isset($_SESSION['User'])){
header("Location: anasayfa.php");}
?>
<!DOCTYPE html>
<head>
	<title>tililili</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="img/icon.png" />
</head>
<body bgcolor="gray">
<div id="main" style="margin:10% 25%; text-align:center; border-radius: 15px; padding:15px; background:green;">
	<div id="info">
		<h2>buradan giriş yapınız</h2>
		<center>
<table>
<form action ="giris.php" method ="post">
	
		<tr><td><label><b>  kullanıcıadı </b></label></td><td> 
		<input type ="text" name="uname" placeholder="Kullanıcı Adı"  ></td></tr>
		<tr><td>
		<label><b> sifre</b></label></td><td> 
		<input type ="password" name="pass" placeholder="password"  ></td></tr>
<tr><td colspan="2"><center><button type="submit"><b> giris</b></button></center></td></tr>

</form>
</table></center>
<?php
	if($_GET["state"] == "signup_success"){
		echo "<div style='padding:5px; background:green; margin-top:15px;'> Kayıt Başarılı. </div>";
	}
?>
<div id="signup">
	<h2>hala hesabın yok mu </h2>
	<center>
	<table>
		<form action ="kaydol.php" method ="post" id="signup">
			

			<tr><td><label>kullanıcıadı</label></td><td>
			<input type ="text" name ="uname" placeholder="Kullanıcı Adı"></td></tr>
            <tr><td><label>mail</label></td><td>
			<input type ="text" name ="email" placeholder="Email"></td></tr>
			 <tr><td><label>sifre</label></td><td>
			<input type ="password" name ="password" placeholder="Password"></td></tr>
			<tr><td colspan="2"><center>
			<button type ="submit"><b>kaydol</b></button></center>
		</td></tr>
		</form>
	</table>
</center>
	</div>
	</div>
</div>

</body>
</html>