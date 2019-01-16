<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>WebDesa</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="<?php echo site_url();?>assets/login/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="<?php echo site_url();?>/assets/login/css/style.css" type="text/css" media="all">

<!-- Fonts -->
<link href="<?php echo site_url();?>assets/login/fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<!-- <h1>LOGIN FORM</h1> -->
	<br><br><br><br><br><br><br>
	<div class="w3layoutscontaineragileits">
	<?php echo form_open('Login/cekLogin'); ?>
	<h2>Login here</h2> 
	<?php echo validation_errors()?>
		<form action="#" method="post">
			<input type="text" Name="Username" placeholder="USERNAME" required="">
			<input type="password" Name="Password" placeholder="PASSWORD" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
					<a href="#">Forgot password?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN">
				<?php echo form_close(); ?>
				<p> To register new account <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Click Here</a></p>
				<div class="clear"></div>
			</div>

		</form>
	
	</div>
	
	<!-- for register popup -->
	<!-- <div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<?php echo form_open('Login/register'); ?>
                    <?php echo validation_errors()?>
				<h3>Register Form</h3>
				<form action="#" method="post">
						
						<div class="form-sub-w3ls">
							<input placeholder="Nama" id="nama" name="nama" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="TTL" id="ttl" name="ttl" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						
						<div class="form-sub-w3ls">
							<input placeholder="Jenis Kelamin" id="jenkel" name="jenkel" type="text" required="">
							
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Alamat" id="alamat" name="alamat" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Agama" id="agama" name="agama" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Status" id="status" name="status" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Pendidikan" id="pendidikan" name="pendidikan" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Jabatan" id="jabatan" name="jabatan" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<br>	
						<div class="form-sub-w3ls">
                           <select class="form-control" id="level" name="level" required="">
                             <option selected="">Pilih Jenis Pendaftaran</option>
                             <option value="rt">Pegawai</option>
                           </select>
                          <div class="icon-agile">  
                          </div>
                        </div>
                        <br><br>
						<div class="form-sub-w3ls">
							<input placeholder="User Name" id="username" name="username" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Email" class="mail" id="email" name="email" type="email" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Password" id="password" name="password"  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<!-- <div class="form-sub-w3ls">
							<input placeholder="Confirm Password"  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div> -->
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I Accept Terms & Conditions</label>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="Register">
					</div>
					<?php echo form_close(); ?>
				</form>
			</div>
		</div>	
	</div> -->
	<!-- //for register popup -->
	
<!-- 	<div class="w3footeragile">
		<p> &copy; 2017 Existing Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
	</div> -->

	
	<script type="text/javascript" src="<?php echo site_url();?>assets/login/js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="<?php echo site_url();?>assets/login/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->

</html>