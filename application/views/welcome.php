<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/style.css"/>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/navbar.css"/>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/slideshow.css"/>

</head>

	<body background="<?php echo base_url(); ?>assets/images/bgimage.jpg">

	<div id="home-post">
		<table cellpadding="18px">
		<thead>
		<tr>
			<th rowspan="2"><font color="red" style="font-family:calibri; font-size:30px;">Topik Terfavorit<font></th>
			<th><font color="blue" style="font-family:calibri; font-size:20px;">Topik Terfavorit lainnya<font></th>
		</tr>			
		</thead>
		<tbody>
		<tr>
		<td rowspan="2">
			<div class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="<?php echo base_url(); ?>assets/images/mp04.png" style="height:380px; width:700px;"/>
					<div class="text">Information 1</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="<?php echo base_url(); ?>assets/images/mp05.png" style="height:380px; width:700px;"/>
					<div class="text">Information 2</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="<?php echo base_url(); ?>assets/images/mp06.png" style="height:380px; width:700px;"/>
					<div class="text">Information 3</div>
				</div>
			</div>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
		</td>
			<td><a class="twitter-timeline" data-width="300" data-height="400" data-dnt="true" data-theme="dark" data-link-color="#2B7BB9" href="https://twitter.com/lanterlite">Tweets by lanterlite</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</td>
		</tr>
		<tr>
			<td><img src="<?php echo base_url(); ?>assets/images/mp03.png" style="height:175px; width:305px;"/></td>
		</tr>
		</tbody>
		</table>
	</div>
	
	<div id="home-post-bottom">
		<table cellpadding="17px">
		<thead>
		<tr>
			<th rowspan="5"><font color="black" style="font-family:calibri; font-size:20px;">Topik Lainnya<font></th>
		</tr>			
		</thead>
		<tbody>
		<tr>
			<td><img src="<?php echo base_url(); ?>assets/images/mp04.png" style="height:100px; width:180px;"/></td>
			<td><img src="<?php echo base_url(); ?>assets/images/mp05.png" style="height:100px; width:180px;"/></td>
			<td><img src="<?php echo base_url(); ?>assets/images/mp06.png" style="height:100px; width:180px;"/></td>
			<td><img src="<?php echo base_url(); ?>assets/images/mp07.png" style="height:100px; width:180px;"/></td>
			<td><img src="<?php echo base_url(); ?>assets/images/mp08.png" style="height:100px; width:180px;"/></td>
		</tr>
		</tbody>
		</table>
	</div>
	
	<!-- SLIDE SHOW SCRIPT -->
	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
			   slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex> slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 3000); // Change image every 2 seconds
		}
	</script>
	<!-- END: SLIDE SHOW SCRIPT -->

	</body>

</html>