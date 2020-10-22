<?php  
	include 'dbh.php';
	session_start();
		
		$sql = "SELECT posts.user_id, user.username AS username, posts.message, posts.datetime FROM 
		posts INNER JOIN user ON posts.user_id = user.id ORDER BY datetime;";
		$result=$conn->query($sql);
			if($result->num_rows > 0){
				while($row=$result->fetch_assoc()){
					if($row["user_id"] === $_SESSION['User']){
						echo "<div id='myAvatar'></div>";
						echo "<div id='myMessage'>";
						echo $row["message"]."<br><font>".$row["datetime"]."</font>";
						echo "<br></div>";
					}else{
						echo "<div id='otherAvatar'></div>";
						echo "<div id='otherMessage'>";
						echo "<font>~" . $row["username"] . "~</font><br>";
						echo $row["message"]."<br><font>".$row["datetime"]."</font>";	
						echo "<br></div>";
					}
				}
			}
		
else{
	echo "0 sonuc";

}
$conn->close();


		 ?>
	