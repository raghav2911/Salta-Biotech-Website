
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
	$fromemail = $_POST['email-input'];
	$subject = 'New product request';
	$jsproduct_string = $_POST['requesttabletextbox'];
	//die($message);
    $jsproduct_arr = preg_split ("/\,/", $jsproduct_string);
    $jsproduct_arr = explode (",", $jsproduct_string);
	$to = $product_request_email;
	$headers = "From: $fromemail \r\n";
	$message= '<html>
    <head>
    <style>
            #requestItems {
			  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#requestItems td, #requestItems th {
			  border: 1px solid #ddd;
			  font-size:15px;
			  padding: 8px;
			  text-align: center;
			}

			#requestItems tr:nth-child(even){background-color: #f2f2f2;}

			#requestItems tr:hover {background-color: #ddd;}

			#requestItems th {
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: center;
			  background-color: Cadetblue;
			  color: white;
			}
			</style>
    </head>
    <body>';
    //$message.='Hello,'."\n".'We want following products.'."\n".'Thanks.';
   
    $message .= '<table id="requestItems"  ><tr><th >Product Name</th><th>Quantity</th></tr>';
                for($pro=0;$pro<count($jsproduct_arr);$pro++) {
                		$split_product_quantity = explode("*", $jsproduct_arr[$pro], 2);
                		$first = $split_product_quantity[0];
                		$sec = $split_product_quantity[1];
                		$message.='<tr><td >'.$first.'</td><td >'.$sec.'</td></tr>';
                    }
                    $message.='</table></body></html>';

    $headers.= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	if(!empty($_POST['email-input']) && mail($to, $subject, $message, $headers)){
	    echo  '<script>alert("Product request sent successfully. We will get back to you soon.")</script>'; 

	}
//}

/*$inq_from=null;
if (isset($_POST['inq-email'])){
    $inq_name = $_POST['inq-name'];
    $inq_from = $_POST['inq-email'];
    $inq_subject = "Queries from $inq_name"  ;
    $inq_message = $_POST['inq-message'];
    $inq_to = $product_request_email;
    $inq_headers = "MIME-Version: 1.0" . "\r\n";
    $inq_headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $inq_headers .= "From: ".$inq_from." <".$inq_from.">\r\n";
    if(!empty($inq_from) && mail($inq_to, $inq_subject, $inq_message, $inq_headers)){
       
        echo  '<script>alert("Inquiry sent successfully. We will get back to you soon.")</script>'; 
    
    }
}*/

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Salta Products</title>
    <meta name="format-detection" content="telephone=no">
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <!--<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="https://smtpjs.com/v3/smtp.js"></script> 
	    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/logo.png" type="image/x-icon">

	<!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
			img.polaroid {
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			  text-align: center;
			}
			#requestItems {
			  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#requestItems td, #requestItems th {
			  border: 1px solid #ddd;
			  font-size:15px;
			  padding: 8px;
			  text-align: center;
			}

			#requestItems tr:nth-child(even){background-color: #f2f2f2;}

			#requestItems tr:hover {background-color: #ddd;}

			#requestItems th {
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: center;
			  background-color: Cadetblue;
			  color: white;
			}
	</style>
  </head>
  <body style="background-color:#F5F5F5;">
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
   <div class="preloader">
      <div class="preloader-body">
        </div>
      </div>
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
      <!--swipper-->
	  <section class="section swiper-container swiper-slider swiper-slider-classic " data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-direction="vertical" data-nav="false" >
        <!--<div class="swiper-wrapper text-center">
          <div class="swiper-slide" data-slide-bg="images/Products/Salta-Herbals.jpg">
          </div>
          <div class="swiper-slide" data-slide-bg="images/Products/Salta-Protein.jpg">
          </div>
         <div class="swiper-slide" data-slide-bg="images/Products/Salta-Paracetamol.jpg">
          </div>
        </div>-->
		<div class="swiper-wrapper text-center">
			<div class="swiper-slide" data-slide-bg="images/products/Salta-Herbals.jpg">
				<div class="swiper-slide-caption section-md">
				  <div class="container">
					<h1 data-caption-animate="fadeInLeft" data-caption-delay="0"></h1>
					<p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100"></p><a href="#" target="_blank" data-caption-animate="fadeInUp" data-caption-delay="200"></a>
				  </div>
				</div>
			  </div>
			  <div class="swiper-slide" data-slide-bg="images/products/Salta-Protein.jpg">
				<div class="swiper-slide-caption section-md">
				  <div class="container">
					<h1 data-caption-animate="fadeInLeft" data-caption-delay="0"></h1>
					<p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100"></p><a href="#" target="_blank" data-caption-animate="fadeInUp" data-caption-delay="200"></a>
				  </div>
				</div>
			  </div>
			  <div class="swiper-slide" data-slide-bg="images/products/Salta-Paracetamol.jpg">
				<div class="swiper-slide-caption section-md">
				  <div class="container">
					<h1 data-caption-animate="fadeInLeft" data-caption-delay="0"></h1>
					<p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100"></p><a href="#" target="_blank" data-caption-animate="fadeInUp" data-caption-delay="200"></a>
				  </div>
				</div>
			  </div>
			   <div class="swiper-slide" data-slide-bg="images/products/Salconutt.jpg">
				<div class="swiper-slide-caption section-md">
				  <div class="container">
					<h1 data-caption-animate="fadeInLeft" data-caption-delay="0"></h1>
					<p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100"></p><a href="#" target="_blank" data-caption-animate="fadeInUp" data-caption-delay="200"></a>
				  </div>
				</div>
			  </div>
		 </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination__module">
          <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
          <div class="swiper-pagination__divider"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <!-- Grid Gallery-->
      <section class="section section-xl text-center">
        <div class="container isotope-wrap">
          <div class="isotope-filters isotope-filters-horizontal">
            <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-1" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
            <ul class="isotope-filters-list" id="isotope-1">
              <li><a  class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
			  <?php
					while ($row = $product_filter->fetch_assoc()) {
							echo '<li><a href="#" data-isotope-filter="'.$row['filter'].'" data-isotope-group="gallery">'.$row['filter'].'</a></li>';
						
					}
				?>
            </ul>
			<br/></br>
			<button type="button" class="btn btn-primary" onclick="generateTable()" data-toggle="modal" data-target="#requestModal">Product Requests</button>
			<div class="modal" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModalTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="requestedProduct">Requested Products</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <form  id="sendemail" method="POST" action="Products.php" name="req-form" onsubmit="ValidateEmail();" >
				      
					  <div class="modal-body" name="request-table" style="font-family: poppins,-apple-system,BlinkMacSystemFont,segoe ui,Roboto,helvetica neue,Arial,sans-serif;
							font-size: 12px;" id="requestTable">
					  </div>
					  
					  <div class="modal-body" style="font-family: poppins,-apple-system,BlinkMacSystemFont,segoe ui,Roboto,helvetica neue,Arial,sans-serif;
							font-size: 12px;" >
							
							  <div class="form-group">
								<label for="customer-email" class="col-form-label" style="color: black;">Enter your E-mail address:</label>
								<input type="text" class="form-control" id="customer-email" name="email-input"   required>
							  </div>
							<textarea style="display:none" id="content" name="requesttabletextbox" ></textarea>
					  </div>
					   <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit"  class="btn btn-primary" id="requestEmailBtn" style=" background-color:cadetblue;">Send Email</button>
				  </div>
				  </form>
				 
				</div>
			  </div>
			</div>
          </div>
		  <!-- Button trigger modal -->

          <div class="row row-50 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            
			<?php
					while ($row = $products->fetch_assoc()) {
						echo '
						<form action="#" method="post">
							<div class="col-md-6 col-lg-4 isotope-item " data-filter="'.$row['Filter'].'">
							  <article class="thumbnail thumbnail-modern thumbnail-sm " style="padding-top: 30px;"><a  class="aclick" id="'.$row['Id'].'" href="#" data-toggle="modal" data-target="#exampleModalLong'.$row['Id'].'">
								 <img class="polaroid" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'" alt="" width="370" height="303"/>
								</a>
								<div class="thumbnail-modern-caption">
								  <h6 class="thumbnail-modern-title">'.$row['Name'].'</h6>
								  <p class="thumbnail-modern-subtitle" Style="Color:blue;font-size: 15px;">'.$row['Description'].'</p>
								  <button class="btn btn-primary" type="button" name="request" onclick="storeVar(this)" value="'.$row['Name'].'" data-toggle="modal" data-target="#successModal">Available on Request</button>
								</div>
							  </article>
							</div>
							<!-- Modal -->
								
						</form>
								<div class="modal" id="exampleModalLong'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">'.$row['Name'].' </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body" style="font-family: poppins,-apple-system,BlinkMacSystemFont,segoe ui,Roboto,helvetica neue,Arial,sans-serif;
											font-size: 12px;">
											'.
											(($row['Name']=="Salbumin")?'<a href="salbumin.php">Golden Opportunity for Dieticians and Nutritionists</a><br/>':"")
											.'
										'.nl2br(htmlspecialchars($row['Modal_Description'])).'
									  </div>
									</div>
								  </div>
								</div>
							';
					}
				?>
				<div id="successModal" class="modal">
					<div class="modal-dialog">
						<div class="modal-content">
							 <div class="modal-header">
								<h5 class="modal-title" id="requestedProduct">Success</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							<div class="modal-body">
								Product added successfully !
							</div>
						</div> 
					</div>
				</div>
          </div>
        </div>
      </section>
	  <button type="button" class="btn btn-primary" onclick="generateTable()" data-toggle="modal" data-target="#requestModal">Product Requests</button>
	  <br/><br/>
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
                    <form  action="Products.php" method="POST"  >
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
                <!--<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-name-6" type="text" name="name" data-constraints="@Required"/>
                    <label class="form-label" for="contact-name-6">Name</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required"/>
                    <label class="form-label" for="contact-email-6">E-mail</label>
                  </div>
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message-6">Message</label>
                    <textarea class="form-input" id="contact-message-6" name="message" data-constraints="@Required"></textarea>
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
	<script type="text/javascript">
            if ( window.history.replaceState ) {
                  window.history.replaceState( null, null, window.location.href );
                }
        </script>
	<script>
	
	$(".aclick").click(function (e) {
        e.preventDefault();
        var id = $(this).attr('Id');
        //console.log(id);
        $('#exampleModalLong'+id).modal('show');
    });
	$('.modal-dialog').parent().on('show.bs.modal', function(e){        $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); });
	$(function(){
		$('#successModal').on('show.bs.modal', function(){
			var myModal = $(this);
			clearTimeout(myModal.data('hideInterval'));
			myModal.data('hideInterval', setTimeout(function(){
				myModal.modal('hide');
			}, 1000));
		});
	});
   /* $("#sendemail").submit(function() {
        $("#content").val($("#requestTable").html());
    });*/
	/*$(document).ready(function() { 
  
            $("#requestEmailBtn").click(function() { 
                $("#requestModal").modal("hide"); 
            }); 
  
            $("#myModal").on('hide.bs.modal', function() { 
                alert('The modal is about to be hidden.'); 
            }); 
        }); 
	$(function() {
			   $('#requestModal').click(function() {
					$('#requestEmailBtn').modal('hide');
				});
			});*/
	</script >
	
	<script type="text/javascript">
			var itemList = new Array();
			var unique = new Array();
			var map = new Map();
			var email;
			function onlyUnique(value, index, self) { 
				return self.indexOf(value) === index;
			}
			function storeVar(el) {
				if (map.has(el.value)){
					map.set(el.value, map.get(el.value)+1);
					console.log('>>>>>>has',map);
				}else{
					map.set(el.value, 1);
					console.log('>>>>>>',map);
				}
						
			}
			function removeVal(product) {
					console.log('removeVal',product);
					console.log('map',map.has(product));
					map.delete(product);
					generateTable();
			}
			function increase(productkey){
				if (map.has(productkey)){
					map.set(productkey, map.get(productkey)+1);
					generateTable();
				}
			}
			function decrease(productkey){
				if (map.has(productkey) && map.get(productkey)!=1){
					map.set(productkey, map.get(productkey)-1);
					generateTable();
				}else{
					alert("The minimum quantity of requested product should be 1. Please remove the product if you do not want to make request.");
				}
			}
		function ValidateEmail()
					{
						console.log('>>>>>>>>>>>>>>>>>>>>>>>>>>>>',document.getElementById("customer-email"));
						if(!document.getElementById("customer-email") || !document.getElementById("customer-email").value){
							alert("Please enter your email address");
							$('#sendemail').submit(false);
						}else{
							var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
							if(document.getElementById("customer-email").value.match(mailformat))
							{
								//email=document.getElementById("customer-email");
								//sendEmail();
								$('#sendemail').submit(true);
							}
							else
							{
								alert("You have entered an invalid email address!");
								$('#sendemail').submit(false);
							}
						}
						
				}

			function generateTable(){
				if(map.size==0){
					document.getElementById("customer-email").disabled = true;
					document.getElementById("requestEmailBtn").disabled = true;
					
				}else{
					document.getElementById("customer-email").disabled = false;
					document.getElementById("requestEmailBtn").disabled = false;
				}
				var mapToPhp="";
				var myTable= "<table id=\"requestItems\" border=\"1\"><tr><th>Remove</th><th>Product Name</th>";
				myTable+="<th>Quantity</th><th>Alter Quantity</th></tr>";

			  for (let [key, value] of map) {
			      mapToPhp+=key+"*"+value+",";
				myTable+="<tr><td> <a href='' onclick=\"removeVal('"+key+"');return false;\" style=\"color:red;\">X</a> </td>";
				myTable+="<td>" + key + "</td>";
				myTable+="<td>"+value+"  </td>";
				myTable+="<td><a href='' onclick=\"increase('"+key+"');return false;\"  ><span style=\"font-size:27px;\">+</span></a> <span style=\"font-size:27px;\">/</span> <a href='' onclick=\"decrease('"+key+"');return false;\"  ><span style=\"font-size:30px;color: #756aee;\">&minus;</span></a></td></tr>";
			  }  
			   myTable+="</table>";
			   document.getElementById('requestTable').innerHTML = myTable;
			   document.getElementById('content').innerHTML = mapToPhp.replace(/,\s*$/, "");
				
			}
			/*function sendEmail() {
				Email.send({
				Host: "smtp.gmail.com",
				Username : 'priyankasodhani702@gmail.com',
				Password : 'Komal@1234',
				To : 'priyankasodhani702@gmail.com',
				From : email,
				Subject : "<email subject>",
				Body : "<email body>",
				}).then(
					message => alert("mail sent successfully")
				);
				document.getElementById("customer-email").value=''; 
				map.clear();
				generateTable();
			}*/
			
			
				
	</script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>