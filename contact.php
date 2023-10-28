<!DOCTYPE html>
<html lang="zxx"> 
	
<head>
		<!-- meta tag -->
		<?php include_once "includes/meta.php"?>
		<?php include_once "includes/style.php"?>
		
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<?php include_once "includes/preloader.php"?>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
				<?php include_once "includes/header.php"?>
				<!--Header End-->
			</div>
			<!--Full width header End-->
            <!-- Contact Section Start -->
			<div class="rs-contact contact-style3 pt-120 md-pt-80">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-4 md-mb-60">
			               <div class="contact-box">
			                    <div class="sec-title mb-45 md-mb-30">
			                        <h2 class="title">Get in touch</h2>
			                    </div>
			                   <div class="address-box mb-25">
			                       <div class="address-icon">
			                           <i class="fa fa-home"></i>
			                       </div>
			                       <div class="address-text">
			                            <span class="label">Email:</span>
			                            <a href="mailto:info@haadaainnas.com">info@haadaainnas.com</a>
			                       </div>
			                   </div>
			                   <div class="address-box mb-25">
			                       <div class="address-icon">
			                           <i class="fa fa-phone"></i>
			                       </div>
			                       <div class="address-text">
			                           <span class="label">Phone:</span>
			                           <a href="tel:+916360071932">+91 636 007 1932</a> | 
                                       <a href="tel:+917975383740">+91 797 538 3740</a>
			                       </div>
			                   </div>
			                   <div class="address-box">
			                       <div class="address-icon">
			                           <i class="fa fa-map-marker"></i>
			                       </div>
			                       <div class="address-text">
			                           <span class="label">Head Office:</span>
			                           <div class="desc">HO: 27/1 1st floor  puliyar Koil street ashok nagar bangalore</div>
                                       <hr>
			                       </div>
                                   
			                   </div>
                               <div class="address-box">
			                       <div class="address-icon">
			                           <i class="fa fa-map-marker"></i>
			                       </div>
			                       <div class="address-text">
			                           <span class="label">Sub Office:</span>
			                           <div class="desc">A Block, BHIVE Workspace - No.112, AKR Tech Park, "A" and, 7th Mile Hosur Rd, Krishna Reddy Industrial Area, Bengaluru, Karnataka 560068</div>
			                       </div>
			                   </div>
			               </div>
			            </div> 
			            <div class="col-lg-8 pl-70 md-pl-15">
                            <div class="contact-wrap">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="https://devsdesign.net/products/html/solvency/mailer.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
                                                <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Message" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon submit" type="submit" value="Submit Now">
                                            </div>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
			            </div>
			        </div>
			    </div>
			    <!-- <div class="map-canvas pt-120 md-pt-80">
			        <iframe src="https://maps.google.com/maps?q=Devsdesign&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
			    </div>  -->
			</div>
			<!-- Contact Section Start -->


			
		</div> 
		<!-- Main content End -->
	 
		<?php include_once "includes/footer.php"?>
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->


		

		<?php include_once "includes/scripts.php"?>
	</body>
</html>