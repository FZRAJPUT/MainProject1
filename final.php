<?php include_once("userheader.php") ?>
<?php 
$o_id=$_SESSION['id'];
$date=$_SESSION['date'];
$total=0;
        $total2=0;
        include_once("connect.php");
        $data=mysqli_query($con,"select * from sample where email='$a'")
        or die(mysqli_error($con));
        if(mysqli_num_rows($data)>0){
               while($ss=mysqli_fetch_assoc($data)){
                $pid=$ss['pid'];
                $data2=mysqli_query($con,"select * from product where id='$pid'")
                or die(mysqli_error($con));
                  while($s2=mysqli_fetch_assoc($data2)){
                    $pcname=$s2['cname'];
                    $pname=$s2['name'];
                    $desc1=$s2['desc1'];
                    $img=$s2['image'];
                    $price=$s2['price'];
                    $qut=$ss['qut'];
                    $total=$s2['price']*$ss['qut'];
                    $total2+=$total;
                  mysqli_query($con,"insert into booking (pcname,pname,desc1,price,qut,total,img,name,email,no,state,city,adress,status,orderid,date)
                    values('$pcname','$pname','$desc1','$price','$qut','$total','$img','$name','$a','$no','$state','$city','$address','pending','$o_id','$date')")
                  or die(mysqli_error($con));
                  mysqli_query($con,"delete from sample where pid='$pid'")
                  or die(mysqli_error($con));

                  }  
              }
          }
          header("location:print.php");
    ?>
