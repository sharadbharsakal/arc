
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DeskApp Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="vendors/styles/style.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Login</h2>

			<form method="post">
				<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
					<div class="btn-list">
						<center><a href="admin/index.php"><button type="button" class="btn btn-block" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-user-o"></i> Admin</button></a><br>
						<a href="doctor/index.php"><button type="button" class="btn btn-block" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-user-md"></i> Doctor</button></a><br>
						<a href="consultant/index.php"><button type="button" class="btn btn-block" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-user-circle-o"></i> Consultant</button></a><br>
						<a href="patient/index.php"><button type="button" class="btn btn-block" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-user"></i> Patient</button></center>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>
