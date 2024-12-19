<?php include_once("userheader.php") ?>
<?php 
$o_id=$_SESSION['id'];
$date=$_SESSION['date'];
?>
<!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2 style="font-style: italic;text-decoration: underline;">Thanku For Order</h2>
              <h2>Your Order-Id :- <?php echo $o_id ?></h2>
              <h2><a href="my.php">Check Status</a>
            </div>
            <div class="page_link">
              <a href="admin.php">Home</a>
            </div>
          </div>
        </div>
      </div>
</section>
        <?php include_once("footer.php") ?>