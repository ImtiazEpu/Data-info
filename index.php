<?php 
	include 'lib/Database.php';
	include 'config/config.php';
	$db = new Database();

 ?>

 <?php 

 if (isset($_POST['submit'])) {

 	$name  = $_POST['name'];
 	$email = $_POST['email'];
 	$phone = $_POST['phone'];
 	$age   = $_POST['age'];
 	$roll  = $_POST['roll'];
 	$blood = $_POST['blood'];


 	 	$query = "INSERT INTO student(name,email,phone,age,roll,blood) VALUES('$name','$email','$phone','$age','$roll','$blood')";
 		$result = $db->insert($query);
 	
 }

 	

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Information System </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<span  class="contact100-form-title">
					User Information System
			</span>

			<div style="margin-top: -50px; margin-bottom: 50px;" class="container-contact100-form-btn text-center">
				<a href="view.php" target="_blank"><button style="padding: 0 40px;" type="submit" class="contact100-form-btn ">View<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></button></a>
			</div>



			
			<form action="" method= "POST" class="contact100-form validate-form">
				
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name" >
					<label for="name" class="label-input100">FULL NAME *</label>
					<input class="input100" type="text" name="name" id="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@mail.com)" >
					<label for="email" class="label-input100">Email *</label>
					<input class="input100" type="email" name="email" id="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Phone Number)">
					<label for="phone" class="label-input100">Phone *</label>
					<input class="input100" type="number" name="phone" id="phone" placeholder="Enter Phone Number">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Age">
					<label for="age" class="label-input100">Age *</label>
					<input class="input100" type="number" name="age" id="age" placeholder="Enter your age">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Roll">
					<label for="roll" class="label-input100">Roll *</label>
					<input class="input100" type="number" name="roll" id="roll" placeholder="Enter your roll">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<label for="" class="label-input100">Your blood group *</label>
					<div>
						<select class="js-select2" name="blood">
							<option>Select Your blood group</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
							<option>O+</option>
							<option>O-</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="container-contact100-form-btn">
					<button name="submit" class="contact100-form-btn"><span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span></button>
				</div>
				<?php 

					if (isset($result)) {

 						echo "<span Style='color:green;margin-top:30px;font-size: 23px;font-weight: 700;margin-left: 10px;'>Successfully Submitted </span>";
 					}
 					
				 ?>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>


	
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
</body>
</html>
