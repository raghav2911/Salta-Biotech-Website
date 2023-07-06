<?php
include 'Connection.php';
include 'DB.php';

/*if(array_key_exists('submitContactForm', $_POST)) { 
            submitContactForm(); 
        } */
//function submitContactForm(){
   // if (isset($_POST['inq-email'])){
        $inq_name = $_POST['inq-name'];
        $inq_from = $_POST['inq-email'];
        $inq_subject = "Queries from $inq_name"  ;
        $inq_message = $_POST['inq-message'];
        $inq_to = $contact_us_email;
        $inq_headers = "MIME-Version: 1.0" . "\r\n";
        $inq_headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $inq_headers .= "From: ".$inq_from." <".$inq_from.">\r\n";
        if(!empty($inq_from) && mail($inq_to, $inq_subject, $inq_message, $inq_headers)){
           
            
            echo  '<script>alert("Inquiry sent successfully. We will get back to you soon.")</script>'; 
        
        }
   // }
//}

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>SaltaBiotech</title>
    <meta name="format-detection" content="telephone=no">
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <!--<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
	.container2 {
		width: 80%;
		margin: 0 auto;
		padding: 20px;
	}
	
	
	</style>
  </head>
  <body>
      
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!--<div class="preloader">
      <div class="preloader-body">
        </div>
      </div>-->
    </div>
    <div class="page">
      <!-- Page Header-->
	  
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap" style="height: 170px;">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main" style="padding-top: 7px;padding-right: 10px;padding-left: 10px;padding-bottom: 5px;">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel" style="height:100px;">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php"><img src="images/logo.png" alt="" style="max-height: 90px; max-width:90px;"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Search-->
                    <!--<div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                          <div class="rd-search-results-live" id="rd-search-results-live"></div>
                        </div>
                        <!--<button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                      </form>
                    </div>-->
                    <!-- RD Navbar Share-->
                    <!--<div class="rd-navbar-share">
                      <div class="rd-navbar-share-icon fl-bigmug-line-share27" data-rd-navbar-toggle=".rd-navbar-share-list"></div>
                      <ul class="list-inline rd-navbar-share-list">
                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-facebook" href="#"></a></li>
                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-twitter" href="#"></a></li>
                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-instagram" href="#"></a></li>
                      </ul>
                    </div>-->
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <a class="rd-nav-item rd-nav-link" href="index.php" style="font-size:20px;">Home</a>
                      <!--<a class="rd-nav-link rd-nav-item" href="about-us.html">About Us</a>-->
                      <a class="rd-nav-link rd-nav-item" href="Products.php" style="font-size:20px;">Products</a>
                      <a class="rd-nav-link rd-nav-item" href="Divisions.php" style="font-size:20px;">Salta Cord Theraputics</a>
					  <a class="rd-nav-link rd-nav-item" href="salbumin.php" style="font-size:20px;">Salbumin</a>
					  <a class="rd-nav-link rd-nav-item" href="contact-us.php" style="font-size:20px;">Contact Us</a>
                    </ul>           
                </div>       
            </div>
          
        </div>
		</div>
		</nav>
		</div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="1500" data-simulate-touch="true" data-direction="vertical" data-nav="false" style="max-height: 500px">
        <div class="swiper-wrapper text-center">
          <div class="swiper-slide" data-slide-bg="images/pharma-biotech3.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
			  <img data-caption-animate="fadeInLeft" data-caption-delay="0" src="images/logo.png" alt="" style="max-height: 120px; max-width:110px;"></img><br/>
			  <img data-caption-animate="fadeInLeft" data-caption-delay="0" src="images/saltabiotech-transparent.png" alt="" ></img><br/>
			  </div>
            </div>
          </div>
		   <div class="swiper-slide" data-slide-bg="images/salta-air-ambulance.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
			  <img data-caption-animate="fadeInLeft" data-caption-delay="0" src="images/logo.png" alt="" style="max-height: 120px; max-width:90px;"></img><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			  <!--<img data-caption-animate="fadeInLeft" data-caption-delay="0" src="images/saltabiotech-transparent.png" alt="" ></img><br/>-->
              </div>
            </div>
          </div>
           <!--<div class="swiper-slide" data-slide-bg="images/Photo-from-Priyanka.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
			  
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Experienced Team</h1>
                <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">We are a team of qualified software developers, aimed at creating unique and powerful tools for your business & everyday life.</p><a class="button button-primary button-ujarak" href="https://www.templatemonster.com/website-templates/dreamsoft-software-development-company-multipage-website-template-71028.html" target="_blank" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
              </div>
            </div>
          </div>
         <div class="swiper-slide" data-slide-bg="images/slider-1-slide-3-1770x742.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Award-Winning Software</h1>
                <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">The software solutions developed by our company have been numerously awarded for usability and innovative features.</p><a class="button button-primary button-ujarak" href="https://www.templatemonster.com/website-templates/dreamsoft-software-development-company-multipage-website-template-71028.html" target="_blank" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
              </div>
            </div>
          </div>-->
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination__module">
          <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
          <div class="swiper-pagination__divider"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!--Company Description-->
      <section class="section section-sm section-fluid" >
        <div class="container-fluid isotope-wrap">
          <h2 class="wow fadeInLeft" style="text-transform: none;">Salta Biotech</h2>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			<?php 
				echo $Description;
			?>
		  </p>
        </div>
      </section>
       <section class="section section-sm section-fluid bg-default">
        <div class="container-fluid">
          <h2 style="font: 400 30px/1.5 'Pacifico', Helvetica, sans-serif;
  color: cadetblue;
  text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);">Welcome to the world of Salta</h2>
          <div class="row row-sm row-15 justify-content-center">
            <div class=" col-md-4 col-lg-2 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <br/>
              <article class="team-classic team-classic-lg"><img src="images/rakesh-verma-4.jpg" alt="" width="420" height="400"/>
                <br/> <br/><br/><br/><br/><br/><br/><div class="team-classic-caption">
                  <h4 class="team-classic-name">Rakesh Verma</h4>
                  <p class="team-classic-status">Founder & CEO</p><p class="team-classic-status" >Salta Group of Companies</p>
                </div>
              </article>
            </div>
			<div class="wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg" style="padding-top: 33px;">
                <p>We use the latest in pharmaceutical technology and provide value through pioneering work, research & development and quality pharmaceuticals across the globe. We explore every drug to its last particle and instill safe and sure healing to create one dose of confidence. For us, the final measure of our success is a simple curve - the smile of health regained. We have acquired 30+ years rich experience in pharma sales & marketing and striving hard to build a competent team through inculcating a sense of accountability and skill development.</p>
              </article>
            </div>
            
          </div>
        </div>
      </section>
	  <!--Company Description-->
      <!--Goals-->
      <section>
        <div class="container-fluid isotope-wrap">
          <h2 class="wow fadeInLeft" style="text-transform: none;">Mission & Vision</h2>
          <p  data-wow-delay=".1s" style="color: dimgray;text-align: justify; font-size: 16px;padding-right: 40px;
    padding-left: 40px;">
			<?php 
				echo $Goals."<br>";
			
			?>
		  </p>
          
        </div>
      </section>
	  <!--Goals-->
      <!-- Years of experience-->
      <section class="section section-sm">
        <div class="container">
          <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
            <div class="col-md-6 col-lg-5 col-xl-5 text-center"><a class="text-img" >
                <div id="particles-js"></div><span class="counter"><?php echo $years_of_experience ?></span></a></div>
            <div class="col-sm-8 col-md-6 col-lg-5 col-xl-3">
              <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
                <h3 class="title-decoration-lines-left">Years of Experience</h3>
                <p class="text-gray-500" style="color: #756AEE">Implementing best-of-industry practices and conforming to globally accepted standards in our processes and procedures.</p>
              </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="row justify-content-center border-2-column offset-top-xl-26">
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div ><span style="font-size: x-large">9001-2003</span>
                    </div>
                    <h6 class="counter-amy-title" style="color: #756AEE">ISO Awarded</h6>
                  </div>
                </div>
                <div class="col-0 col-sm-0">
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div><span style="font-size: x-large">WHO-GMP</span>
                    </div>
                    <h6 class="counter-amy-title" style="color: #756AEE">Certified Products</h6>
                  </div>
                </div>
                <div class="col-0 col-sm-0">
                </div>
              </div>
            </div>
			<h2 class="wow fadeInLeft" style="text-transform: none;">Group of Companies</h2>
            <div class="col-lg-6 col-xl-12 align-self-center">
              <div class="row row-30 justify-content-center">
				<?php
					while ($row = $group_of_companies->fetch_assoc()) {
				?>
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft"><a href="index.php"></a>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'" alt='.$row['Company_Name'].'/>'?>
				</div>
				<?php 
					}				
				?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Years of experience-->
	  <!--Quality-->
      <section >
        <div class="container-fluid isotope-wrap">
          <h2 class="wow fadeInLeft" style="text-transform: none;">Quality</h2>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px;padding-right: 40px;
    padding-left: 40px;">
			<?php 
				echo  nl2br(htmlspecialchars($Quality))."<br><br>";
			
			?>
		  </p>
          <div  class="title-decoration-lines-left container2" style="color: dimgray; text-align: justify; font-size: 16px;
    padding-left: inherit;">
			<?php 
				echo  nl2br(htmlspecialchars($Quality_points));
			
			?>
		</div>
        </div>
      </section><br/><br/>
	  <!--Quality-->
	  <!--Research & Development-->
      <section>
        <div class="container-fluid isotope-wrap">
          <h2 class="wow fadeInLeft" style="text-transform: none;">Research & Development</h2>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px;padding-right: 40px;
    padding-left: 40px;">
			<?php 
				echo nl2br(htmlspecialchars($Res_and_dev))."<br><br>";
			
			?>
		  </p>
		  <div  class="title-decoration-lines-left container2" style="color: dimgray; text-align: justify; font-size: 16px;
    padding-left: inherit;">
			<?php 
				echo  nl2br(htmlspecialchars($RnD_points));
			
			?>
		</div>
        </div>
      </section>
	  <br/>
	  <br/>
	  <br/>
	  <br/>
	  <!--Research & Development-->
      

      <!-- You dream — we embody-->
      
      <!-- Page Footer-->
      <footer class="section section-fluid footer-classic">
        <div class="container-fluid bg-gray-15">
          <div class="row justify-content-center row-30">
            <div class="col-md-10 col-lg-12 col-xl-4 wow fadeInRight">
              <div class="box-footer box-footer-small">
                <div class="footer-brand"><a href="index.php"><img src="images/logo.png" alt="" style="max-height: 120px; max-width:110px;"/></a></div>
                <p class="text-width-medium" style="color:white">We are focusing on all our endeavors to achieve complete customer satisfaction.</p>
                <div class="contact-classic">
                  <div class="contact-classic-item">
                    <div class="unit unit-spacing-md align-items-center">
                      <div class="unit-left"  style="margin-bottom: 0px;">
                        <h6 class="contact-classic-title">Address</h6>
						<div class="unit-body contact-classic-link">
						<?php echo '<a href="http://maps.google.com/?q='.$Address.'" target="_blank">'.$Address.'</a><br>';
						?>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="contact-classic-item">
                    <div class="unit unit-spacing-md align-items-center">
                      <div class="unit-left"  style="margin-bottom: 0px;">
                        <h6 class="contact-classic-title">Phones</h6>
						<div class="unit-body contact-classic-link">
						<?php
							for($x = 0; $x < count($phone_arr); $x++) {
							  echo '<a href="tel:'.$phone_arr[$x].'"  target="_blank">'.$phone_arr[$x].'</a>';
							}
						?>
						</div>
                      </div>
                       
                    </div>
                  </div>
                  <div class="contact-classic-item">
                    <div class="unit unit-spacing-md align-items-center">
                      <div class="unit-left"  style="margin-bottom: 0px;">
                        <h6 class="contact-classic-title">E-mails</h6>
						<div class="unit-body contact-classic-link">
						<?php
							for($x = 0; $x < count($email_arr); $x++) {
							  echo '<a href="mailto:'.$email_arr[$x].'"  target="_blank">'.$email_arr[$x].'</a><br/>';
							}
						?>
                      </div>
                      </div>
                    </div>
                  </div>
				  <div class="contact-classic-item">
                    <div class="unit unit-spacing-md align-items-center">
                      <div class="unit-left" style="margin-bottom: 0px;">
                        <h6 class="contact-classic-title">Skype</h6>
						<div class="unit-body contact-classic-link">
						<?php
						echo '<a href="skype:'.$Skype.'?chat" target="_blank">live:'.$Skype.'</a>';
						?>
                      </div>
                      </div>
                      
                    </div>
                  </div>
				  <div class="contact-classic-item">
                    <div class="unit unit-spacing-md align-items-center">
                      <div class="unit-left"  style="margin-bottom: 0px;">
                        <h6 class="contact-classic-title">Indiamart</h6>
						<div class="unit-body contact-classic-link">
						<?php
						echo '<a href="'.$Indiamart.'" target="_blank">www.indiamart.com/saltabiotech</a>';
						?>
                      </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <ul class="list-inline list-inline-sm footer-social-list">
					<?php
							echo '<li><a class="icon fa fa-facebook" href="'.$Facebook.'" target="_blank"></a></li>';
							echo '<li><a class="icon fa fa-skype" href=skype:"'.$Skype.'" target="_blank"></a></li>';
							echo '<li><a class="icon fa fa-linkedin" href="'.$Linkedin.'" target="_blank"></a></li>';
					?>
                </ul>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-footer">
                <h3 class="font-weight-normal">Questions? Contact Us</h3>
                <form  action="index.php" method="POST"  >
					<div class="form-group">
						<label  class="col-form-label" style="color: white;">Name</label>
						<input type="text" class="form-control" name="inq-name" required>
					  </div>
					  <div class="form-group">
						<label  class="col-form-label" style="color: white;">E-mail</label>
						<input type="email"  placeholder="yourname@example.com" class="form-control" name="inq-email" required>
					  </div>
					  <div class="form-group">
						<label class="col-form-label" style="color: white;">Message</label>
						<textarea type="text" class="form-control"  name="inq-message" required></textarea>
					  </div>
					  <button type="submit"  class="btn btn-primary" name="submitContactForm" value="SubmitContactForm">Send Message</button>
				  </form>
                <!--<form class="rd-form rd-mailform" >
                  <div class="form-wrap">
                    <input class="form-input" id="contact-name-6" type="text" name="inq-name" data-constraints="@Required"/>
                    <label class="form-label" for="contact-name-6">Name</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email-6" type="email" name="inq-email" data-constraints="@Email @Required"/>
                    <label class="form-label" for="contact-email-6">E-mail</label>
                  </div>
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message-6">Message</label>
                    <textarea class="form-input" id="contact-message-6" name="inq-message" data-constraints="@Required"></textarea>
                  </div>
                  <button class="button button-block button-primary" type="submit">Send Message</button>
                </form>-->
              </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <div class="box-footer">
                <h3 class="font-weight-normal">What We Offer</h3>
                <ul class="footer-list-category">
                  <li class="heading-4"><a href="Products.php" target="_blank">Herbal Products<span></span></a></li>
                  <li class="heading-4"><a href="Products.php" target="_blank">Organic Juices<span></span></a></li>
                  <li class="heading-4"><a href="Divisions.php" target="_blank">Theraputics<span></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
	
	<!--LIVEDEMO_00 -->
    
	<script type="text/javascript">
	if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
	 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7078796-5']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();</script>
	
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>