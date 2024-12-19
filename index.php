<?php
include_once("header.php");
?>    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->

    <section class="banner-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <h1>Making Health<br>
                    Care Better Together</h1>
                    <p>Also you dry creeping beast multiply fourth abundantly our itsel signs bring our. Won form living. Whose dry you seasons divide given gathering great in whose you'll greater let livein form beast  sinthete
                    better together these place absolute right.</p>
                    <a href="" class="main_btn">Make an Appointment</a>
                    <a href="" class="main_btn_light">View Department</a>
                </div>
            </div>
        </div>
    </section>

    <!--================End Home Banner Area =================-->


    <!--================ Feature section start =================-->      
    <!--================ Feature section end =================-->  

    <!--================ Service section start =================-->  

    <!--================ Service section end =================-->      


    <!--================About  Area =================-->
    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6 offset-xl-7 col-xl-5">
                    <div class="about-content">
                        <h4>Second Abundantly<br>
                            Move That Cattle Perform<br>
                        Appen Land</h4>
                        <h6>Give their their without moving were stars called so divide in female be moving night may fish him</h6>
                        <p>Give their their without moving were stars called so divide female be moving night may fish him own male vreated great Give their their without moving were. Stars called so divide female moving night may fish him own male created great opportunity deal.</p>

                        <a class="link_one" href="#">learn more</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->

    <!--================ Team section start =================-->  
    <section class="team-area area-padding">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Medcare<br>
                    Experience Doctors</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>Land meat winged called subdue without very light in all years sea appear midst forth image him third there set. Land meat winged called subdue without very light in all years sea appear</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="img/team/1.jpg" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr Adam Brain</a></h3>
                            <p>Cardiologist</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="img/team/2.jpg" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr Blian Judge</a></h3>
                            <p>Cardiologist</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="img/team/3.jpg" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr Blian Judge</a></h3>
                            <p>Cardiologist</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Team section end =================-->  


    <!--================ appointment Area Starts =================-->
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
	$data=mysqli_query($con,"select * from register where email='$b'")
	or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0){
		echo"<script> alert('Already Register Go For Login')</script>";
	}
	else{
		mysqli_query($con,"insert into register(name,email,pwd,no,state,city,address) 
			values('$a','$b','$c','$d','$e','$f','$g')")or die(mysqli_error($con));
		echo"<script> alert('Data Register Go For Login')</script>";
	}
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
                                    <input type="text" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required name="t1">
                        </div>
                        <div class="form-group">
                                    <label>Email-Id</label>
                                    <input type="email" placeholder="Your Email-Id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email-Id'" required name="t2">
                        </div>
                        <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" placeholder="Your Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Password'" required name="t3">
                        </div>
                        <div class="form-group">
                                    <label>Mobile-No</label>
                                    <input type="text" placeholder="Your Mobile-No" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Mobile-No'" required name="t4">
                        </div>
                        </div>        
                    </div>
                    <div class="col-lg-5">
                        <div class="appointment-form">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" placeholder="Your State" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your State'" required name="t5">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" placeholder="Your City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your City'" required name="t6">  
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea cols="20" rows="7"  placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required name="t7"></textarea>
                                </div>
                                <div class="form-group">

    <button type="submit" class="btn btn-success">Register</button>
</div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    </form>
    <!--================ appointment Area End =================-->


    <!-- ================ testimonial section start ================= -->      
    <section class="testimonial">
        <div class="container">
            <div class="testi_slider owl-carousel owl-theme">
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="img/elements/tes1.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                            </p>
                            <h4>- Dr. Suzanne Holroyd -</h4>       
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="img/elements/tes1.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                            </p>
                            <h4>- Dr. Suzanne Holroyd -</h4>         
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="img/elements/tes1.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                            </p>
                            <h4>- Dr. Suzanne Holroyd -</h4>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ testimonial section end ================= -->    

    <!-- ================ Hotline Area Starts ================= -->  
    <section class="hotline-area text-center area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>(+01) – 256 567 550</span>
                    <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Hotline Area End ================= -->  




    <!--================ Start Blog Area =================-->
    <!--================ End Blog Area =================-->

    <!--================ Start Brands Area =================-->
    <section class="brands-area background_one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="owl-carousel brand-carousel">
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/brand/1.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/brand/2.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/brand/3.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/brand/4.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/brand/5.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/brand/3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Brands Area =================-->

    <!-- start footer Area -->
    <?php include_once("footer.php") ?>