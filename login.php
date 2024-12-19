<?php include_once("header.php") ?>
 
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Login Form</h2>
            </div>
            <div class="page_link">
              <a href="home1.php">Home</a>
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
        <div class="col-lg-6">
          <form class="form-contact contact_form" action="code.php" method="post">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <input type="email" name="t1" class="form-control w-100" placeholder="Enter Email-Id" required="required">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <input type="password" name="t2" class="form-control w-100" placeholder="Enter Password" required="required">
                </div>
              </div>

              </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Login</button>
            </div>
          </form>


        </div>

        <div class="col-lg-6">
         <img src="my/1.jpg" height="100%" width="100%"> 
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->



        <!--================ Start Brands Area =================-->
        <!--================ End Brands Area =================-->

<!-- start footer Area -->
        <?php include_once("footer.php") ?>