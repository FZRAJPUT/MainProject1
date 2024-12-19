
<?php

    $to = "rockybd1995@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

include_once("connect.php");
mysqli_query($con,"insert into contact(msg,name,email,subject) 
			values('$cmessage','$name','$from','$subject')")or die(mysqli_error($con));
?>
<?php include_once("header.php") ?>
    <!--================Header Menu Area =================-->


 
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Your Request Send Successfully</h2>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <?php include_once("footer.php") ?>