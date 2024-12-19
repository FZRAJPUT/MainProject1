<?php include_once("adminheader.php") ?>
 
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2 style="font-style: italic;text-decoration: underline;">Show My Order</h2>
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
        <?php
        include_once("connect.php");
        $data=mysqli_query($con,"select * from booking")
        or die(mysqli_error($con));
        if(mysqli_num_rows($data)>0){
            echo"<table class='table table-striped table-bordered'>
                    <tr>
                        <th>Order-Id</th>
                        <th>Company Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th colspan=3>Action</th>
                    </tr>";
        while($s=mysqli_fetch_assoc($data)){
            echo"<tr>
                    <th>".$s['orderid']."</th>
                    <th>".$s['pcname']."(<span style='color:red;'>".$s['pname']."</span> )</th>
                    <th><img src=".$s['img']." height=100 width=100></th>
                    <th>".$s['price']."</th>
                    <th>".$s['qut']."</th>
                    <th>".$s['total']."</th>
                    <th>".$s['date']."</th>
                    <th>".$s['status']."</th>
                    <th><a href='delete_my2.php?a=".$s['id']."' title='DELETE'><img src=my/del.png height=50 width=50></a></th>
                    <th><a href='check_profile.php?a=".$s['email']."'  title='CHECK DETAIL'><img src=my/check.png height=50 width=50></a></th>
                    <th><a href='status.php?a=".$s['id']."'  title='ORDER STATUS'><img src=my/ok.png height=50 width=50></a></th>
                    
                    </tr>";
        } 
        echo"</table>";  
        }
        ?> 
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->



        <!--================ Start Brands Area =================-->
        <!--================ End Brands Area =================-->

<!-- start footer Area -->
        <?php include_once("footer.php") ?>