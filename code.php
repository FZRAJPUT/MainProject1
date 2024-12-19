<?php 
include_once("session.php");
include_once("connect.php");
if(isset($_POST['t1'])){
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	if($a=="admin@gmail.com" && $b=="admin"){
		$_SESSION['admin']=$a;
		header("location:admin.php");
	}
	else{
		$data=mysqli_query($con,"select * from register where email='$a' and pwd='$b'")
		or die(mysqli_error($con));
		if(mysqli_num_rows($data)>0){
			$_SESSION['user']=$a;
			header("location:user.php");
		}
		else{
			echo"<script> alert('Not Register Go For Login')</script>";
			echo"<br/><a href='login.php'>Login</a>";
		}
	}
}
?>
