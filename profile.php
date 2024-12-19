<?php
include_once("userheader.php");
?>
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Edit Account Details</h2>
            </div>
            <div class="page_link">
              <a href="user.php">Home</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
include_once("connect.php");
if(isset($_POST['t1'])){
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$g=$_POST['t7'];
	mysqli_query($con,"update register set name='$a',pwd='$c',no='$d',state='$e',city='$f',address='$g' where email='$b'")or die(mysqli_error($con));
		echo"<script> alert('Data is Updated')</script>";
	}
?>
                            <form action="" method="post">
    <section class="appointment-area">
        <div class="container">

            <div class="appointment-inner">
                <div class="row">
                    <div class="col-sm-12 col-lg-5 offset-lg-1">
                        <div class="appointment-form">
                        <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required name="t1" value="<?php echo $name ?>">
                        </div>
                        <div class="form-group">
                                    <label>Email-Id</label>
                                    <input type="email" placeholder="Your Email-Id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email-Id'" required name="t2" value="<?php echo $a ?>" disabled="disabled">
                                    <input type="hidden" placeholder="Your Email-Id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email-Id'" required name="t2" value="<?php echo $a ?>">
                        </div>
                        <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" placeholder="Your Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Password'" required name="t3" value="<?php echo $pwd ?>">
                        </div>
                        <div class="form-group">
                                    <label>Mobile-No</label>
                                    <input type="text" placeholder="Your Mobile-No" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Mobile-No'" required name="t4" value="<?php echo $no ?>">
                        </div>
                        </div>        
                    </div>
                    <div class="col-lg-5">
                        <div class="appointment-form">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" placeholder="Your State" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your State'" required name="t5" value="<?php echo $state ?>">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" placeholder="Your City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your City'" required name="t6" value="<?php echo $city ?>">  
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea cols="20" rows="7"  placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required name="t7"><?php echo $address ?></textarea>
                                </div>
                                <div class="form-group">

    <button type="submit" class="btn btn-success">Update</button>
</div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    </form>
    <!--================ appointment Area End =================-->


    <!--================ End Brands Area =================-->

    <!-- start footer Area -->
    <?php include_once("footer.php") ?>