<?php 
$con = mysqli_connect("127.0.0.1", "root", "", "38urok");
$query=mysqli_query($con, "SELECT * FROM users WHERE name='".$_POST['name']."' and password='".$_POST['password']."'");
$stroka= $query->fetch_assoc();

if(mysqli_num_rows($query)==0){
		header("Location: index.php");
	}else{
	  header("Location: home.php?id=".$stroka['id']);
}

?>
