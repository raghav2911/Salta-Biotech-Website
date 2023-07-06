<?php
include 'Connection.php';
include 'DB.php';
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

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Salta Cord Theraputics</title>
    <meta name="format-detection" content="telephone=no">
	<meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <!--<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
	#banner {
	  position: absolute;
	  top: 0;
	  left: 0;
	  right: 0;
	  width: 100%;
	  height: 200px;
	  z-index: -1;
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
	  <img src="images/Salta Cord/saltacord-banner.jpg" style="width:100%; height:600px;"/>
	  <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">SaltaCord Theraputics</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			SaltaCord Theraputics is a fully owned unit of Salta Biotech & Neuraceuticals, which deals with devloping personalized tissue regeneration technologies and therapeutic solutions, while integrating biological cells, biomaterials and nanobiotechnology process know hows. SaltaCord offers solutions in bone marrow transplantation, haploidentical transplants and cancer immuno therapies, SaltaCord provides USFDA & CDSCO/DCGI approved cell processing systems for transplantative & clinical research. 
		  </p>
        </div>
		</section>
		<section>
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Who we are?</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			Your service provider - for research & development in novel biologicals for tissue regeneration, smart and intelligent biomaterials, adult stem cell, cellular therapies, molecular & cellular diagnostics, tissue & cell banking, education, training and personalized health care. SaltaCord Theraputics is positioned to be country's best tissue engineering and cell transplantation support provider to clinicians and hospitals. We have cGMP, GLP compliant cell processing ISO7 clean room to serve the need of clinical research in tissue transplants. We also provide modular clean rooms and USFDA compliant cell processing units.
		  </p>
        </div>
		</section>
		</section>
		<section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Our Approach</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			Our approach involves integrating the latest research in cell biology, tissue engineering, biotechnology; towards development of new solutions in regenerative medicine, we partner with research labs, scientists, ompanies and clinical establishments globally to achieve our goals.
		  </p>
        </div>
		</section>
		<section >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Partnering Companies</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			We encourage market and product development partnership with stem cells, tissue engineering and biopharma companies which provide unique solutions to unmet medical needs.
		  </p>
        </div>
		</section>
		<section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Partnering Doctors</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			SaltaCord Theraputics brings together a term of experienced stem cell and cell transplant surgeons and physicians across India and abroad to offer you the best possible and safe treatment options. This include experts in bone marrow transplants, sports medicine, orthopedics, reconstructive surgeries, antiaging, cancer immunotherapies, infertility, dermatology, gynecology, neurology, liver & kidney transplants etc.
		  </p>
        </div>
		</section>
		<section >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Partnering Scientists</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			SaltaCord Theraputics also has an internationally renowned team of experienced scientists in the areas of clinical research, stem cells, tissue engineering, immunology, oncology and cell biology.
		  </p>
        </div>
		</section>
      <!-- Grid blog-->
      <section class="section section-xl bg-default text-md-left">
        <div class="container" style="padding-left: 80px;padding-right: 50px;">
          <div class="row row-16 justify-content-center">
		  <div class=" col-lg-6">
              <article class="post post-aria"  ><a class="post-aria-figure" href="stem-cells-application.php"><img src="images/Salta Cord/StemCells.jpg" alt="" width="570" height="492"/></a>
                <div class="post-aria-footer">
				  <p class="thumbnail-modern-subtitle" Style="Color:cadetblue; font-size: x-large; ">Applications of Stem Cells in Cardiovascular</p>
                </div>
              </article>
            </div>
           <div class="col-lg-6">
              <article class="post post-aria"><a class="post-aria-figure" href="cancer-program.php"><img src="images/Salta Cord/Cancer.jpg" alt="" width="570" height="492"/></a>
                <div class="post-aria-footer">
				  <p class="thumbnail-modern-subtitle" Style="Color:cadetblue; font-size: x-large; ">Personalised Cancer Cellular Immuno Therapies & Technologies Vision 2020</p>
                </div>
              </article>
            </div>
         <!-- <div class="pagination-wrap">
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item page-item-control disabled"><a class="page-link" href="#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item page-item-control"><a class="page-link" href="#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
              </ul>
            </nav>
          </div>-->
        </div>
      </section>

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
						?></div>
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
                <form  action="Divisions.php" method="POST"  >
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
    <script  type="text/javascript">
        	if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
    </script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>