<?php
include_once("connect.php");
$a=$_REQUEST['a'];
$data=mysqli_query($con,"update booking set status='Send' where id='$a'")
or die(mysqli_error($con));
header("location:s_order.php");
?> 