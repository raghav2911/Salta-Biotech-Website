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
    <title>Cancer Program</title>
    <meta name="format-detection" content="telephone=no">
	<meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <!--<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
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
	#imggame {
	  border:  2px solid #EEEEEE;
	  padding: 15px;
	  border-radius: 15px;
	  margin-right: 100px;
	}
	/*img{
	  width:auto;
	  height:auto;
	  max-width:100%;
	  max-height:100%;
	}*/
	.img-wrap{
	  float:left;
	  width:20%;
	  margin-right:2%;
	}
	.desc{
	  float:right;
	  width:75%;
	}
	.desc p{
	  margin-top:0;
	}
	.clear{
	  clear:both;
	}
	.TextWrap{
		float: left;
		margin: 10px;
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
      <h2 style="color:cadetblue;padding-top: inherit;">SaltaCord Theraputics Cancer Program</h2>
      <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">CanCells : Genetic Predisposition Cancer Screening</p>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			Personal Genomics is the next major medical program  paradign, allowing doctors to user genetic information to choose the most ideal drugs/treatment to help curing patients. We will help you discover if you are genetically predisposed to one or several cancers:
		  </p>
            <br/><div class="col-lg-6 col-xl-12 align-self-center">
              <div class="row row-30 justify-content-center">
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Basal cell carcinoma
				</div>
				&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Bladder Cancer
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Breast Cancer
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Chronic Lymphocytic
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Leukamia
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Colorectal Cancer
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Follicular Lymphoma
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Hodkin's Lymphoma
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Lung Cancer
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Melanoma
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Meningioma
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Ovarian Cancer
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Pancreatic Cancer
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Prostate Cancer
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Renal Cell Carcinoma
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Thyroid Cancer
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Neuroblastoma
				</div>&nbsp;
				<div class="col-sm-6 col-md-5 col-lg-6 col-xl-2 wow fadeInLeft" style="background-color: rgba(95, 158, 160, 0.3);">
					Testicular Cancer
				</div>
              </div>
            </div>
        </div>
	  </section>
	  <section  >
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">NK TEST : NK Cell Functional Activating Profiling</p>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			This flow cytometry based test is intended to investigate altered NK function found in various disorders and to evaluate the effects of drugs on NK activity. A depression of NK cell activity is usually observed in patients with advanced cancer and with metastatic disease. Depression of NK cell activity is observed in patients with preleukemia, acute or chronic leukemia. NK cell cytotoxic activity is of prognostic value for the probablity of developing metastasis in patients with primary tumors. NK cell activity can now be proven in an objective and reproducible manner with this test.
		  </p>
        </div>
	  </section>
	  <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">Hematopoietic Stem Cell(HSCs) Based Services</p>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Design and training for low cost BMT units, Bone Marrow Stem Cell(BM-HSC) Transplantations, PB MNCs, T-Cell depletions, Haploidentical Transplants, MUD, Cord Blood HSCs, Bone marrow preservation banking, HLA matching and search at BM registries.
		  </p>
        </div>
	  </section>
	  <section>
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">Donor Lymphocyte Infusions : Graft versus Malignancy</p>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Giving chemotherapy/ total-body irradiation before a donor peripheral blood stem cell transplant helps stop and growth of cancer and abnormal cells and helps stop the patient's immune system from rejecting the donor's stem cells. When stem cells from a donor are infused into the patient body, they may help the patient's bone marrow make stem cells, red blood cells , white blood cells, and platelets. Sometimes the transplanted cells from a donor can make an immune response against the body's normal cells. Removing/depleting the T-Cells from the donor cells before transplant may stop this from happening. Giving and infusion of the donor's T-Cells(Donor lymphocyte infusion) after transplant may help destroy any remaining cancer cells(graft-versus-tumor effect).
		  </p>
        </div>
	  </section><br/><br/><br/>
	  <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
            <article class="quote-lisa disable-owl-swipe">
				<h5 style="Color: cadetblue;">Flow Cytometry Cellular Markers: Leukamia/ Lymphoma Panel</h5>
				<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
			SaltaCord provides - Immunophenotyping based on CD45 gating. Additional markers include antibodies to help identify the cell lineage of myeloid cells, erythyroid precursors, megakaryocytic precursors, as well as T-Cells markers and light chain expression on B-Cells.
		  </p>
		  <br/>
		  <img src="images/Salta Cord/immunophenotyping.jpg" alt=""/>
                </article>
			
		  </div>
	  </div>
	  <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern " data-items="1" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
            <article class="quote-lisa disable-owl-swipe">
				<h5 style="Color: cadetblue;">Dendritic Cell Therapies</h5>
				<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; " >
				Dendritic cells(DC) are one of the component of the immune system -where it plays through its antigen presentation, with appropriate molecules on the surface for destruction by the immune system. These cells were described by Ralph Steinam few decades ago. The functions of Dendritic cells(DC)-the functions of Dendritic cell in the human body is through 3 mechanisms involving anitgen presentation and actiivation of T-Cells, maintaining immune tolerance and the third is the maintaining the immune memory in tandem with B-Cells. The mature dendritic cells are exploited for its use in cancer immunotherapy. In vitro, these dendritic cells can be cultured with both CD34+ and/or CD14 monocytes rich peripheral blood cells, in the presence of various cytokines GM-CSF, IL-4, TNFa. The advantage of using peripheral blood monocyte is that large volumnes of DC can be generated in the presence of GM-CSF & IL-4. It has also been expanded by loading tumor lysates, tumor antigen derived peptides, MHC class I restricted peptides or whole protein have all shown to generate anti-cancer immune responses inducing complete tumor regression.
		  </p>
		  <img src="images/Salta Cord/Immunotherapy.jpg" alt="" style="padding-top: 60px;width: 500px;" />
                </article>
		  </div>
	  </div>
	  <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">Adoptive T-Cell Therapies</p>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				Adoptive T-Cell therapy involves the isolation and ex vivo expansion of tumor specific T-Cells to achieve greater number of T-Cells that what could be obtained by vaccination alone.The tumor specific T-Cells are then infused into patients with cancer in an attempt to give the immune system, the ability to overwhelm remaining tumor via T-Cells which an attack and kill cancer. There are many forms of adoptive T-Cells therapy being used for cancer treatment; culturing tumor infiltration lymphocytes or TIL, isolating and expanding one particular T-Cell or clone, even using T-Cells that have been engineered to potently recognize and attack tumors.
		  </p>
        </div>
	  </section>
	  <section>
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">Activation of PB-MNCs</p>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				SaltaCord has found out molecules which work at the nano and picogram quantities to activate the Peripheral Blood Mononuclear Cells(PB-MNCs).Some of these molecules are classified as biological, new age homeopathic drugs, and also some as - traditional herbal medicines. In vitro exposure of the patients PB-MNCs to these molecules followed by their administration IV has shown reduction in tumor sizes and cured  1<sup>st</sup> relapse patients - disease free. 
		  </p>
        </div>
	  </section>
	  <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">Immunotherapy with Biologicals</p>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				SaltaCord has been able to develop some very effective treatment protocols using immunodulatory cytokines, groeth factors, immunoglobulins, small molecules, vitamin binding proteins and homeopathic approaches. These molecules and preparations are known to module the immune system, and have shown encouraging results in various end stage cancer patients including renal cell carcinomas.
		  </p>
        </div>
	  </section>
	  <section>
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">Genetic & Cellular Chemo Sensitivity Prediction</p>
          <p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; padding-right: 40px;
    padding-left: 40px;" >
				We use a personalized approach to predict best prescription options for chemo therapies to our partner doctors. This is done by genetic analysis of the tumor biopsy and also by high throughput screening of anticancer drugs against the patient's cancer cells.
		  </p>
        </div>
	  </section><br/><br/>
	  <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">One Step Gel Separation Technology</p><br/>
	   <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern " data-items="2" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
            <article class="quote-lisa disable-owl-swipe" style="padding-right: 30px;padding-left: 30px; padding-bottom: 80px;">
				<h5 style="Color: cadetblue;">SaltaCord Ortho PRP(Platelet Rich Plasma) Kit</h5>
				<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; " >
				PRP, or Platelet Rich Plasma, is a biological substance made from peripheral blood to trigger healing and regeneration. Platelet Rich Plasma Therapy is a relatively simple, non-surgical treatment for osteoarthritis, reducing knee sprains, healing broken bones. It merges cutting-edge technology with the body's natural ability to heal itself. Platelets contain packets of growth hormones and cytokines that trigger tissues repair, regeneration and enchance healing. When PRP is injected into the damaged area, it activates a mild inflammatory response, which triggers the healing cascade.
				Compatible with most common clinical centrifuges. Easy separation due to the single tube use. Supplied with specific PRP activators. Highly concentrated PRP 2 to 4x extraction by centrifugation. Elimination of contamination, by adapting the enclosed system. Easy identification of the Buffy Coat Layer by naked eye. Gel separator minimizes RBC contamination. High count of number of platelets recovered.
				Benefits of PRP therapy: Treat osteoarthritis, Reduces knee sprains, Treat tennis elbow, Heals broken bones, Effective in chronic tendon injuries. 
				</p><br/><br/><br/>
			</article>
			<article class="quote-lisa disable-owl-swipe" style="padding-right: 30px;padding-left: 30px; padding-bottom: 70px;"">
				<h5 style="Color: cadetblue;">SaltaCord PRFM(Platelet Rich Fibrin Matrix) Snot Clot Kit</h5>
				<p  data-wow-delay=".1s" style="color: dimgray; text-align: justify; font-size: 16px; " >
				PRFM, or Platelet Rich Fibrin Matrix, is a biological substance made from peripheral blood to trigger healing and regeneration. Platelet Rich Fibrin Matrix Therapy is a promising application in the field of periodontal regeneration and can be used in clinical situations requiring rapid healing. It also provides the benefits in anti aging therapy and many other regenerative applications. It merges cutting-edge technology with the body's natural ability to heal itself. Platelets contain packets of growth hormones and cytokines that trigger tissues repair, regeneration and enchance healing. When PRFM is injected into the damaged area, it activates a mild inflammatory response, which triggers the healing cascade.
				Compatible with most common clinical centrifuges. Easy separation due to the single tube use. Supplied with specific PRFM activators. Highly concentrated PRP 2 to 4x extraction by centrifugation. Elimination of contamination, by adapting the enclosed system. Easy identification of the Buffy Coat Layer by naked eye. Gel separator minimizes RBC contamination. High count of number of platelets recovered.
				Benefits of PRFM therapy: Orthodontics, Peridontal regeneration, Anti aging(Skin), Chronic wound healing, Non healing ulcers. 
				</p>
			</article>
		  </div>
	  </div>
	  <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern " data-items="1" data-stage-padding="15" data-margin="30" data-dots="false" data-autoplay="false">
			<article class="quote-lisa disable-owl-swipe" style="padding-bottom: 0px;padding-top: 0px;">
				<img src="images/Salta Cord/PRFM_Snot_Clot_kit.png" alt=""  style="padding-bottom: 20px;"/>
				<h5 style="Color: cadetblue;">SaltaCord PRP(Ortho)/ PRFM(Snot Clot) Kit Product Competitiveness</h5><br/>
				<h6 style="Color: cadetblue; text-transform: none; ">Kit Contents</h6>
				<ul class="list-marked" style="color: dimgray;font-size: 15px;padding-right: 20px;padding-left: 30px; text-align:center; ">
                    <li>13 ml tube with gel separator, blood loading capacity 10 ml</li>
                    <li>1 ml activator of PRP/PRFM</li>
                 </ul><br/><br/><br/>
			</article>
		  </div>
	  </div>
	  <br/><br/><br/><br/><br/>
	  <!-- <section class="section section-sm section-fluid bg-default" >
        <div class="container-fluid isotope-wrap">
          <p class="wow fadeInLeft" style="text-transform: none; font-size:29px">PRP - Platelet Rich Plasma</p>
		  <IMG class="TextWrap" SRC="images/Salta Cord/PRFM_Snot_Clot_kit.png">
			  <p  data-wow-delay=".1s" style="font-family: 'Futura BK';color: dimgray; text-align: justify; font-size: 22px; padding-right: 40px;
	padding-left: 40px;" >
				PRP, or Platelet Rich Plasma, is a biological substance made from peripheral blood to trigger healing and regeneration. Platelet Rich Plasma Therapy is a relatively simple, non-surgical treatment for osteoarthritis, reducing knee sprains, healing broken bones. It merges cutting-edge technology with the body's natural ability to heal itself. Platelets contain packets of growth hormones and cytokines that trigger tissues repair, regeneration and enchance healing. When PRP is injected into the damaged area, it activates a mild inflammatory response, which triggers the healing cascade.
			</P>
        </div>
	  </section>-->
	   
      
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
                 <form  action="cancer-program.php" method="POST"  >
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