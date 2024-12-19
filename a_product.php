<?php include_once("adminheader.php") ?>
 
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner  align-items-center" style="background: url('my/1.jpg');"> 
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2 style="font-style: italic;text-decoration: underline;">Add Product Detail</h2>
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
        <div class="col-lg-6">
          <form class="form-contact contact_form" action="addpro.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <input type="text" name="t1" class="form-control w-100" placeholder="Enter Company name" required="required">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <input type="text" name="t2" class="form-control w-100" placeholder="Enter name" required="required">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <input type="text" name="t3" class="form-control w-100" placeholder="Enter price" required="required">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <input type="text" name="t4" class="form-control w-100" placeholder="Enter Quentity" required="required">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <input type="file" name="t5" class="form-control w-100" placeholder="Enter Photo" required="required">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                <textarea style="width: 100%;" rows="5" class="form-control w-100"  placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" required name="t6"></textarea>
                </div>
              </div>

              </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Add </button>
            </div>
          </form>


        </div>

        <div class="col-lg-6">
         <img src="my/2.jpg" height="100%" width="100%"> 
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->



        <!--================ Start Brands Area =================-->
        <!--================ End Brands Area =================-->

<!-- start footer Area -->
        <?php include_once("footer.php") ?>