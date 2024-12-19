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
                    text-transform: capitalize;
                }
            </style>
        <?php
        include_once("connect.php");
        $data=mysqli_query($con,"select * from product")
        or die(mysqli_error($con));
        if(mysqli_num_rows($data)>0){
            echo"<table class='table table-striped table-bordered'>
                    <tr>
                        <th>Company Name</th>
                        <th>Medicine Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Detail's</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>";
        while($s=mysqli_fetch_assoc($data)){
            echo"<tr>
                    <th>".$s['cname']."</th>
                    <th>".$s['name']."</th>
                    <th>".$s['price']."</th>
                    <th>".$s['qut']."</th>
                    <th>".$s['desc1']."</th>
                    <th><img src=".$s['image']." height=100 width=100></th>
                    <th>
                    <form action='book.php' method='post'>
                      <input type='number' name='t1' value='' placeholder='Quantity' required>
                      <input type='hidden' name='t2' value=".$s['id'].">
                      <input type=submit value='Booked' class='btn btn-success'>
                    </form>
                    </th>
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