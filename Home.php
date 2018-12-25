<?php
require_once($_SERVER['DOCUMENT_ROOT']."/service/ImportInsta.php"); 
require_once($_SERVER['DOCUMENT_ROOT']."/service/LoadContent.php"); 
if (empty($_POST)){
    header("Location: index.php");
    die();
}
$import = new ImportInstagramProfile();
$data=json_decode($import->getInstagramPics());
?>


<!doctype html>
<html lang="en">
    <head>
    <meta name="google-site-verification" content="kdPNvtU--p8AF1LaDuXo05WsCHyZBxLKneMKN8g-r8g" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-87352225-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TS7XH4Q');</script>
<!-- End Google Tag Manager -->

        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Nils Photography</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS7XH4Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <header class="header_area">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo_white.png" alt="" style="max-height:70px" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            
                        </ul>
                    
                    </div> 
                </div>
            </nav>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="background: url(<?php echo html_entity_decode($_POST['COVER_HEADER']);?>) no-repeat scroll center center;"></div>
				<div class="container">
					<div class="banner_content text-center">
							
						<p>I’m a Canon camera lover. But my specialty is 35mm film photography. I love to capture street events, natual beauty. Photography has taken me those places I never thought I'd go. 
							</p>
						
						<h1 style="float: right; margin-bottom: 10px;"> <img src="img/signature.png"/></h1>
						
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        

<!--================Testimonials Area =================-->
<section class="testimonials_area p_120" id="about">
        	<div class="container">
        		<div class="row testimonials_inner">
        			<div class="col-lg-12">
        				<div class="c_feedback_text">
        					<h4>ABOUT</h4>
							<p>I'm a part time professional photographer and cinematographer. I started my career as a photographer back in 2013 when I was in Kolkata, India. Mainly I started with wedding and event photography.</p><br/>
							<p>Due to my another professional requirement (guess what!!) I came to The USA on 2016. But I never quit my photography passion and started to click street and nature. Now days I used to organize photography exhibitions of my photographs. I participate on global events and exhibitions. I work as a freelance photographer for product shoot as well.</p><br/>
							<p>I’m a Canon camera lover. I used Canon 5D Mark III for my digital photographs. But my specialty is 35mm film photography. </p>
        				</div>
        			</div>
        			
        				</div>
        			</div>
        </section>
        <!--================End Testimonials Area =================-->

 <section>
 <div class="parallax" id="trans1" >
 <div class="caption" id="gallery">
  <div class="banner_content text-center">
						<h2>Gallery</h2>
					</div>
  </div>
</div>

        </section>


        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_30">
        
        	<div class="container box_1620">
        		<div class="gallery_f_inner row imageGallery1">
        			<div class="col-lg-3 col-md-4 col-sm-6 ap">
        				<div class="h_gallery_item">
        					<img src="<?php echo html_entity_decode($_POST['ARTIFACT']);?>" alt="">
        					<div class="hover">
        						<a href="#"><h4>Artifact</h4></a>
        						<a class="light" href="<?php echo html_entity_decode($_POST['ARTIFACT']);?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-sm-6 unv">
        				<div class="h_gallery_item">
        					<img src="<?php echo html_entity_decode($_POST['BUILDING']);?>" alt="">
        					<div class="hover">
        						<a href="#"><h4>Building</h4></a>
        						<a class="light" href="<?php echo html_entity_decode($_POST['BUILDING']);?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-sm-6 unp ap">
        				<div class="h_gallery_item">
        					<img src="<?php echo html_entity_decode($_POST['ART']);?>" alt="">
        					<div class="hover">
        						<a href="#"><h4>Art and Sculpture</h4></a>
        						<a class="light" href="<?php echo html_entity_decode($_POST['ART']);?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-sm-6 unp">
        				<div class="h_gallery_item">
        					<img src="<?php echo html_entity_decode($_POST['LONG_EXPOSURE']);?>" alt="">
        					<div class="hover">
        						<a href="#"><h4>Long Exposure</h4></a>
        						<a class="light" href="<?php echo html_entity_decode($_POST['LONG_EXPOSURE']);?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-sm-6 unv">
        				<div class="h_gallery_item">
        					<img src="<?php echo html_entity_decode($_POST['STREET']);?>" alt="">
        					<div class="hover">
        						<a href="#"><h4>Streets</h4></a>
        						<a class="light" href="<?php echo html_entity_decode($_POST['STREET']);?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-sm-6 ap">
        				<div class="h_gallery_item">
        					<img src="<?php echo html_entity_decode($_POST['ROAD']);?>" alt="">
        					<div class="hover">
        						<a href="#"><h4>Roads</h4></a>
        						<a class="light" href="<?php echo html_entity_decode($_POST['ROAD']);?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-sm-6 unp">
        				<div class="h_gallery_item">
        					<img src="<?php echo html_entity_decode($_POST['NATURE']);?>" alt="">
        					<div class="hover">
        						<a href="#"><h4>Pure Nature</h4></a>
        						<a class="light" href="<?php echo html_entity_decode($_POST['NATURE']);?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-sm-6 unp">
        				<div class="h_gallery_item">
        					<img src="<?php echo html_entity_decode($_POST['TRAVEL']);?>" alt="">
        					<div class="hover">
        						<a href="#"><h4>Travel</h4></a>
        						<a class="light" href="<?php echo html_entity_decode($_POST['TRAVEL']);?>"><i class="fa fa-expand"></i></a>
        					</div>
        				</div>
        			</div>
        			
        		</div>
        		<div class="button_more">
        			<a class="btn theme_btn" href="#">Load More Images</a>
        		</div>
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->
      <!--  <section class="banner_area">
 <div class="bgimg-2" style="background-image: url(../img/banner/banner_story.jpg);">
  <div class="caption">
  <div class="banner_content text-center">
						<h2>Stories</h2>
					</div>
  </div>
</div>
        
        </section>
        <section class="service_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Why we are the best</h2>
        			<p>Who are in extremely love with eco friendly system.</p>
        		</div>
        		<div class="row service_inner">
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<a href="#"><h4>Expert Technicians</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<a href="#"><h4>Professional Service</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<a href="#"><h4>Great Support</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<a href="#"><h4>Technical Skills</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<a href="#"><h4>Highly Recomended</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<a href="#"><h4>Positive Reviews</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>-->
		<<section>
 <div class="parallax" id="trans2">
 <div class="caption" id="contact">
  <div class="banner_content text-center">
						<h2>Contact Me</h2>
					</div>
  </div>
</div>

        </section>
		<section class="contact_area p_70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
								<div><a href="mailto:info@nils-photography.com" style="color:black">info@nils-photography.com</a></div>
								<div><a href="mailto:support@nils-photography.com" style="color:black">support@nils-photography.com</a></div>
                                <p>Send me your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 ">
                        <div class="row contact_form"  id="contactForm" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
								</div>
								<div class="form-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your contact number">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="" value="submit" class="btn theme_btn button_hover" onclick="sendEmail()">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Instagram Area =================-->
        <section class="instagram_area">
        	<div class="container box_1620">
        		<div class="insta_btn">
        			<a class="btn theme_btn" href="https://www.instagram.com/nilexposure" target="_blank">Follow me on instagram</a>
        		</div>
        		<div class="instagram_image row m0">
				<?php
						foreach($data as $post){
							echo '<div class="adjustdiv"><a href='.$post->postLink.' target="_blank"><img src='.$post->imageLink.' class="adjust"></a></div>';
						}
						
					?>
        		</div>
        	</div>
        </section>
        <!--================End Instagram Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        				
        					<p style="padding-top:50px;">Copyright &copy; 2013 Nils Photography Inc. All rights reserved.</p>
        					
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="https://www.facebook.com/nilsphotographystudio" target="_blank"><i style="color:white;" class="fa fa-facebook-official"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="js/site.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>




</html>