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
    <title>Salbumin</title>
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
	@media screen and (max-width: 600px) {
		  table thead {
			border: none;
			clip: rect(0 0 0 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px;
		  }
		  
		  table tr {
			border-bottom: 3px solid #ddd;
			display: block;
		  }
		  
		  table td {
			border-bottom: 1px solid #ddd;
			display: block;
			text-align: right;
		  }
		  
		  table td::before {
			content: attr(data-label);
			float: left;
		  }
		}
		.confirm_selection {
            -webkit-transition: text-shadow 1s linear;
            -moz-transition: text-shadow 1s linear;
            -ms-transition: text-shadow 1s linear;
            -o-transition: text-shadow 1s linear;
            transition: text-shadow 1s linear;
        }
        .confirm_selection:hover,
        .confirm_selection.glow {
            text-shadow: 0 0 10px red;
        }
	</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
   <!-- <div class="preloader">
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
      <h1 style="color:cadetblue; padding-top: inherit;">Salta's Salbumin</h1>
	  <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          
			<div class="owl-carousel owl-modern " data-items="1" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
			<article class="quote-lisa disable-owl-swipe" >
			<h2 class="wow fadeInLeft confirm_selection">Golden Opportunity</h2><h2 class="wow fadeInLeft confirm_selection">for Dieticians & Nutritionists</h2>
			<p style="font-size:16px;color: dimgray; text-align:justify;padding-left:20px;padding-right:20px;">It has been 5 years to us woking on Oral-Albumen and we are improving it day by day with continous research and practices. 
			We are searching for experienced & knowledgeable Nutritionists/ Dieticians who are passionate about helping patients achieve their goals and lead healthier lives. 
			We heartily invite Nutritionists/ Dieticians PAN India to grow with us, promote Salbumin and take the ownership of this brand. 
			We welcome Nutritionists/ Dieticians to market Salbumin and earn considerable profit.
			We at SaltaBiotech recieve third party manufacturing orders also. 
			Also, we can provide Oral-Albumen in your own well name.  </p>
				
			</article>
		  </div>
		  </div>
		</section>
      <section  >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Salbumin (De Sugared Spray Dried Egg Albumen Powder)</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			Salbumin - Egg Albumen 100%, egg white protein is a pure ingredient. All you get are the benefits of liquid egg Albumen; a high quality protein that contains all the essential amino acids needed by the body for tissue growth and repair, while being cholesterol, lactose and fat free.Egg Albumen is nature’s best source of protein, resembles to Serum Albumen so gets easily absorbed and utilized for muscle building.Highest PER(3.9), ensures more muscle building compared to other protein sources. Provides 80% protein, one serving(about 80g) of Albumen supplies 24 grams of 100% bio available pure protein.Offers best BCAA (5022mg/100g.) profile that stimulates protein synthesis in the muscles as well as release mental fatigue during performance.Glows prolonged absorption and has the best anabolic activity throughout the day and even at night considered the good standard of protein supplements. Salbumin - is an excellent protein source for people who can’t or don’t wish to eat meat or dairy products. It can also be used to replace fresh liquid egg whites in recipes such as baked goods.

		  </p>
        </div>
		</section>
		<section  class="section section-sm section-fluid bg-default">
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Several Clinical Trials Related to Oral </h3>
		  <h3 class="wow fadeInLeft" style="text-transform: none;">Administration of Egg Albumen</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Randomized, open label, controlled clinical trials of oral administration of an egg Albumen - based protein supplements to patients on continuous ambulatory peritoneal dialysis.
		  </p>
		  <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Author Affiliations Hospital de Especialidades, GMNO, IMSS, Guadalajara, Mexico.</p>
			<p  data-wow-delay=".1s" style="color: cadetblue; text-align: justify; font-size: 16px; padding-right: 40px;
	padding-left: 40px;" >
			Abstract</p>
			<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Background/ Aim : Malnutrition is highly prevalent in patients Continuous Ambulatory Peritoneal Dialysis(CAPD) and is a strong predictor of increased morbidity and mortality.
				Therefore, the aim of this study was to evaluate the effect of oral administration of an egg Albumen-based protein supplement on the nutritional status of CAPD patients.
			</p>
			<p  data-wow-delay=".1s" style="color: cadetblue; text-align: justify; font-size: 16px; padding-right: 40px;
	padding-left: 40px;" >
			Methods</p>
			<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				In this randomized, open label, controlled clinical trial, 28 CAPD patients were allocated to a study(n=13) or a control(n=15) group. Both groups received conventional nutritional counselling; the  study groups received, additionally, an oral egg Albumen-based supplements. During a 6 months follow up, all patients had monthly clinical and biochemical evaluations and quarterly assessments of adequacy of dialysis and nutrition. 

			</p>
			<p  data-wow-delay=".1s" style="color: cadetblue; text-align: justify; font-size: 16px; padding-right: 40px;
	padding-left: 40px;" >
			Results</p>
			<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Serum egg Albumen levels were not different between groups; however, a significant increase(baseline vs final) was observed in the study groups(2.64+/-0.35 vs 3.05 +/-0.72 g/dL) but not in the control group(2.66+/-0.56 vs 2.80+/-0.54 mg/dL). Calorie and protein intake increased more in the study group(calories 1331+/-432 vs 1872+/-698 kcal; proteins 1.0+/-0.3 vs 1.7+/-0.7 g/kg), then in the control group (calories 1423+/- 410 vs 1567 +/- 381 kCal; protein 1.0 +/- 0.4 vs 1.0 +/- 0.3 g/Kg). Similarly, non-protein nitrogen appearance rate (nPNA) increased  significantly more in the study(1.00 +/- 0.23 vs 1.18 +/- 0.35 g/Kg/day). Then in the control group (0.91 +/- 0.11 vs 0.97 +/- 0.14 g/Kg/day). Triceps Skinfold Thickness (TSF) and Midarm Muscle Area (MAMA) displayed a non significant trend to a greater increase in the study group 
				(TSF 16.7 +/- 8.7 vs 18.3 +/- 10.7 mm; MAMA 23.8 +/- 6.2 vs 25.8 +/- 5.9 cm<sup>2</sup>) then in control (TSF 16.4 +/- 5.7 vs 16.9 +/- 7.0 mm; MAMA 28.7 +/- 7.8 vs 30.0 +/- 7.9 cm<sup>2</sup>).
				At the end of follow-up, the frequency of patients with moderate or severe malnutrition decreased 6% in the control group and decreased 28% in the study group. At the final evaluation, the most important predictor of
				serum albumen were the oral egg albumen-based supplement administration and protein intake (p < 0.05);
				secondary predictor(p = 0.06) were peritoneal transport rate and MAMA. 

			</p>
			<p  data-wow-delay=".1s" style="color: cadetblue; text-align: justify; font-size: 16px; padding-right: 40px;
	padding-left: 40px;" >
			Conclusions</p>
			<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			In the study group, oral administration of the egg Albumen-based supplement significantly improved serum Albumen, calorie and protein intake, and nPNA, and, compared to controls, this maneuver was associated with a trend to increase anphropometric parameters and improved subjective global assessments evaluation, oral administration of the Albumen supplements and protein intake were the most significant predictors of serum Albumen at the end of follow-up. This oral supplement may be a safe, effective, and cheap method to improve nutritional status in peritoneal dialysis patience.
			</p>
			
			 
        </div>
		</section>
		 <section  >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">	Oral Egg-Albumen-Based Protein Supplement</h3>
		  <h3 class="wow fadeInLeft" style="text-transform: none;">Improved Nutritional Status in CAPD Patients</h3><br/><br/>
          <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern " data-items="1" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
			<article class="quote-lisa disable-owl-swipe">
				<h5 style="Color: cadetblue; text-transform: none; ">Pam G Harrison, MHs</h5>
				<p style="font-size:16px;color: dimgray; text-align:justify;padding-left:15px;padding-right:15px;"><span><b>Istanbul, Turkey</b><span> - An oral egg-Albumen-based protein supplement significantly improved nutritional status in patients on Continuous Ambulatory Peritoneal Dialysis(CAPD), Mexican investigators report. The supplement was also very tolerated engendered excellent compliance, and was safe.</p>
				<p style="font-size:16px;color: dimgray;text-align:justify; padding-left:15px;padding-right:15px;">“The causes of malnutrition in CAPD are multiple and complex, but two factors seem to be almost universal. In this regard, one of which is the dialysate protein dose and the other low intake of nutrients, <span><b>Dr. Fabiola Martin del Campo</b></span>(Hospital de Especidialidades, Guadalajara, Mexico) told attendees.So, it seems to be logical to restore protein dose and provide adequate amounts of nutrients to avoid malnutrition dialysis. This study suggest that this oral Albumen supplement may be  a safe, effective, and cheap method to improve nutritional status in peritoneal dialysis.</p>
				<p style="font-size:16px;color: dimgray;text-align:justify; padding-left:15px;padding-right:15px;">This study was presented during the <span><b>European Renal Association/ European Dialysis and Transplant Association(ERA/ EDTA). XLII Congress.</b></span>”</p>
				
			</article>
		  </div>
	  </div>
        </div>
		</section>
		<section class="section section-sm section-fluid bg-default">
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Randomized Open-Label Trial</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				The study was done as a randomized, open-label controlled trial involving 30 CAPD patients, equally divided into study and controlled groups. All patients had been on CAPD for atleast 1 month and had associated malnutrition. 
		  </p>
		   <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Patients in the study group received the oral egg Albumen based supplement at dose of 15gm. twice a day #151, the equivalent of about six to eight egg whites. The supplement was prepared as a powder and added to milkshakes or sprinkled on meals.
		  </p>
		  <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Both groups received conventional nutritional counselling provided by single expert renal nutritionist, del Campo said, and the counselling included a dietary prescription of 1.3 to 1.5 grams of protein in per kg per day and 30 to 35 calories per kg per day, as is usually recommended for CAPD patients. Patients were followed for 6 months, and 90% of patients remained compliant at follow-up. At baseline, there were no differences in age, sex, cause of End-Stage Renal Disease(ESRD), or time on dialysis.
		  </p>
		  <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Renal function was already low at the beginning of the study and declined further by study end, but it did not differs between the two groups, del Campo noted. In contrast, serum Albumen was significantly increased over baselines in study patients, but not in controls, among whom serum Albumen remained  relatively stable throughout the study. Calorie intake was also similar between groups at baseline at approximately 1400-1500 calories a day, but by study end, daily calorie intake had increased some 400 calories  in the study group, more than in controls. 		  </p>
			<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Serum Albumen and calorie intake at baseline and 6 months in patients receiving an oral egg Albumen based protein supplements versus no supplements.		  </p>
			<br/><br/>
			
			<!--<table style="width: 1200px;" >
							<tbody>
								<tr>
									<td class="" style="width: 258px;"><strong><strong>&nbsp;End Point</strong></strong>
										<table style="width: 452px; height: 50px;">
											<tbody>
												<tr style="height: 24px;">
													<td style="width: 130px; height: 24px;">
														<table style="width: 444px;">
															<tbody>
																<tr>
																	<td style="width: 443px;">&nbsp;</td>
																</tr>
																<tr>
																	<td style="width: 443px; padding-left:74px;">Serum Albumen (mg/dL)</td>
																</tr>
																<tr>
																	<td style="width: 443px;padding-left:74px;">Calorie intake (cal/d)</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
								</tbody>
							</table>
						</td>
						<td style="width: 280px;"><strong><strong>&nbsp;Oral&nbsp;</strong></strong><strong><strong>Supplement</strong></strong>
							<table style="width: 304px;">
								<tbody>
									<tr>
										<td style="width: 128px;"><strong>Baseline</strong></td>
										<td style="width: 101px; padding-left:30px;"><strong>6 mo</strong></td>
									</tr>
									<tr>
										<td style="width: 128px;">2.64</td>
										<td style="width: 101px;padding-left:30px;">3.05</td>
									</tr>
									<tr>
										<td style="width: 128px;">1400-1500</td>
										<td style="width: 101px;padding-left:30px;">1900</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="width: 280px;"><strong><strong>&nbsp;No Supplement</strong></strong>
							<table style="width: 304px;">
								<tbody>
									<tr>
										<td style="width: 128px;"><strong>Baseline</strong></td>
										<td style="width: 101px;padding-left:30px;"><strong>6 mo</strong></td>
									</tr>
									<tr>
										<td style="width: 128px;">2.66</td>
										<td style="width: 101px;padding-left:30px;">2.80</td>
									</tr>
									<tr>
										<td style="width: 128px;">1400-1500</td>
										<td style="width: 101px;padding-left:30px;">1600</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>-->
			<table style="margin-left:auto;margin-right:auto;">
			  <thead>
				<tr>
				  <th scope="col">End Point</th>
				  <th scope="col" style="padding-left: 124px;">Oral Supplement</th>
				  <th scope="col" style="padding-left: 124px;">No Supplement</th>
				</tr>
			  </thead>
			  <tbody>
			  <td data-label="End Point">
				<table>
					  <tbody>
						<tr>
							<td >&nbsp;</td>
						</tr>
						<tr>
							<td >Serum Albumen (mg/dL)</td>
						</tr>
						<tr>
							<td>Calorie intake (cal/d)</td>
						</tr>
					</tbody>
				</table>
				<td data-label="Oral Supplement" style="padding-left: 100px;">
				<table>
					  <tbody>
						<tr>
							<td style="padding-right: 100px;" ><strong>Baseline</strong></td>
							<td ><strong>6 mo</strong></td>
						</tr>
						<tr>
							<td style="padding-right: 100px;" >2.64</td>
							<td >3.05</td>
						</tr>
						<tr>
							<td style="padding-right: 100px;">1400-1500</td>
							<td >1900</td>
						</tr>
					</tbody>
				</table>
				</td>
				<td data-label="No Supplement" style="padding-left: 100px;">
				<table>
					  <tbody>
						<tr>
							<td style="padding-right: 100px;" ><strong>Baseline</strong></td>
							<td ><strong>6 mo</strong></td>
						</tr>
						<tr>
							<td style="padding-right: 100px;">2.66</td>
							<td >2.80</td>
						</tr>
						<tr>
							<td style="padding-right: 100px;">1400-1500</td>
							<td>1600</td>
						</tr>
					</tbody>
				</table>
				
				</td>
				</tbody>
			</table>
			<p data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;">
				Similarly, protein intake increased from 1 gram per kg at baseline to 1.7 gram/kg in study patients. Among controls, protein intake remained virtually unchanged by study end. 
				He noted that calorie intake, though higher in the study group, was still low in both groups when compared with recommendations made for CAPD patients. Protein equivalent of nitrogen appearance normalized by standard weight(lTNA), also increased significantly in the study group but not in controls. Triceps skinfold thickness and midarm muscle area showed a non significant trend toward an increase in both groups, but more important increases were observed in the study group, she added.
			</p>
			<p  data-wow-delay=".1s" style="color: cadetblue; text-align: justify; font-size: 16px; padding-right: 40px;
	padding-left: 40px;" >
			Reduction in malnutrition</p>
			<p data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;">
				Patients were subdivided into groups according to the degree of malnutrition-minor, moderate, or severe. Although most had only mild malnutrition at baseline, “the nutritional status seemed to improve more markedly in the study group then in the control group.” del Campo said, “and  at follow-up, the frequency of patients with moderate or severe supplements was also well tolerated, and no side-effects were reported.”
				There were 19 hospitalizations during the study interval- eight for peritonitis- but no significant difference were documented between the two groups. 

			</p>
			<p data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;">
				“In conclusion, this oral egg Albumen based supplement significantly improved serum Albumen, calorie, and protein intake as well as nPNA , and it was associated with a trend toward an increased in anthropometric parameters,” del Campo said, adding that at approximately US 70Â¿ a day,the supplement is  also a very inexpensive way to improve nutritional status in CAPD patients.			</p>
		</div>
		</section>
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Indian Joural Peritoneal of Dialysis</h3>
		  <h3 class="wow fadeInLeft" style="text-transform: none;">Literature Review</h3><br/>
		  	  <iframe src="images/products/LitReview.pdf" style="zoom:4;width:100%;"></iframe>

        </div><br/><br/>
      <section >
        <div class="container-fluid isotope-wrap">
          <h3 class="wow fadeInLeft" style="text-transform: none;">Product Information</h3>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Suggested use : Add one serving(approx 30 grams) of Salbumin to a glass of cold milk/ juice/ vegetable juice or other liquid. Sweetness or flavours may be added, if desired. Stir rapidly for 45 seconds or shake vigorously in a covered container. Use 2-3 times daily
		  </p>
        </div>
		<br/><br/>
		<div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern " data-items="2" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
			<article class="quote-lisa disable-owl-swipe" style="padding-top: 65px; padding-bottom:0px;">
				<img src="images/products/facts-table.jpg" alt="" style="padding-top: 60px;padding-bottom: 60px;" />
			</article>
            <article class="quote-lisa disable-owl-swipe">
				<img src="images/products/salta-careers.jpg" alt="" style="padding-top: 60px;padding-bottom: 60px;" />
			</article>

		  </div>
		</div>
	    <div class="container">
		  <!-- Owl Carousel-->
		  <div class="owl-carousel owl-modern " data-items="1" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
			<article class="quote-lisa disable-owl-swipe">
							<p  data-wow-delay=".1s" style="text-align: justify; font-size: 16px; padding-right: 40px;
				padding-left: 40px;" >
						<span style="color:cadetblue">Ingredients: </span> <span style="color:dimgray">Egg Albumen Powder:</span>
					</p>
					<p  data-wow-delay=".1s" style="text-align: justify; font-size: 16px; padding-right: 40px;
				padding-left: 40px;" >
						<span style="color:cadetblue">Allergen Information: </span> <span style="color:dimgray">Contains Eggs</span>
					</p>
					<p  data-wow-delay=".1s" style="color:dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
				padding-left: 40px;" >
						Contains aspartame and permitted artificial flavouring substances
					</p>
					<p  data-wow-delay=".1s" style="color: cadetblue; text-align: justify; font-size: 16px; padding-right: 40px;
				padding-left: 40px;" >
						Indications: </p>
					<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
			padding-left: 40px;" >
					Salbumin as total Enteral nutrition is used in variety of conditions, including hypoAlbumenemia, shock due to blood loss in the body, burns, low protein levels due to surgery or liver failure, and as an nutritional supplement in bypass surgery. 			</p>
					 <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
				padding-left: 40px;" >
					In Acute renal disease, sepsis, COPD-Chronic Obstructive  Pulmonary Disease. Pneumonia, Chronic Bronchitis, Cachexia, TB, HIV Malignancies.
				  
	  
			</article>
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
                <form  action="salbumin.php" method="POST"  >
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
		var glow = $('.confirm_selection');
		setInterval(function(){
			glow.hasClass('glow') ? glow.removeClass('glow') : glow.addClass('glow');
		}, 1000);
	  </script>
	
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>