<?php 
	include 'lib/Database.php';
	include 'config/config.php';
	$db = new Database();

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student info Chart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="v_assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="v_assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="v_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="v_assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="v_assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="v_assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="v_assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="v_assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<span class="contact100-form-title">
					User Information Chart
			</span>

			<div style="margin-top: -50px; margin-bottom: 50px;" class="container-contact100-form-btn text-center">
				<a href="index.php"><button style="padding: 0 40px;" type="submit" class="contact100-form-btn ">Add Information<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></button></a>
			</div>
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">SL No </th>
								<th class="column2">Name</th>
								<th class="column3">Email</th>
								<th class="column4">Phone No.</th>
								<th class="column5">Age</th>
								<th class="column6">Roll</th>
								<th class="column7">B. group</th>
								<th class="column8">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if(isset($_GET['delid'])){
									$deleteid = $_GET['delid'];
									$query    = "DELETE FROM student WHERE id= '$deleteid'";
									$delete   = $db->delete($query);
									if($delete){
										echo "<span Style='color:green;margin-top:30px;font-size: 23px;font-weight: 700;margin-left: 10px;'>Successfully Deleted </span>";
									}
									else{
										echo "<span Style='color:Red;margin-top:30px;font-size: 23px;font-weight: 700;margin-left: 10px;'>Data Not Delete </span>";
									}
								}
							?>

							<?php 
								$query = "SELECT * FROM student";
								$view  =  $db->select($query);

								if($view){
									while($result = $view-> fetch_assoc()){
							 ?>
								<tr>
									<td class="column1"><?php echo $result['id'] ?></td>
									<td class="column2"><?php echo $result['name'] ?></td>
									<td class="column3"><?php echo $result['email'] ?></td>
									<td class="column4"><?php echo $result['phone'] ?></td>
									<td class="column5"><?php echo $result['age'] ?></td>
									<td class="column6"><?php echo $result['roll'] ?></td>
									<td class="column7"><?php echo $result['blood'] ?></td>
									<td class="column8">
										<a href="view.php?delid=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
										<a href="edit.php?editid=<?php echo $result['id'] ?>" class="btn btn-info">Edit</a>
									</td>
								</tr>

							<?php }}?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="v_assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="v_assets/vendor/bootstrap/js/popper.js"></script>
	<script src="v_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="v_assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="v_assets/js/main.js"></script>

</body>
</html>