<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('images/icons/Micell icon.ico') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/animate/animate.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css') ?>">

<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="<?php echo base_url('images/Micell icon.jpg') ?>" alt="IMG">
			</div>
			<form method="post" action="<?php echo base_url()?>form_controller/form_validation" class="contact1-form validate-form">
				<?php
					if($this->uri->segment(2) == "inserted")
					{
						echo '<p class="text-success">Data inserted</p>';
					}
				?>
				<span class="contact1-form-title">
					Get in touch
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="USER_Name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>
				<?php echo form_error('USER_Name','<div class="alert alert-danger">', '</div>') ?>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="USER_Email" placeholder="Email">
					<span class="shadow-input1"></span>
					<?php echo form_error('USER_Email','<div class="alert alert-danger">', '</div>') ?>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Address is required">
					<textarea class="input1" type="text" name="USER_Address" placeholder="Address"></textarea>
					<span class="shadow-input1"></span>
					<?php echo form_error('USER_Address','<div class="alert alert-danger">', '</div>') ?>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Date of Birth is required">
				    <h6 class="text-center">Date of Birth</h6>
					<input class="input1" name="USER_Dob" placeholder="Date of Birth" type="date">
					<span class="shadow-input1"></span>
					<?php echo form_error('USER_Dob','<div class="alert alert-danger">', '</div>') ?>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Phone Number required">
					<input class="input1" name="USER_Phone_No" placeholder="Phone Number">
					<span class="shadow-input1"></span>
					<?php echo form_error('USER_Phone_No','<div class="alert alert-danger">', '</div>') ?>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/tilt/tilt.jquery.min.js') ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
