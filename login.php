<?php
	
	header('Access-Control-Allow-Origin: *');
	include('inc/db_connect.php');
	$_SESSION['page'] = 'login';
	if(isset($_GET['error'])){
		$errorExists = $_GET['error'];
	}
	if(isset($errorExists)){
		if ($errorExists == 'nomatch'){
			$noMatch = true;
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<?php include('inc/head.php') ?>
</head>
<body>	
	<div id="total-wrapper">
		<?php include('inc/nav.php') ?>
		<div id="login-wrapper" >
			<h1 class="col-md-6 col-md-offset-3" id="heading">Take a look at your PanicPast</h1>
			<div class="login col-md-4 col-md-offset-4">
				<h2 id="login-heading">Login</h2>
				<form method='post' action='processlogin.php'>
					<?php
						if(!empty($noMatch)){
							print "<p class='error' style='text-align: center'>Username or password is incorrect</p>";
						}
					?>
					<div class="form-group">
						<label>User Name</label>
						<input type="text" class="form-control" placeholder="JBSpreadHeadWSP" name="username" maxlength="11" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="At least 6 digits, letters and numbers" name="password" required>
					</div>	
					<div class="button-holder">
						<button type="submit" class="btn btn-primary btn-block">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<?php include('inc/footer.php') ?>
	</div>
</body>
</html>