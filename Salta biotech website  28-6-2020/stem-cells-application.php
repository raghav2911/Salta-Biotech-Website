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
    <title>Stem Cells Application</title>
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
	.container2 {
		width: 80%;
		margin: 0 auto;
		padding: 20px;
	}
	.ahover:hover{
		color:cadetblue !important;
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
      <h2 style="color:cadetblue;padding-top: inherit;">Application of Stem Cells in Cardiovascular</h2>
      <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Cardiovascular Diseases (CVDS)</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			Cardiac disease is still the primary cause of mortality in the world. An estimate shows that 17.3 million people died from CVDs in 2014, representing 30% of all global deaths. The number of people who die from CVDs, mainly from heart disease
			and stroke, will increase to reach 23.3 million by 2030.
		  </p>
        </div>
		<div class="col-md-15 col-lg-15 col-xl-15">
					  			<p Style="font-size: 20px;Color: cadetblue; ">Group of Disorders of Heart and Blood vessels</p>

              <div class="row row-50 justify-content-center">

                <div class="col-sm-3">
                  <!-- Circle Progress Bar-->
                  <div class="progress-bar-circle" data-value="0.48" data-gradient="cadetblue" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                  <p class="progress-bar-circle-title">Coronary heart disease</p>
                </div>
                <div class="col-sm-3">
                  <!-- Circle Progress Bar-->
                  <div class="progress-bar-circle" data-value="0.25" data-gradient="cadetblue" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                  <p class="progress-bar-circle-title">Cerebrovascular disease</p>
                </div>
                <div class="col-sm-3">
                  <!-- Circle Progress Bar-->
                  <div class="progress-bar-circle" data-value="0.11" data-gradient="cadetblue" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                  <p class="progress-bar-circle-title">Peripheral arterial disease</p>
                </div>
				<div class="col-sm-3">
                  <!-- Circle Progress Bar-->
                  <div class="progress-bar-circle" data-value="0.06" data-gradient="cadetblue" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                  <p class="progress-bar-circle-title">Rheumatic heart disease</p>
                </div>
              </div>
            </div>
		<div class="container-fluid isotope-wrap">
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			In the absence of effective endogenous or drug induced repair mechanisms following cardiac injury, cell-based therapies have rapidly emerged as potential novel therapies to treat myocardial failure.
		  </p>
        </div>
	  </section>
	   <div class="container">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Treatment Options</h3>
          <div class="row row-30 justify-content-center">
            <div class=" col-sm-5 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
				<h4 class="quote-modern-cite">Coronary Angioplasty</h4>
            </div>
			&nbsp;
			 <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
				<h4 class="quote-modern-cite">Radiofrequency Ablation</h4>
            </div>
			&nbsp;
			 <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
				<h4 class="quote-modern-cite">Pacemaker Insertion</h4>
            </div>
			&nbsp;
			 <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
				<h4 class="quote-modern-cite">Cardiac Defibrillator</h4>
            </div>
			&nbsp;
			<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
				<h4 class="quote-modern-cite">Resynchronization Therapy</h4>
            </div>
			
          </div>
        </div>
		<p Style="Color:blue; font-size: x-large; Color: cadetblue; font-size: 17px;">Risk factors associated with various therapies include discomfort and bleeding, blood vessel damages, arrhthymia kidney damage. STEM CELL Therapy could potentially repair and regenerate damaged heart tissue.</p>
        <br/><br/>
		<div class="container">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Classification of Cells According To their Source</h3>
            <br/><br/><div class="col-lg-6 col-xl-12 align-self-center">
              <div class="row row-30 justify-content-center">
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					Bone Marrow-Derived Stem/Progenitor Cells
				</div>
				&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					Hematopoietic Stem Cells (HSCs)
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					Mesenchymal (Stromal) Stem Cells (MSCs)
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					Endothenial Progenitor Cells
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					<p>Umbilical Cord Blood Cells</p>
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					Resident Cardiac Stem/Progenitor Cells
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					Adipose-Derived Stem Cells
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					Skeletal myoblasts
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3); font-size: 15px;">
					Embryonic Stem Cells
				</div>
              </div>
            </div>
          
        </div>
	  <br/><br/><br/><br/>
        <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="2" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
            <article class="quote-lisa disable-owl-swipe">
				<h5 style="Color: cadetblue;">METHODS OF CELL DELIVERY</h5>
				<ul class="list-marked" style="font-size:16px">
                    <li>Direct Myocardial Injection</li>
                    <li>Transcatheter Endomyocardial Injection</li>
                    <li>Intracoronary Cell Injection</li>
                    <li>Intravenous Cell Injection</li>
                    <li>Intramyocardial Injection via Coronary Vein</li>
                  </ul><br/><br/>
                </article>
			<article class="quote-lisa disable-owl-swipe">
			
			<img src="images/Salta Cord/Intracoronary Cell Injection.jpg" alt="" style="padding-bottom: 13px;"/>
			<h5 style="Color: cadetblue;">Intracoronary Cell Injection</h5>
			</article>
		  </div>
		  </div>
        <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="2" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
            <article class="quote-lisa disable-owl-swipe">
				<h5 style="Color: cadetblue;">APPLICATIONS IN REGENERATIVE MEDICINE MYOCARDIAL REPAIR</h5>
				<ul class="list-marked" style="font-size:16px">
                    <li>Research in regenerative medicine using these cells is still at an early stage.</li>
                    <li>Increasing evidence suggesting that the cardiovascular beneficial effects of stem cell therapy are largely due to the actions of tropic factors or paracrine mediators.</li>
                  </ul><br/>
                </article>
			<article class="quote-lisa disable-owl-swipe">
			<img src="images/Salta Cord/regenerative-medicine.jpg" alt="" style="padding-bottom:10px; padding-top:10px;"/><br/>
			</article>
		  </div>
		  </div>
	   <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">CAD Treatment : EECP + Autologoustem Cells</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			Patients with CAD and Ejection fraction below 50% are good candidates. EECP 30 to 40 cycle plus 3 autologus stem cells IV infusions given. Stem Cells are injected/ infused IV at 7 days intervals. EF improved by 10% to 15% over the average EECP improvements. EF improvement visible in 85% of the cases in the study group.
		  </p>
        </div>
		</section>
		<section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Case Studies</h3><br/>
		  	  <iframe src="images/Salta Cord/CaseStudies.pdf" style="zoom:4;width:100%"></iframe>

        </div>
	   <section class="section section-sm section-last bg-default text-md-left">
        <div class="container">
          <!-- Bootstrap collapse-->
          <div class="row row-15  align-items-start card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="true">
            <div class="col-lg-6">
              <!-- Bootstrap card-->
              <article class="card card-custom card-corporate">
                <div class="card-header" id="accordion1Heading1" role="tab">
                  <div class="card-title"><a class="ahover" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse1" aria-controls="accordion1Collapse1" aria-expanded="true" style="padding-top:15px; padding-bottom:15px; font-size:17px; color: black;" >Conclusion
                      <div class="card-arrow" style="border: 4px solid cadetblue; width:30px; height:30px;"></div></a>
                  </div>
                </div>
                <div class="collapse show" id="accordion1Collapse1" role="tabpanel" aria-labelledby="accordion1Heading1">
                  <div class="card-body">
					<ul class="list-marked" style="color: black;">
						<li>Minimizing the potential of transplanted
						undifferentiated SCs to form teratomas.</li>
						<li>Methods ensuring a purified cardiomyocyte
						population from SCs.</li>
						<li>Safe and effective methods of cell delivery and
						ensuring that transplanted cells remain in the
						myocardium.</li>
					 </ul><br/>
                  </div>
                </div>
              </article></div>
			  <div class="col-lg-6">
              <!-- Bootstrap card-->
              <article class="card card-custom card-corporate">
                <div class="card-header" id="accordion1Heading2" role="tab">
                  <div class="card-title"><a class="collapsed ahover" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse2" aria-controls="accordion1Collapse2" aria-expanded="true" style="padding-top:15px; padding-bottom:15px; font-size:17px; color: black;">References
                      <div class="card-arrow" style="border: 4px solid cadetblue; width:30px; height:30px;"></div></a>
                  </div>
                </div>
                <div class="collapse" id="accordion1Collapse2" role="tabpanel" aria-labelledby="accordion1Heading2">
                  <div class="card-body">
					<ul class="list-marked" style="color: black;">
						<a style="color:cadetblue;" href="http://www.who.int/mediacentre/factsheets" target="_blank">http://www.who.int/mediacentre/factsheets</a>
						<li> Gnecchi M, He H, Noiseux N, Liang OD, Zhang L,
						Morello F, Mu H, Melo IG, Pratt RE, Ingwall JS,
						Dzau VJ. Evidence supporting paracrine
						hypothesis for Akt-modified mesenchymal stem
						cell-mediated cardiac protection and functional
						improvement. FASEB J 20: 661-669, 2006.</li>

						<li> Tang YI. Zhao Q, Qin X, Shen L, Cheng L, Ge J,
						Phillips MI. Paracrine action enhances the effects
						of autologous mesenchymal stem cell
						transplantation on vascular regeneration in rat
						model of myocardial infarction. Ann ‘Thorac Surg
						80: 229-236, 2005.</li>

						<li> Togel F, Hu Z, Weiss K, Isaac J, Lange C,
						Westenfelder C. Administered mesenchymal stem
						cells protect against ischemic acute renal failure
						through differentiation-independent mechanisms.
						Am J Physiol Renal Physiol 289: F31-F42, 2005. </li>

						<li> Nelson TJ, Martinez-Fernandez A, Yamada S, et al.
						Repair of acute myocardial infarction by human
						stemness factors induced pluripotent stem cells.
						Circulation, 2009; 120:408e16 </li>
											
					 </ul><br/>                  
					</div>
                </div>
              </article>
              
            </div>
          </div>
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
                <form  action="stem-cells-application.php" method="POST"  >
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
	  })();
	  $(".disable-owl-swipe").on("touchstart mousedown", function(e) {
		 // Prevent carousel swipe
		 e.stopPropagation();
		})
	  </script>
	
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>