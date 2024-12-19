<?php include_once("userheader.php") ?>
 
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2 style="font-style: italic;text-decoration: underline;">Show Product Detail</h2>
            </div>
            <div class="page_link">
              <a href="admin.php">Home</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        

      <div class="row">
        <div class="col-lg-12">
            <style type="text/css">
                th{
                    text-align: center;
                    line-height: 100px;
                    color: black;
                    text-transform: uppercase;
                }
            </style>

        
    <table class='table table-striped table-bordered'>
      <tr>
          <th>Order-Id :- <?php echo $_SESSION['id']=rand(100,10000) ?></th>
          <th>Name :- <?php echo $name ?></th>
          <th>Date :- <?php echo $_SESSION['date']=date('d/M/Y') ?></th>
      </tr>
      <tr>
        <th colspan="3">Bill Summary</th>
      </tr>  
    </table>        
        <?php
        include_once("connect.php");
        $data=mysqli_query($con,"select * from sample where email='$a'")
        or die(mysqli_error($con));
        if(mysqli_num_rows($data)>0){
               echo"<table class='table table-striped table-bordered'>
                    <tr>
                        <th>Company Name</th>
                        <th>Medican Name</th>
                        <th>Detail's</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quentity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>";
               while($ss=mysqli_fetch_assoc($data)){
                $pid=$ss['pid'];
                $data2=mysqli_query($con,"select * from product where id='$pid'")
                or die(mysqli_error($con));
                  while($s2=mysqli_fetch_assoc($data2)){
                    echo"<tr>
                    <th>".$s2['cname']."</th>
                    <th>".$s2['name']."</th>
                    <th>".$s2['desc1']."</th>
                    <th><img src=".$s2['image']." height=100 width=100></th>
                    <th>".$s2['price']."</th>
                    <th>".$ss['qut']."</th>
                    <th>".$s2['price']*$ss['qut']."</th>
                                        <th><a href='delete_order.php?a=".$ss['id']."'><img src=my/del.png height=50 width=50></a></th>
</tr>";
                  }  
      }
        echo"</table>";  
      
    }
    else{
      header("location:c_product.php");
    }
        ?>
        <table class='table table-striped table-bordered'>
      <tr>
          <th><a href="c_product.php">More Product</a></th>
          <th><a href="final.php">Final Booked</a></th>
      </tr>
    </table>    
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->



        <!--================ Start Brands Area =================-->
        <!--================ End Brands Area =================-->

<!-- start footer Area -->
        <?php include_once("footer.php") ?>