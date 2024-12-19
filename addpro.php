<?php
include_once("connect.php");
if(isset($_POST['t1'])){
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$name=$_FILES['t5']['name'];
	$location=$_FILES['t5']['tmp_name'];
	$fname="product";
	$f=$_POST['t6'];
	$name=str_replace(" ","_",$name);
	if(file_exists($fname)){}
		else{
			mkdir($fname);
		}
	$path=$fname."/".$name;
	move_uploaded_file($location,$path);
	$data=mysqli_query($con,"select * from product where cname='$a' and name='$b'")
	or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0){}
	else{
		mysqli_query($con,"insert into product(cname,name,price,qut,image,desc1) 
			values('$a','$b','$c','$d','$path','$f')")or die(mysqli_error($con));
	}
	header("location:stock.php");
}	
?>
