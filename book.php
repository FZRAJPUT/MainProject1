<?php 
include_once("session.php");
include_once("connect.php");
if(!(isset($_SESSION['user']))){
    header("location:home1.php");
}
$a=$_SESSION['user'];
$b=$_POST['t1'];
$c=$_POST['t2'];
mysqli_query($con,"insert into sample(email,qut,pid) values('$a','$b','$c')")
or die(mysqli_error($con));
header("location:bill.php");
?>