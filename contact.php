<!DOCTYPE html>
<?php 
if(isset($_POST['submit'])){
	
	if(isset($_REQUEST['email'])){
		$to = 'ceo@dsmart-textiles.com';
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['txt'];
		$msge = $_REQUEST['massage'];
		
		mail($to,$subject,$txt,"From".$email);
		
		echo "massage sent";
	}else{
		echo "msage not sent";
	}

}
?>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/ico" href="ds.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>
				<div class= "weather">			
<div id="cont_e0d24c67a0e417307bc56f3ee9a46d0f"><script type="text/javascript" async src="https://www.theweather.com/wid_loader/e0d24c67a0e417307bc56f3ee9a46d0f"></script></div></div>
	
			<h1><strong class ="ho">D SMART </strong>TEXTILES<h1>&nbsp&nbsp
				<div class="topbar-child2">
				
					<span class="topbar-email">
						ceo@dsmart-textiles.com 
					</span>&nbsp&nbsp
							<body onload="startTime()">
							<div id="txt"></div>
					<div class="topbar-language rs1-select2">
					</div>
					
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
				<img src="https://dsmartcollection.com/asset/image/icon/logo.png" style="width: 40px; height: 60px" alt="D Smart">
				</a>

					<!-- Menu -->
					<div class="menubar">
	
	
	<ul class="menu cf">
  <li><a href="index.html">HOME</a></li>
  <li>
    <a href="">INFRASTRUCTURE</a>
    <ul class="submenu">
      <li><a href="team.html">OUR TEAM</a></li>
      <li><a href="factory.html">OUR FACTORY</a></li>
      <li><a href="quality.html">QUALITY CONTROL</a></li>
    </ul>			
  </li>
  <li><a href="product.html">PRODUCT</a>
  <ul class="submenu">
      <li><a href="tshirt.html">T SHIRT</a></li>
      <li><a href="shirt.html">SHIRT</a></li>
      <li><a href="denim.html">DENIM</li>
      <li><a href="product.html">MORE</a></li>
    </ul>
  </li>
  <li><a href="stocklot.html">STOCKLOT</a>
							<ul class="submenu">
							<li><a href="fabricstocklot.html">FABRICS</a></li>
							<li><a href="productstocklot.html">PRODUCT</a></li>
							</ul>
						</li>
	<li><a href="">PROJECT</a>
  <ul class="submenu">
      <li><a href="schoolproject.html">SCHOOL PROJECT</a></li>
    </ul>
  </li>
  <li><a href="">ABOUT US</a>
  <ul class="submenu">
      <li><a href="ourmission.html">OUR MISSION</a></li>
      <li><a href="ourvision.html">OUR VISION</a></li>
      <li><a href="ourvalue.html">OUR VALUE</a></li>
      <li><a href="responsibilites.html">OUR RESPONSIBILITIES</a></li>
    </ul>
  </li>
  <li><a href="contact.html">CONTACT US</a> </li>
  
</ul>
</div>
				<!-- Header Icon -->
				
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="https://dsmartcollection.com/asset/image/icon/logo.png" alt="IMG-LOGO"> D SMART COLLECTION
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								ceo@dsmart-textiles.com
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">HOME</a>
						
					</li>

					<li class="item-menu-mobile">
						<a href="">INFRASTRUCTURE</a>
						<ul class="sub-menu">
							<li><a href="team.html">OUR TEAM</a></li>
							<li><a href="factory.html">OUR FACTORY</a></li>
							<li><a href="quality.html">QUALITY CONTROL</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">PRODUCT</a>
							<ul class="sub-menu">
							<li><a href="tshirt.html">T SHIRT</a></li>
							<li><a href="shirt.html">SHIRT</a></li>
							<li><a href="product.html">MORE</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="stocklot.html">STOCKLOT</a>
						<ul class="sub-menu">
							<li><a href="fabricstocklot.html">FABRICS LOT</a></li>
							<li><a href="productstocklot.html">PRODUCT LOT</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">PROJECT</a>
						<ul class="sub-menu">
								<li><a href="schoolproject.html">SCHOOL PROJECT</a></li>						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>
					<li class="item-menu-mobile">
						  <li><a href="contact.html">CONTACT US</a> </li>
							<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>

					</li>

					<li class="item-menu-mobile">
						<a href="about.html">ABOUT US</a>
						<ul class="sub-menu">
								<li><a href="ourmission.html">OUR MISSION</a></li>
								<li><a href="ourvision.html">OUR VISION</a></li>
								<li><a href="ourvalue.html">OUR VALUE</a></li>
								<li><a href="responsibilites.html">OUR RESPONSIBILITIES</a></li></ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
			
					</li>

					
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(contactimage.jpg);">
		<h2 class="l-text2 t-center">
			Contact
		</h2>
	</section>
	
<div class ="dn">

	<!-- content page -->
		<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="23.785441" data-map-y="90.347404" data-pin="marker2.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
				
					<form class="leave-comment" method="post" action="">
						<h4 class="m-text26 p-b-36 p-t-15">
							Send us your message
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="fullname" placeholder="Full Name">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="txt" placeholder="Phone Number">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

						<div class="w-size25">
						<p class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
			
						<input type ="submit" name="submit" value="Send"/></p>
							<!-- Button -->
			
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

</div>

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						<strong> HEAD OFFICE</strong><br>
D SMART TEXTILES<br>
79/A, 1st Colony<br>
Mazar Road, Mipur-1.<br>
Dhaka-1216, Bangladesh<br>
 +880 1933657804, +880 198206817
 
						</p>

					<div class="flex-m p-t-30">
							<a href= "https://www.facebook.com/dsmarttextiles/" class="fs-18 color1 p-r-20 fa fa-facebook" target="_blank"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Product
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							T-Shirt
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shirt
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Polo-Shirt
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sweater
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="about.html" target="_blank" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="contact.html" target="_blank" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | D SMART TEXTILES
			</div>
		</div>
	</footer>




	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	

</body>
</html>
