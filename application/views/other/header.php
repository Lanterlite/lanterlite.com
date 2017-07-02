<!DOCTYPE HTML>
<html>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/navbar.css"/>
	<link type="image/ico" rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/brown-favicon.ico">
	
	<title>
		<?php if ($title){ echo $title; } else { echo 'Default Title'; }?>       
	</title>	
	<style>
	#bukta a:hover { background-color: rgb(248, 220, 109); }
	#bukta a:link { background-color: rgb(203, 175, 124); }
	#bukta a { color: white; padding: 7px 14px; text-align: center; text-decoration: none; }
	</style>
	<!-- LOGO AND NAVBAR -->
	<body background="<?php echo base_url(); ?>assets/images/bgimage.jpg">

	<div id="label">
		<table width="1477">
		<tr>
		<td>
			<img src="<?php echo base_url(); ?>assets/images/blog-header.gif" style="height:70px; width:250px;"/>
		</td>
		<td>
		<div id="bukta">
			<a href="<?php echo base_url(); ?>buku_tamu_ctrl/buku_tamu" style="<?php if($this->uri->segment(1)=="buku_tamu_ctrl"){echo "background-color: rgb(248, 220, 109);";}?>">Buku Tamu</a>
		</div>
		</td>
		</tr>
		</table>
	</div>
	
	<div id="nav-bar">
		<ul>
			<li><a href="<?php echo base_url(); ?>" style="<?php if($this->uri->segment(1)==""){echo "background-color: rgb(248, 220, 109);";}?>">Halaman Utama</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn" style="<?php if($this->uri->segment(1)=="download"){echo "background-color: rgb(248, 220, 109);";}?>">Download</a>
			<div class="dropdown-content">
				<a href="<?php echo base_url(); ?>download/download_mp3">Mp3 Kajian</a>
			</div>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn" style="<?php if($this->uri->segment(1)=="ustaz_khalid_menjawab"){echo "background-color: rgb(248, 220, 109);";}?>">Ustaz Khalid Menjawab</a>
			<div class="dropdown-content">
				<a href="<?php echo base_url(); ?>ustaz_khalid_menjawab/rumah_tangga">Rumah Tangga</a>
			</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn" style="<?php if($this->uri->segment(1)=="ensiklopedi"){echo "background-color: rgb(248, 220, 109);";}?>">Ensiklopedi Islam</a>
			<div class="dropdown-content">
				<a href="<?php echo base_url(); ?>ensiklopedi_islam/rumah_tangga">Rumah Tangga</a>
			</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn" style="<?php if($this->uri->segment(1)=="kisah_sahabat_nabi"){echo "background-color: rgb(248, 220, 109);";}?>" >Kisah Tokoh Muslim</a>
			<div class="dropdown-content">
				<a href="<?php echo base_url(); ?>kisah_tokoh_islam/kisah_sahabat_nabi">Kisah Sahabat Nabi</a>
				<a href="<?php echo base_url(); ?>kisah_tokoh_islam/kisah_nabi_dan_rasul">Kisah Nabi dan Rasul</a>
			</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn" style="<?php if($this->uri->segment(1)=="teknologi"){echo "background-color: rgb(248, 220, 109);";}?>">Info Teknologi</a>
			<div class="dropdown-content">
				<a href="<?php echo base_url(); ?>teknologi/diver">Diver</a>
			</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn" style="<?php if($this->uri->segment(1)=="karya_lanterlite"){echo "background-color: rgb(248, 220, 109);";}?>">Karya Lanterlite</a>
			<div class="dropdown-content">
				<a href="<?php echo base_url(); ?>karya_lanterlite/aplikasi_android">Aplikasi Android</a>
				<a href="<?php echo base_url(); ?>karya_lanterlite/aplikasi_desktop">Aplikasi Desktop</a>
				<a href="<?php echo base_url(); ?>karya_lanterlite/aplikasi_web">Aplikasi Web</a>
			</div>
			</li>
		</ul>
	</div>
	<!-- END: LOGO AND NAVBAR -->	
	
	</body>
</html> 